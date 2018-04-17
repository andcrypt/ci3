<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Blogcreate extends CI_Model{

    public function __construct()
    {
      parent::__construct();
   

    }

    public function insert($data,$namagambar){
        $data=array('title'=>$data['title'],
                    'date'=>$data['date'],
                    'author'=>$data['author'],
                    'content'=>$data['content'],
                    'image_file'=>$namagambar,
                );

       if($this->db->insert('blog',$data)){
           return 1;
       } 
    }

    public function update($data,$namagambar,$id){

        if($namagambar != '')
        {
            $data=array('title'=>$data['title'],
            'date'=>$data['date'],
            'author'=>$data['author'],
            'content'=>$data['content'],
            'image_file'=>$namagambar,
        );
   
        }else{
            $data=array('title'=>$data['title'],
                    'date'=>$data['date'],
                    'author'=>$data['author'],
                    'content'=>$data['content'],
                );
        
        }
        
                // $id=$data['id'];
                if($this->db->update('blog',$data,array('id' => $id))){
                                       
           return 1;
       } 
    }

    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}

?>
