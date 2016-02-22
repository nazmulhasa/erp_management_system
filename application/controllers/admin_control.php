<?php

class Admin_Control extends CI_Controller {

    public function index() {
        if ($this->session->userdata('current_user_id')) {
            redirect('super_Admin','refresh');
        } else {
            $this->load->view('login_view');
        }
    }

    public function user_login_data_check() {
        $data['username'] = $this->input->post('username');
        $data['password'] = md5($this->input->post('password'));
        $result = $this->login_model->check_user_login_data($data);
        if ($result != FALSE) {
            redirect('super_admin');
        } else {
            $sdata['user_data'] = 'Invalid username and password';
            $this->session->set_userdata($sdata);
            redirect('admin_control');
        }
    }

}
