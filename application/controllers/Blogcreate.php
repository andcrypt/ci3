<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogcreate extends CI_Controller {
    var $image_path;
    var $image_path_url;
    
    function __construct()
    {
        parent::__construct();
			$this->load->helper('url');
            $this->image_path = realpath(APPPATH . '.../images');
            $this->image_path_url = base() . 'images/';

    }

	public function index()
	{
		$this->load->view('addartikel');
	}

    function addartikel(){
        if($this->input->post('title')){
            
            $this->model_dashboard->insert($judul,$tanggal,$author,$isi,$gambar);
            $config = array(
                'allowed_types' => 'jpg|jpeg|gif|png',
                'upload_path' => $this->galery_path,
                'max_size' => 2000
                );
                //konfigurasi
            $this->load->libary('upload',$config);
                //proses upload
            if ($this->upload->do_upload()) 
                 {
                    echo "berhasil Upload";
                 }
            else
                {
                    echo "Gagal";
                }
            redirect('dashboard/addartikel');
        }else{
            $this->load->view('form_artikel');
        }
    }

}
