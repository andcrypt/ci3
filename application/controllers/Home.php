<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
    function __construct()
    {
        parent::__construct();
            $this->load->helper('url');

    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Home
	 *	- or -
	 * 		http://example.com/index.php/Home/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Home/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
