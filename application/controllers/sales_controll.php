<?php

class Sales_Controll extends CI_Controller {
public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('current_user_id');
        if ($admin_id == NULL) {
            redirect('admin_control','refresh');
        }
    }
    public function index() {
        
    }

    public function save_sales_entry() {
        $data = array();
        $data['sales_no'] = $this->input->post('sales_no', TRUE);
        $data['select_Item'] = $this->input->post('select_item', TRUE);
        $data['quantity'] = $this->input->post('quantity', TRUE);
        $data['price_per_unit'] = $this->input->post('price_per_unit', TRUE);
        $data['sales_date'] = $this->input->post('sales_date', TRUE);
        $data['select_customer'] = $this->input->post('select_customer', TRUE);
        $data['notes'] = $this->input->post('notes', TRUE);
        $this->purchase_model->save_sales_entry_info($data);
        $sales_no=$data['sales_no'];
        $sales_date=$data['sales_date'];
        $select_customer= $data['select_customer'];
        redirect('inventory_controll/sales_entry/'.$sales_no.'/'.$sales_date.'/'.$select_customer);
        }
  public function save_sales_return_entry() {
        $data = array();
        $data['sales_return_no'] = $this->input->post('sales_return_no',TRUE);
        $data['select_Item'] = $this->input->post('select_item',TRUE);
        $data['quantity'] = $this->input->post('quantity',TRUE);
        $data['price_per_unit'] = $this->input->post('price_per_unit',TRUE);
        $data['sales_return_date'] = $this->input->post('sales_return_date',TRUE);
        $data['select_customer'] = $this->input->post('select_customer',TRUE);
        $data['notes'] = $this->input->post('notes', TRUE);
        $this->purchase_model->save_sales_return_entry_info($data);
        $sales_return_no=$data['sales_return_no'];
        $sales_return_date=$data['sales_return_date'];
        $select_customer= $data['select_customer'];
        redirect('inventory_controll/sales_return/'.$sales_return_no.'/'.$sales_return_date.'/'.$select_customer);
        }

    public function sales_return() {
        $data = array();
        $data['title'] = 'Sales Return Report';
        $data['title1'] = 'Sales Return Report';
        $data['maincontent'] = $this->load->view('admin/sales_return', '', TRUE);
        $this->load->view('home', $data);
    }
   public function show_sales_return() {
        $data = array();
        $data['title'] = 'Sales Return Report';
        $data['title1'] = 'Sales Return Report';
        $data['maincontent'] = $this->load->view('admin/show_sales_return', '', TRUE);
        $this->load->view('home', $data);
    }
    public function sales_report() {
        $data = array();
        $data['title'] = 'Sales Report';
        $data['title1'] = 'Sales Report';
        $data['maincontent'] = $this->load->view('admin/sales_report', '', TRUE);
        $this->load->view('home', $data);
    }
    public function show_sales_report() {
        $data = array();
        $data['title'] = 'Sales Report';
        $data['title1'] = 'Sales Report';
        $data['maincontent'] = $this->load->view('admin/show_sales_report', '', TRUE);
        $this->load->view('home', $data);
    }
}
