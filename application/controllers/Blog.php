<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogcreate extends CI_Controller {
    var $image_path;
    var $image_path_url;
    
    function __construct()
    {
        parent::__construct();
            $this->load->model('m_blogcreate');
            // $this->image_path = realpath(APPPATH . '/images');
            // $this->image_path_url = base() . 'images/';

    }
public function create()
    {

        $data['page_title'] = 'Tulis Artikel';

        // Dapatkan semua kategori, nanti ditampilkan dalam bentuk dropdown
        $data['categories'] = $this->category_model->get_all_categories();
