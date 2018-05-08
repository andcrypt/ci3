<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    var $image_path;
    var $image_path_url;
    
    function __construct()
    {
        parent::__construct();
            //$this->load->model('m_blogcreate');
            // $this->image_path = realpath(APPPATH . '/images');
            // $this->image_path_url = base() . 'images/';

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
    
    public function create()
    {

        $data['page_title'] = 'Tulis Artikel';

        // Dapatkan semua kategori, nanti ditampilkan dalam bentuk dropdown
        $data['categories'] = $this->category_model->get_all_categories();
    }

    
}
?>