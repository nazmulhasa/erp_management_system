<?php

class Ajax_Model extends CI_Model{
    public function data_insert($data){
         $this->db->insert('tbl_supplier', $data);
        }
    public function insertQ($data){
   // $email = $this->input->post('email');
    //$qText = $this->input->post('qText');
    $dalim= $this->db->insert('tbl_supplier', array('contact_person' =>$email, 'supplier_name' => $text));
   
    }
 
}
