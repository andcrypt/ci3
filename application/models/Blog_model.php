<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model{
public function get_all_artikel( $limit = FALSE, $offset = FALSE )
   {
       // Jika variable $limit ada pada parameter maka kita limit query-nya
       if ( $limit ) {
           $this->db->limit($limit, $offset);
       }
       // Urutkan berdasar tanggal
       $this->db->order_by('blogs.post_date', 'DESC');

       // Inner Join dengan table Categories
       $this->db->join('categories', 'categories.cat_id = blogs.fk_cat_id');
      
       $query = $this->db->get('blogs');

       // Return dalam bentuk object
       return $query->result();
   }

   public function get_total()
   {
       // Dapatkan jumlah total artikel
       return $this->db->count_all("blogs");
   }


   
}
?>