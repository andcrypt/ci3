<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

public function __construct()
{
    parent::__construct();
            
    $this->load->library('form_validation');
    $this->load->model('user_model');
}

public function register(){
    $data['page_title'] = 'Pendaftaran User';

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('username', 'Username', 
'required|is_unique[users.username]');
    $this->form_validation->set_rules('email', 'Email', 
'required|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('passwordkonfrim', 'Konfirmasi Password', 
'matches[password]');

if($this->form_validation->run() === FALSE){
    $this->load->view('header');
    $this->load->view('dashboard/register', $data);
   
} else {
    // Encrypt password
    $enc_password = md5($this->input->post('password'));

    $this->user_model->register($enc_password);

    $this->session->set_flashdata('user_registered', 'Anda udah teregistrasi.');

    redirect('dashboard/register');
}
}
}


?>