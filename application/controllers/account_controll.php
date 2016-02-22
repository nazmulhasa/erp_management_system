<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_Controll extends CI_Controller {
public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('current_user_id');
        if ($admin_id == NULL) {
            redirect('admin_control','refresh');
        }
    }
    public function index() {
        $data = array();
        $data['title'] = 'Account Controll';
        $data['title1'] ='Account Controll';
        $data['maincontent'] = $this->load->view('account/account', '', TRUE);
        $this->load->view('home', $data);
    }
    public function journal_entry() {
        $data = array();
        $data['title'] = 'Journal Entry';
        $data['title1'] ='Journal Entry';
        $data['maincontent'] = $this->load->view('account/journal_entry', '', TRUE);
        $this->load->view('home', $data);
    }
     public function journal_list() {
        $data = array();
        $data['title'] = 'Journal';
        $data['title1'] ='Journal';
        $data['maincontent'] = $this->load->view('account/journal_list', '', TRUE);
        $this->load->view('home', $data);
    }
    public function ac_head_list() {
        $data = array();
        $data['title'] = 'A/C Head';
        $data['title1'] ='A/C Head';
        $data['maincontent'] = $this->load->view('account/ac_head_list', '', TRUE);
        $this->load->view('home', $data);
    }
    public function money_receipt_list() {
        $data = array();
        $data['title'] = 'Money Receipt ';
        $data['title1'] ='Money Receipt ';
        $data['maincontent'] = $this->load->view('account/money_receipt_list','', TRUE);
        $this->load->view('home', $data);
    }
    public function payment_receipt_list() {
        $data = array();
        $data['title'] = 'Payment Receipt';
        $data['title1'] ='Payment Receipt';
        $data['maincontent'] = $this->load->view('account/payment_receipt_list','', TRUE);
        $this->load->view('home', $data);
    }
    public function ac_head_entry() {
        $data = array();
        $data['title'] = 'A/C Head';
        $data['title1'] ='A/C Head';
        $data['maincontent'] = $this->load->view('account/ac_head_entry','', TRUE);
        $this->load->view('home', $data);
    }
    public function money_receipt_entry() {
        $data = array();
        $data['title'] = 'Money Receipt';
        $data['title1'] ='Money Receipt';
        $data['maincontent'] = $this->load->view('account/money_receipt_entry','', TRUE);
        $this->load->view('home', $data);
    }
    public function payment_receipt_entry() {
        $data = array();
        $data['title'] = 'Payment Receipt';
        $data['title1'] ='Payment Receipt';
        $data['maincontent'] = $this->load->view('account/payment_receipt_entry','', TRUE);
        $this->load->view('home', $data);
    }
    public function hr_entry() {
        $data = array();
        $data['title'] = 'Employee';
        $data['title1'] ='Employee';
        $data['maincontent'] = $this->load->view('hr/employee_entry','', TRUE);
        $this->load->view('home', $data);
    }
    public function employee_list() {
        $data = array();
        $data['title'] = 'Employee';
        $data['title1'] ='Employee';
        $data['maincontent'] = $this->load->view('hr/employee_list','', TRUE);
        $this->load->view('home', $data);
    }
    public function users_list() {
        $data = array();
        $data['title'] = 'User';
        $data['title1'] ='User';
        $data['maincontent'] = $this->load->view('users/users_list','', TRUE);
        $this->load->view('home', $data);
    }
    public function users_entry() {
        $data = array();
        $data['title'] = 'User';
        $data['title1'] ='User';
        $data['maincontent'] = $this->load->view('users/users_entry','', TRUE);
        $this->load->view('home', $data);
    }
}