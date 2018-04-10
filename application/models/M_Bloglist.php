<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_BlogList extends CI_Model{

    public function __construct()
    {
      parent::__construct();
   

    }

    public function getBlog($value='')
    {
      $query= $this->db->get("blog");
      return $query->result();
    }

}

?>
