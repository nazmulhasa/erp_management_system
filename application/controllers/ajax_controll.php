<?php

class Ajax_Controll extends CI_Controller {

    public function index() {
        $this->load->view('ajax');
    }
    public function insert_into_info(){
       $data['email']=$this->input->post('email',TRUE);
       $data['qText']=$this->input->post('qText',TRUE);
        $this->ajax_model->data_insert($data);  
}

}
