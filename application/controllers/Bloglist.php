<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bloglist extends CI_Controller {
	
    function __construct()
    {
        parent::__construct();
			//$this->load->helper('url');
			

    }

	public function index()
	{
		
		$this->load->model('m_bloglist'); //load model blog list

		
		$data['all_artikel']=$this->m_bloglist->getBlog(); 
		$this->load->view('dashboard/index',$data);
		
		
		
	}

	public function halaman()
    {

        $data['page_title'] = 'List Artikel';
        
        // Dapatkan data dari model Blog dengan pagination
        // Jumlah artikel per halaman
        $limit_per_page = 6;

        // URI segment untuk mendeteksi "halaman ke berapa" dari URL
        $start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

        // Dapatkan jumlah 
        $total_records = $this->blog_model->get_total();
    
        if ($total_records > 0) {
            // Dapatkan data pada halaman yg dituju
            $data["all_artikel"] = $this->blog_model->get_all_artikel($limit_per_page, 
        $start_index);
            
            // Konfigurasi pagination
            $config['base_url'] = base_url() . 'blog/index';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
            
            $this->pagination->initialize($config);
                
            // Buat link pagination
            $data["links"] = $this->pagination->create_links();
           
        }    
    }
    

	public function blogdetail()
	{
		$this->load->model('m_bloglist'); //load model blog list
		$datadetail['datadetail']=$this->m_bloglist->getBlog(); 
		$this->load->view('dashboard/blogview', $datadetail);
	}	

}
