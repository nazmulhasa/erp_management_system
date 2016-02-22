<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ledger extends CI_Controller {
public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('current_user_id');
        if ($admin_id == NULL) {
            redirect('admin_control','refresh');
        }
    }
    public function index() {
        $data = array();
        $data['title'] = 'Ledger';
        $data['title1'] = 'Ledger';
        $data['maincontent'] = $this->load->view('admin/full_ledger', '', TRUE);
        $this->load->view('home', $data);
    }
    public function show_full_ledger() {
        $data = array();
        $data['title'] = 'Ledger';
        $data['title1'] = 'Ledger';
        $data['maincontent'] = $this->load->view('admin/show_full_ledger', '', TRUE);
        $this->load->view('home', $data);
    }
    public function ledger_account() {
        $data = array();
        $data['title'] = 'Ledger';
        $data['title1'] = 'Ledger Account';
        $data['maincontent'] = $this->load->view('admin/ledger_account', '', TRUE);
        $this->load->view('home', $data);
    }
      public function ledger_maintenance() {
        $data = array();
        $data['title'] = 'Ledger Maintance';
        $data['title1'] = 'Ledger Maintance';
        $data['maincontent'] = $this->load->view('admin/ledger_maintenance', '', TRUE);
        $this->load->view('home', $data);
    }
    
}