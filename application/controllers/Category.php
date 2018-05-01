<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	
    function __construct()
    {
        parent::__construct();
			$this->load->helper('url');
			

	}
	public function index()
	{
		
		$this->load->model('category_model');
		 // Judul Halaman
		 $data['page_title'] = 'List Kategori';
 
		 // Dapatkan semua kategori
		 $data['categories'] = $this->category_model->get_all_categories();
		
		 //var_dump($data['categories']);exit;
 
		 $this->load->view('header');
		 $this->load->view('dashboard/cat_view', $data);
		
	 }

	 
public function create()
	{
		$data['page_title'] = 'Buat Kategori';

		$this->form_validation->set_rules(
			'cat_name', 
			'Nama Kategori', 
			'required|is_unique[categories.cat_name]',
			array(
				'required' => 'Isi % dong, males bosque?',
                'is_unique' => 'Judul' . $this->input->post('title').'sudah ada bosque'
                )
            );
		if($this->form_validation->run() === FALSE){
            $this->load->view('header');
            $this->load->view('dashboard/cat_create', $data);
            // $this->load->view('footer');
        } else {
            $this->category_model->create_category();
            redirect('category');
        }
    }

    public function update($id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		// Form validasi untuk Nama Kategori
		$this->form_validation->set_rules(
			'cat_name',
			'Nama Kategori',
			'required|is_unique[categories.cat_name]',
			array(
				'required' => 'Isi %s donk, males amat.',
				'is_unique' => 'Judul <strong>' . $this->input->post('cat_name') . '</strong> sudah ada bosque.'
			)
		);
		$data['cat_update'] = $this->category_model->read_category($id);
		if($this->form_validation->run() === FALSE){
	
			$this->load->view('dashboard/cat_update', $data);
		
		} 
		else {
			$this->Category_model->update_category($id);
			redirect('category');
		}
    }
    
    public function delete($id)
	{
		$this->Category_model->delete_category($id);
		redirect('category');
	}

	
}