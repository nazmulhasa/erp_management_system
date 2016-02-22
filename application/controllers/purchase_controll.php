<?php

class Purchase_Controll extends CI_Controller {

    public function save_purchase_entry() {
        $data = array();
        $data['purchase_no'] = $this->input->post('purchase_no', TRUE);
       if (!isset($data['purchase_no'])) {
            redirect('Inventory_Controll/purchase_entry/');
        }else {
            $data['purchase_no'] = $this->input->post('purchase_no', TRUE);
            $data['Select_Item'] = $this->input->post('select_item', TRUE);
            $data['Quantity'] = $this->input->post('quantity', TRUE);
            $data['Price_per_unit'] = $this->input->post('price_per_unit', TRUE);
            $data['purchase_date'] = $this->input->post('purchase_date', TRUE);
            $data['select_supplier'] = $this->input->post('select_supplier', TRUE);
            $data['notes'] = $this->input->post('notes', TRUE);
            $this->purchase_model->save_purchase_entry_info($data);
            $purchase_no=$data['purchase_no'];
            $purchase_date=$data['purchase_date'];
            $select_supplier= $data['select_supplier'];
            redirect('inventory_controll/purchase_entry/'.$purchase_no.'/'.$purchase_date.'/'.$select_supplier);
           
        }

    }
     public function save_purchase_return_entry() {
        $data = array();
        $data['purchase_return_no'] = $this->input->post('purchase_return_no', TRUE);
       if (!isset($data['purchase_return_no'])) {
            redirect('Inventory_Controll/purchase_return_entry/');
        }else {
            $data['purchase_return_no'] = $this->input->post('purchase_return_no', TRUE);
            $data['Select_Item'] = $this->input->post('select_item', TRUE);
            $data['Quantity'] = $this->input->post('quantity', TRUE);
            $data['Price_per_unit'] = $this->input->post('price_per_unit', TRUE);
            $data['purchase_return_date'] = $this->input->post('purchase_return_date', TRUE);
            $data['select_supplier'] = $this->input->post('select_supplier', TRUE);
            $data['notes'] = $this->input->post('notes', TRUE);
            $this->purchase_model->save_purchase_return_entry_info($data);
            $purchase_return_no=$data['purchase_return_no'];
            $purchase_return_date=$data['purchase_return_date'];
            $select_supplier= $data['select_supplier'];
            redirect('inventory_controll/purchase_return/'.$purchase_return_no.'/'.$purchase_return_date.'/'.$select_supplier);
           
        }
        
    }
    public function show_purchase_invoice($purchase_no=NULL){
        
      $data = array();
        $data['title'] = 'Purchase Invoice';
        $data['title1'] = 'Purchase Invoice';
        $data['show_purchase_invoice']= $this->login_model->show_purchase_invoice_info($purchase_no);
        $data['maincontent'] = $this->load->view('inventory/purchase_invoice',$data,TRUE);
        $this->load->view('home', $data);
    }

    public function delete_purchase_list_item($purchase_id=NULL){
        $this->purchase_model->delete_purchase_list_item($purchase_id);
        redirect('inventory_controll/purchase_list/');
      }
      public function delete_purchase_return_list_item($purchase_return_id=NULL){
        $this->purchase_model->delete_purchase_return_list_item($purchase_return_id);
        redirect('inventory_controll/purchase_return_list/');
      }
      public function delete_sales_return_list_item($sales_return_id=NULL){
        $this->purchase_model->delete_sales_return_list_item($sales_return_id);
        redirect('inventory_controll/sales_return_list/');
      }
    public function delete_sales_list_item($sales_id=NULL){
        $this->purchase_model->delete_sales_list_item($sales_id);
        redirect('inventory_controll/sales_list/');
       }
 public function delete_purchase_display_item($purchase_id=NULL, $purchase_no=NULL,$purchase_date=NULL,$select_supplier=NULL){
        $this->purchase_model->delete_purchase_display_list_item($purchase_id);
        redirect('inventory_controll/purchase_entry/'.$purchase_no.'/'.$purchase_date.'/'.$select_supplier);
            }
public function delete_purchase_return_display_item($purchase_return_id=NULL, $purchase_return_no=NULL,$purchase_return_date=NULL,$select_supplier=NULL){
        $this->purchase_model->delete_purchase_return_display_list_item($purchase_return_id);
        redirect('inventory_controll/purchase_return/'.$purchase_return_no.'/'.$purchase_return_date.'/'.$select_supplier);
            }
      public function delete_sales_display_item($sales_id=NULL, $sales_no=NULL,$sales_date=NULL,$select_customer=NULL){
        $this->purchase_model->delete_sales_display_list_item($sales_id);
        redirect('inventory_controll/sales_entry/'.$sales_no.'/'.$sales_date.'/'.$select_customer);
            }  
            public function delete_sales_return_display_item($sales_return_id=NULL, $sales_return_no=NULL,$sales_return_date=NULL,$select_customer=NULL){
        $this->purchase_model->delete_sales_return_display_list_item($sales_return_id);
        redirect('inventory_controll/sales_return/'.$sales_return_no.'/'.$sales_return_date.'/'.$select_customer);
            }       
}
