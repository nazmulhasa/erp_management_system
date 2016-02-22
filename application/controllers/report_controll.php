<?php

class Report_Controll extends CI_Controller {
public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('current_user_id');
        if ($admin_id == NULL) {
            redirect('admin_control','refresh');
        }
    }
    public function index() {
        $data = array();
        $data['title'] = 'Account Reports';
        $data['title1'] ='Account Reports';
        $data['maincontent'] = $this->load->view('reports/reports', '', TRUE);
        $this->load->view('home', $data);
    }

    public function new_purchase_order() {
        $data = array();
        $data['title'] = 'Purchase Order';
        $data['title1'] = 'Purchase Order';
        $data['maincontent'] = $this->load->view('admin/new_purchase_order', '', TRUE);
        $this->load->view('home', $data);
    }
    public function purchase_report() {
        $data = array();
        $data['title'] = 'Purchase Order';
        $data['title1'] = 'Purchase Order';
        $data['maincontent'] = $this->load->view('admin/purchase_reports', '', TRUE);
        $this->load->view('home', $data);
    }
public function show_purchase_report() {
        $data = array();
        $data['title'] = 'Purchase Order';
        $data['title1'] = 'Purchase Order';
        $data['maincontent'] = $this->load->view('admin/show_purchase_report', '', TRUE);
        $this->load->view('home', $data);
    }
    public function cashbook() {
        $data = array();
        $data['title'] = 'Cash';
        $data['title1'] = 'Cash';
        $data['maincontent'] = $this->load->view('admin/cashbook', '', TRUE);
        $this->load->view('home', $data);
    }
    public function cashbook_reports() {
        $data = array();
        $data['title'] = 'Cashbook';
        $data['title1'] = 'Cashbook';
        $data['maincontent'] = $this->load->view('admin/show_cashbook', '', TRUE);
        $this->load->view('home', $data);
    }
    public function bankbook() {
        $data = array();
        $data['title'] = 'Bankbook';
        $data['title1'] = 'Bankbook';
        $data['maincontent'] = $this->load->view('admin/bankbook', '', TRUE);
        $this->load->view('home', $data);
    }
    public function bankbook_reports() {
        $data = array();
        $data['title'] = 'bankbook';
        $data['title1'] = 'Bankbook';
        $data['maincontent'] = $this->load->view('admin/bankbook_reports', '', TRUE);
        $this->load->view('home', $data);
    }
    public function bills_payable() {
        $data = array();
        $data['title'] = 'Bills Payable';
        $data['title1'] = 'Bills Payable';
        $data['maincontent'] = $this->load->view('admin/bills_payable', '', TRUE);
        $this->load->view('home', $data);
    }
    public function show_bills_payable() {
        $data = array();
        $data['title'] = 'Bills Payable';
        $data['title1'] = 'Bills Payable';
        $data['maincontent'] = $this->load->view('admin/show_bills_payable', '', TRUE);
        $this->load->view('home', $data);
    }
    public function bills_receivable() {
        $data = array();
        $data['title'] = 'Bills Receivable';
        $data['title1'] = 'Bills Receivable';
        $data['maincontent'] = $this->load->view('admin/bills_receivable', '', TRUE);
        $this->load->view('home', $data);
    }
    public function show_bills_receivable() {
        $data = array();
        $data['title'] = 'Bills Receivable';
        $data['title1'] = 'Bills Receivable';
        $data['maincontent'] = $this->load->view('admin/show_bills_receivable', '', TRUE);
        $this->load->view('home', $data);
    }
    public function income_statement() {
        $data = array();
        $data['title'] = 'Income Statement ';
        $data['title1'] = 'Income Statement ';
        $data['maincontent'] = $this->load->view('admin/income_statement', '', TRUE);
        $this->load->view('home', $data);
    }
    public function show_income_statement() {
        $data = array();
        $data['title'] = 'Income Statement ';
        $data['title1'] = 'Income Statement ';
        $data['maincontent'] = $this->load->view('admin/show_income_statement', '', TRUE);
        $this->load->view('home', $data);
    }
    public function inventory_Report() {
        $data = array();
        $data['title'] = 'Inventory Report';
        $data['title1'] = 'Inventory Report';
        $data['maincontent'] = $this->load->view('admin/inventory_Report', '', TRUE);
        $this->load->view('home', $data);
    }
    public function show_inventory_Report() {
        $data = array();
        $data['title'] = 'Inventory Report';
        $data['title1'] = 'Inventory Report';
        $data['maincontent'] = $this->load->view('admin/show_inventory_Report', '', TRUE);
        $this->load->view('home', $data);
    }
    public function purchase_return() {
        $data = array();
        $data['title'] = 'Purchase Return';
        $data['title1'] = 'Purchase Return';
        $data['maincontent'] = $this->load->view('admin/purchase_return', '', TRUE);
        $this->load->view('home', $data);
    }
    public function show_purchase_return() {
        $data = array();
        $data['title'] = 'Purchase Return';
        $data['title1'] = 'Purchase Return';
        $data['maincontent'] = $this->load->view('admin/show_purchase_return', '', TRUE);
        $this->load->view('home', $data);
    }
}
