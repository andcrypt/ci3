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
		$data['datablog']=$this->m_bloglist->getBlog(); 
		$this->load->view('dashboard/index',$data);
	}

 

}
