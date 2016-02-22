<?php

class Purchase_Model extends CI_Model {

    public function save_purchase_entry_info($data) {
       $this->db->insert('tbl_purchase_entry', $data);

    }
     public function save_customer_info($data) {
       $this->db->insert('tbl_customer',$data);
    }
    public function save_purchase_return_entry_info($data) {
       $this->db->insert('tbl_purchase_return_entry', $data);
    }
public function save_sales_entry_info($data) {
        $this->db->insert('tbl_sales_entry', $data);
    }
    public function save_sales_return_entry_info($data) {
        $this->db->insert('tbl_sales_return_entry', $data);
    }
    public function show_entry_info($data) {
        $this->db->where('purchase_no', $data['input_value1']);
        $query = $this->db->get('tbl_purchase_entry');
        $result = $query->result();
        return $result;
    }
         public function show_customer_list_info(){
         $this->db->select('*');
         $query = $this->db->get('tbl_customer');
         $result= $query->result();
         return $result;


}
  public function  show_purchase_return_entry_info($data){
        $this->db->where('purchase_return_no', $data['input_value1']);
        $query = $this->db->get('tbl_purchase_return_entry');
        $result = $query->result();
        return $result;
    }

    public function show_sales_entry_info($data) {
        $this->db->where('sales_no', $data['input_value1']);
        $query = $this->db->get('tbl_sales_entry');
        $result = $query->result();
        return $result;
    }
    public function show_sales_return_entry_info($data) {
        $this->db->where('sales_return_no', $data['input_value1']);
        $query = $this->db->get('tbl_sales_return_entry');
        $result = $query->result();
        return $result;
    }
    public function show_purchase_item_info() {
        $this->db->select('*');
        $this->db->select_sum('Quantity', 'Quantity');
        $this->db->select_sum('Price_per_unit', 'Price_per_unit');
        $this->db->group_by("purchase_no");
        $query = $this->db->get('tbl_purchase_entry');
        $result = $query->result();
        return $result;
    }
    public function show_purchase_return_item_info() {
        $this->db->select('*');
        $this->db->select_sum('quantity', 'quantity');
        $this->db->select_sum('price_per_unit', 'price_per_unit');
        $this->db->group_by("purchase_return_no");
        $query = $this->db->get('tbl_purchase_return_entry');
        $result = $query->result();
        return $result;
    }
    public function show_sales_return_item_list_info() {
        $this->db->select('*');
        $this->db->select_sum('quantity', 'quantity');
        $this->db->select_sum('price_per_unit', 'price_per_unit');
        $this->db->group_by("sales_return_no");
        $query = $this->db->get('tbl_sales_return_entry');
        $result = $query->result();
        return $result;
    }
  public function show_sales_item_info() {
        // $this->db->distinct();
        $this->db->select('*');
        $this->db->select_sum('quantity','quantity');
        $this->db->select_sum('price_per_unit', 'price_per_unit');
        $this->db->group_by("sales_no");
        $query = $this->db->get('tbl_sales_entry');
        $result = $query->result();
        return $result;
    }
    public function delete_purchase_list_item($purchase_id) {
        $this->db->where('purchase_id', $purchase_id);
        $this->db->delete('tbl_purchase_entry');
    }
    public function delete_purchase_return_list_item($purchase_return_id) {
        $this->db->where('purchase_return_id', $purchase_return_id);
        $this->db->delete('tbl_purchase_return_entry');
    }
    public function delete_sales_return_list_item($sales_return_id) {
        $this->db->where('sales_return_id', $sales_return_id);
        $this->db->delete('tbl_sales_return_entry');
    }
    public function delete_sales_list_item($sales_id) {
        $this->db->where('sales_id', $sales_id);
        $this->db->delete('tbl_sales_entry');
    }
    public function delete_purchase_display_list_item($purchase_id){
          $this->db->where('purchase_id', $purchase_id);
          $this->db->delete('tbl_purchase_entry');

    }
    public function delete_customer_list_info($customer_id){
          $this->db->where('customer_id',$customer_id);
          $this->db->delete('tbl_customer');

    }
    public function delete_purchase_return_display_list_item($purchase_return_id){
          $this->db->where('purchase_return_id', $purchase_return_id);
          $this->db->delete('tbl_purchase_return_entry');

    }
public function delete_sales_display_list_item($sales_id){
          $this->db->where('sales_id', $sales_id);
          $this->db->delete('tbl_sales_entry');
 }
 public function delete_sales_return_display_list_item($sales_return_id){
          $this->db->where('sales_return_id', $sales_return_id);
          $this->db->delete('tbl_sales_return_entry');

    }
    public function show_supplier_info() {
        $this->db->select('supplier_name');
        $this->db->select('supplier_code');
        $query = $this->db->get('tbl_supplier');
        $result = $query->result();
        return $result;
    }
    public function show_return_supplier_info() {
        $this->db->select('supplier_name');
        $this->db->select('supplier_code');
        $query = $this->db->get('tbl_supplier');
        $result = $query->result();
        return $result;
    }
public function show_customer_info() {
        $this->db->select('customer_name');
        $this->db->select('customer_code');
        $query = $this->db->get('tbl_customer');
        $result = $query->result();
        return $result;
    }
    public function show_diasable_supplier_info($data) {
        $this->db->distinct();
        $this->db->select('select_supplier');
        $this->db->where('purchase_no',$data['purchase_no']);
        $query = $this->db->get('tbl_purchase_entry');
        $result = $query->row();
        return $result;
    }
     public function show_diasable_customer_info($data) {
        $this->db->distinct();
        $this->db->select('select_customer');
        $this->db->where('sales_no',$data['sales_no']);
        $query = $this->db->get('tbl_sales_entry');
        $result = $query->row();
        return $result;
    }

}
