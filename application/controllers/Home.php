<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
    function __construct()
    {
        parent::__construct();
            $this->load->helper('url');

    }
	public function index()
	{
		$this->load->model('biodata');
		$data['biodata_array']=$this->biodata->getBiodataQueryArray();
		$data['biodata_object']=$this->biodata->getBiodataQueryObject();
		$data['biodatabuilder_array']=$this->biodata->getBiodataBuilderArray();
		$data['biodatabuilder_object']=$this->biodata->getBiodataBuilderObject();
		$this->load->view('home',$data);
	}

	public function menu1()
	{
		$dataku['isi_halaman'] = 'Biodata Web';
		$this->load->view('about_view', $dataku);
		//$this->load->view('about_view');
	}

	public function menu2()
	{
		$this->load->view('contact_view');
	}	

	public function blog()
	{
	 $this->load->view('dashboard/index');
	}

}
