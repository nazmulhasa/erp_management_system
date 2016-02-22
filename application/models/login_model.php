<?php

class Login_Model extends CI_Model {

    public function check_user_login_data($data) {
        $result = $this->db->get_where('tbl_login', $data);
        if ($result->num_rows() == 1) {
            $attr = array(
                'current_user_id' => $result->row(0)->id,
                'current_user_name' => $data['username'],
            );
            $this->session->set_userdata($attr);
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function show_purchase_invoice_info($purchase_no){
        $this->db->where('purchase_no', $purchase_no);
        $query = $this->db->get('tbl_purchase_entry');
        $result = $query->result();
        return $result;
    }

    public function purchase_no() {
        $this->db->select_max('purchase_no');
        $result = $this->db->get('tbl_purchase_entry');
        return $result->row()->purchase_no;
    }
    public function purchase_return_no() {
        $this->db->select_max('purchase_return_no');
        $result = $this->db->get('tbl_purchase_return_entry');
        return $result->row()->purchase_return_no;
    }
    public function show_customer_info(){
     $this->db->select_max('customer_code');
     $result= $this->db->get('tbl_customer');
     return $result->row()->customer_code;

    }
    public function sales_no() {
        $this->db->select_max('sales_no');
        $result = $this->db->get('tbl_sales_entry');
        return $result->row()->sales_no;
    }
     public function sales_return_no() {
        $this->db->select_max('sales_return_no');
        $result = $this->db->get('tbl_sales_return_entry');
        return $result->row()->sales_return_no;
    }

}
