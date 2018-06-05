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

	public function index()
	{
		$this->load->view('addartikel');
	}

    public function simpanblog()
    {
        $data = $this->input->post();
       
        if($_FILES['userfile']['name'] != '')
        {
        
        $namagambar = $_FILES['userfile']['name'];
        $config['upload_path']          = './asset/img/';
        $config['file_name']            = $namagambar;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;


        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());
                echo $this->upload->display_errors();
                exit();
        }
        else
        {
                echo'sukses';
        }
        }
        

       //validasi
        if($data['id'] != ''){
            if($data['title'] == '')
            {
                $eror['title'] = 'title kosong';
            }
            if($data['author'] == '')
            {
                $eror['author'] = 'author kosong';
            }
            if($data['date'] == '')
            {
                $eror['date'] = 'date kosong';
            }
            if($data['content'] == '')
            {
                $eror['content'] = 'isi konten kosong';
            }
            if(isset($eror)){
            $this->session->set_flashdata('pesan', $eror);
            exit();
            }
            
            $insert = $this->m_blogcreate->update($data,$namagambar,$data['id']);
            redirect(base_url().'blogcreate/addartikel/').$data['id'];
        }else{

            $insert = $this->m_blogcreate->insert($data,$namagambar);
        }
       
                if($insert == 1){
                    redirect(base_url().'bloglist');
                }
                else{
                    redirect(base_url().'blogcreate/addartikel');
                }
               
                
        
    }
    function addartikel($id=''){ //edit
        if ($_SESSION['level']) {
            $this->session->set_flashdata('tidakBerhak', 'Anda Tidak Berhak Mengedit Artikel! login Ulang!');
            redirect('user/login');
        }
        if($id != '')
        {
        
        $this->db->where('id',$id);            
        $get=$this->db->get_where('blog')->row_array();
        $data['blog']=$get;
        $data['id'] = $id;
        $this->load->view('dashboard/addartikel',$data); 
       }else{
        $this->load->view('dashboard/addartikel');
       }

        }

        function hapus($id){ //hapus e
            $where = array('id' => $id);
            $this->m_blogcreate->hapusartikel($where,'blog');
            redirect('dashboard/index');
        }
}
