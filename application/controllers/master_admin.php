<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_Admin extends CI_Controller {

   
  public function profile() {
        $data = array();
        $data['title'] = 'Profile';
        $data['title1'] = 'Profile';
        $data['maincontent'] = $this->load->view('admin/profile', '', TRUE);
        $this->load->view('home', $data);
    }
    
    public function purchase_entry() {
        $data = array();
        $data['title'] = 'Purchase Entry';
        $data['title1'] = 'Purchase > Purchase Entry';
        $data['maincontent'] = $this->load->view('admin/purchase_entry', '', TRUE);
        $this->load->view('home', $data);
    }
 public function purchase_invoice() {
        $data = array();
        $data['title'] = 'Purchase Invoice';
        $data['title1'] = 'Purchase > Purchase Invoice No';
        $data['maincontent'] = $this->load->view('admin/show_all_purchase', '', TRUE);
        $this->load->view('home', $data);
    }
     public function purchase_invoice_details() {
        $data = array();
        $data['title'] = 'Purchase Invoice Details';
        $data['title1'] = 'Purchase > Purchase Invoice Details';
        $data['maincontent'] = $this->load->view('admin/purchase_invoice_details', '', TRUE);
        $this->load->view('home', $data);
    }
       public function sales_invoice_details() {
        $data = array();
        $data['title'] = 'Sales Invoice Details';
        $data['title1'] = 'Sales >Sales Invoice Details';
        $data['maincontent'] = $this->load->view('admin/sales_invoice_details', '', TRUE);
        $this->load->view('home', $data);
    }
    
    public function purchase_print() {
        $data = array();
      //  $data['title'] = 'Purchase Invoice Print';
      //  $data['title1'] = 'Purchase > Purchase print';
      //  $data['maincontent'] = $this->load->view('admin/purchase_print', '', TRUE);
        $this->load->view('admin/purchase_print', $data);
    }
    public function print_preview() {
        $data = array();
        $data['title'] = 'Print Preview';
        $data['title1'] = 'Purchase > Print Preview';
        $data['maincontent'] = $this->load->view('admin/print_preview', '', TRUE);
        $this->load->view('home', $data);
    }
    
        public function sales_entry() {
        $data = array();
        $data['title'] = 'Sales Entry';
        $data['title1'] = 'Sales > Sales Entry';
        $data['maincontent'] = $this->load->view('admin/sales_entry', '', TRUE);
        $this->load->view('home', $data);
    }
 public function sales_invoice() {
        $data = array();
        $data['title'] = 'Sales Invoice';
        $data['title1'] = 'Sales > Sales Invoice No';
        $data['maincontent'] = $this->load->view('admin/show_all_sales', '', TRUE);
        $this->load->view('home', $data);
    }
    public function sales_print_preview() {
        $data = array();
        $data['title'] = 'Print Preview';
        $data['title1'] = 'Sales > Print Preview';
        $data['maincontent'] = $this->load->view('admin/sales_print_preview', '', TRUE);
        $this->load->view('home', $data);
    }
   
}
