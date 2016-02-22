<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_Controll extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('current_user_id');
        if ($admin_id == NULL) {
            redirect('admin_control', 'refresh');
        }
    }

    public function index() {
        $data = array();
        $data['title'] = 'Inventory';
        $data['title1'] = 'Inventory';
        $data['maincontent'] = $this->load->view('inventory/inventory', '', TRUE);
        $this->load->view('home', $data);
    }

    public function purchase_entry($purchase_no=NULL,$purchase_date=NULL,$select_supplier=NULL) {
         $data = array();
        
        if ($purchase_no ==false && $purchase_date ==false && $select_supplier ==false) {
          //if(empty($purchase_no,$purchase_date,$select_supplier) {
            $data['title'] = 'Purchase Entry';
            $data['title1']='Purchase Entry';
            $data['input_value'] = $this->login_model->purchase_no();
            $data['show_supplier']=$this->purchase_model->show_supplier_info();
            $data['maincontent'] = $this->load->view('inventory/purchase_entry',$data, TRUE);
            $this->load->view('home', $data);
      }
      else{
            $data['title'] = 'Purchase Entry';
            $data['title1'] = 'Purchase Entry';
            $data['input_value1']=$purchase_no;
            $data['show_supplier1']=$select_supplier;
            $data['show_purchase_date']=$purchase_date;
            $data['show_purchase_entry']=$this->purchase_model->show_entry_info($data);
            $data['maincontent'] = $this->load->view('inventory/purchase_entry',$data, TRUE);
            $this->load->view('home', $data);
      }
    }
    public function purchase_return($purchase_return_no=NULL,$purchase_return_date=NULL,$select_supplier=NULL) {
       
        $data = array();
        if ($purchase_return_no ==false && $purchase_return_date ==false && $select_supplier ==false) {
        $data['title'] = 'Purchase return';
        $data['title1'] = 'Purchase return';
        $data['input_value'] = $this->login_model->purchase_return_no();
        $data['show_supplier']=$this->purchase_model->show_return_supplier_info();
        $data['maincontent'] = $this->load->view('inventory/purchase_return', $data, TRUE);
        $this->load->view('home', $data);
    }
    else{
            $data['title'] = 'Purchase Return';
            $data['title1'] = 'Purchase Return';
            $data['input_value1']=$purchase_return_no;
            $data['show_supplier1']=$select_supplier;
            $data['show_purchase_date']=$purchase_return_date;
            $data['show_purchase_return_entry']=$this->purchase_model->show_purchase_return_entry_info($data);
            $data['maincontent'] = $this->load->view('inventory/purchase_return',$data, TRUE);
            $this->load->view('home', $data);
      }
}
    public function sales_entry($sales_no=NULL,$sales_date=NULL,$select_customer=NULL) {
        $data = array();
        if ($sales_no ==false && $sales_date ==false && $select_customer ==false) {
        $data['title'] = 'Sales Entry';
        $data['title1'] = 'Sales Entry';
        $data['input_value'] = $this->login_model->sales_no();
        $data['show_customer']=$this->purchase_model->show_customer_info();
        $data['maincontent'] = $this->load->view('inventory/sales_entry', $data,TRUE);
        $this->load->view('home', $data);
    }
    else{
            $data['title'] = 'Sales Entry';
            $data['title1'] = 'Sales Entry';
            $data['input_value1']=$sales_no;
            $data['show_customer1']=$select_customer;
            $data['show_sales_date']=$sales_date;
            $data['show_sales_entry']=$this->purchase_model->show_sales_entry_info($data);
            $data['maincontent'] = $this->load->view('inventory/sales_entry',$data, TRUE);
            $this->load->view('home', $data);
      }
    }

    public function sales_return($sales_return_no=NULL,$sales_return_date=NULL,$select_customer=NULL) {
       if ($sales_return_no ==false && $sales_return_date ==false && $select_customer ==false) {
        
        $data = array();
        $data['title'] = 'Sales return';
        $data['title1'] = 'Sales return';
        $data['input_value'] = $this->login_model->sales_return_no();
        $data['show_customer']=$this->purchase_model->show_customer_info();
        $data['maincontent'] = $this->load->view('inventory/sales_return', $data, TRUE);
        $this->load->view('home', $data);
    }
    else{
            $data['title'] = 'Sales Return';
            $data['title1'] = 'Sales Return';
            $data['input_value1']=$sales_return_no;
            $data['show_customer1']=$select_customer;
            $data['show_sales_return_date']=$sales_return_date;
            $data['show_sales_return_entry']=$this->purchase_model->show_sales_return_entry_info($data);
            $data['maincontent'] = $this->load->view('inventory/sales_return',$data, TRUE);
            $this->load->view('home', $data);
      }
    }
     public function customer_add() {
        $data = array();
        $data['title'] = 'Customer';
        $data['title1'] = 'Customer';
        $data['show_customer_code']=$this->login_model->show_customer_info();
        $data['maincontent'] = $this->load->view('inventory/customer_add', $data, TRUE);
        $this->load->view('home', $data);
    }

    public function supplier_add() {
        $data = array();
        $data['title'] = 'Supplier';
        $data['title1'] = 'Supplier';
        $data['maincontent'] = $this->load->view('inventory/supplier_add', '', TRUE);
        $this->load->view('home', $data);
    }

    public function item_add() {
        $data = array();
        $data['title'] = 'Item';
        $data['title1'] = 'Item';
        $data['maincontent'] = $this->load->view('inventory/item_add', '', TRUE);
        $this->load->view('home', $data);
    }
   public function purchase_list() {
        
        $data = array();
        $data['title'] = 'Purchase';
        $data['title1'] = 'Purchase';
        $data['show_purchase_item']=  $this->purchase_model->show_purchase_item_info();
        $data['maincontent'] = $this->load->view('inventory/purchase_list', $data, TRUE);
        $this->load->view('home', $data);
       }
       public function purchase_return_list() {
        
        $data = array();
        $data['title'] = 'Purchase Return List';
        $data['title1'] = 'Purchase Return List';
        $data['show_purchase_return_item']=  $this->purchase_model->show_purchase_return_item_info();
        $data['maincontent'] = $this->load->view('inventory/purchase_return_list', $data, TRUE);
        $this->load->view('home', $data);
       }
       public function sales_return_list() {
        $data = array();
        $data['title'] = 'Sales Return List';
        $data['title1'] = 'Sales Return List';
        $data['show_sales_return_list']= $this->purchase_model->show_sales_return_item_list_info();
        $data['maincontent'] = $this->load->view('inventory/sales_return_list', $data, TRUE);
        $this->load->view('home', $data);
    }
       public function sales_list() {
        $data = array();
        $data['title'] = 'Sales List';
        $data['title1'] = 'Sales List';
        $data['show_sales_item']=  $this->purchase_model->show_sales_item_info();
        $data['maincontent'] = $this->load->view('inventory/sales_list', $data, TRUE);
        $this->load->view('home', $data);
    }
 public function customer_list() {
        $data = array();
        $data['title'] = 'Customer';
        $data['title1'] = 'Customer';
        $data['show_customer_list']=$this->purchase_model->show_customer_list_info();
        $data['maincontent'] = $this->load->view('inventory/customer_list', $data, TRUE);
        $this->load->view('home', $data);
    }

    public function supplier_list() {
        $data = array();
        $data['title'] = 'Supplier';
        $data['title1'] = 'Supplier';
        $data['maincontent'] = $this->load->view('inventory/supplier_list', '', TRUE);
        $this->load->view('home', $data);
    }

    public function item_list() {
        $data = array();
        $data['title'] = 'Item';
        $data['title1'] = 'Item';
        $data['maincontent'] = $this->load->view('inventory/item_list', '', TRUE);
        $this->load->view('home', $data);
    }
}
