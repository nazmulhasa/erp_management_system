<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Balance_Sheet_Controll extends CI_Controller {
public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('current_user_id');
        if ($admin_id == NULL) {
            redirect('admin_control','refresh');
        }
    }
    public function show_balance_sheet() {
        $data = array();
        $data['title'] = 'Balance Sheet';
        $data['title1'] = 'Balance Sheet';
        $data['maincontent'] = $this->load->view('admin/account_balance_sheet', '', TRUE);
        $this->load->view('home', $data);
    }
     public function balance_sheet_reports() {
        $data = array();
        $data['title'] = 'Balance Sheet Report';
        $data['title1'] = 'Balance Sheet Report';
        $data['maincontent'] = $this->load->view('admin/balance_sheet_reports', '', TRUE);
        $this->load->view('home', $data);
    }
    public function trial_balance() {
        $data = array();
        $data['title'] = 'Trial Balance';
        $data['title1'] = 'Trial Balance';
        $data['maincontent'] = $this->load->view('admin/trial_balance', '', TRUE);
        $this->load->view('home', $data);
    }
     public function show_trial_balance() {
        $data = array();
        $data['title'] = 'Trial Balance';
        $data['title1'] = 'Trial Balance';
        $data['maincontent'] = $this->load->view('admin/show_trial_balance', '', TRUE);
        $this->load->view('home', $data);
    }
}
