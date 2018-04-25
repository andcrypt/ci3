<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	
    function __construct()
    {
        parent::__construct();
			$this->load->helper('url');
			

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
}