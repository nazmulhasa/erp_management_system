<?php

//session_start();

class Super_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('current_user_id');
        if ($admin_id == NULL) {
            redirect('admin_control','refresh');
        }
    }

    public function index() {
        $data = array();
        $data['title'] = 'Home';
        $data['title1'] = 'Home> Dashboard';
        $data['maincontent'] = $this->load->view('admin/home_content', '', TRUE);
        $this->load->view('home', $data);
    }

    public function signout() {
        $this->session->unset_userdata('current_user_id');
        $this->session->unset_userdata('current_user_name');
        $sdata['user_data1'] = "successfully logged out";
        $this->session->set_userdata($sdata);
        redirect('admin_control');
    }

}
