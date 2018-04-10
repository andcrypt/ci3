<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Blogcreate extends CI_Model{

    public function __construct()
    {
      parent::__construct();
   

    }

    public function insert($judul,$tanggal,$author,$isi,$gambar){
        $data=array('artikel_title'=>$this->input->post('title'),
                    'artikel_tanggal'=>$this->input->post('date'),
                    'artikel_author'=>$this->input->post('author'),
                    'artikel_isi'=>$this->input->post('content'),
                    'artikel_gambar'=>$this->input->post('image_file')
                );

        $this->db->insert('artikel',$data);
        redirect('dashboard/index');

    }

}

?>
