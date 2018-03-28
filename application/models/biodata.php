<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Model{

    public function __construct()
    {
      parent::__construct();
      $this->load->model('biodata');

    }

    public function getBiodataQueryArray()
    {
      $query= $this->db->query("Select * from biodata");
      return $query->result_array();
    }

    public function getBiodataQueryObject()
    {
      $query= $this->db->query("Select * from biodata");
      return $query->result();
    }
}

?>
