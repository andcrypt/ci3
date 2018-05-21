<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{
   public function register($enc_password){
      

       $data = array(
           'nama' => $this->input->post('nama'),
           'kodepos' => $this->input->post('kodepos'),
           'email' => $this->input->post('email'),
           'username' => $this->input->post('username'),
           'password' => $enc_password,
          
       );

       
       // Insert user
       return $this->db->insert('users', $data);
       
       redirect('dashboard/register','refresh');
       
   }
   public function login($username, $password){
    // Validasi
    $this->db->where('username', $username);
    $this->db->where('password', $password);

    $result = $this->db->get('users');


    if($result->num_rows() == 1){
        return $result->row(0)->user_id;
    } else {
        return false;
    }
}


}

?>