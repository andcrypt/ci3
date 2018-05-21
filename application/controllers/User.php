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

    public function login(){
        $data['page_title'] = 'Log In';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('header');
            $this->load->view('dashboard/login', $data);
            //$this->load->view('templates/footer');
        } else {
            $username = $this->input->post('username');
             // Get & encrypt password
            $password = md5($this->input->post('password'));
            $user_id = $this->user_model->login($username, $password);

            if($user_id){
             // Buat session
            $user_data = array(
            'user_id' => $user_id,
            'username' => $username,
            'logged_in' => true
        );

        $this->session->set_userdata($user_data);

        // Set message
        $this->session->set_flashdata('user_loggedin', 'Udah login bosque');

        redirect('bloglist');
    } else {
        // Set message
        $this->session->set_flashdata('login_failed', 'Login gagal');

        redirect('dashboard/login');
    }       
}
        public function logout(){
            
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');

            
            $this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

            redirect('user/login');
        }
}




}


?>