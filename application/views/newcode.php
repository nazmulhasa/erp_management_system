<?php

class Purchase_Controll extends CI_Controller {

    public function save_purchase_entry() {
        $data = array();
        $sdata['purchase_no'] = $this->input->post('purchase_no', TRUE);
        $sdata['Select_Item'] = $this->input->post('select_item', TRUE);
        $sdata['Quantity'] = $this->input->post('quantity', TRUE);
        $sdata['Price_per_unit'] = $this->input->post('price_per_unit', TRUE);
        $sdata['purchase_date'] = $this->input->post('purchase_date', TRUE);
        $sdata['select_supplier'] = $this->input->post('select_supplier', TRUE);
        $sdata['notes'] = $this->input->post('notes', TRUE);
        //$this->purchase_model->save_purchase_entry_info($data);
          $data = array(
                        'purchase_no'=> $sdata['purchase_no'],
                        'qty'        => $sdata['Quantity'],
                        'price'      => $sdata['Price_per_unit'],
                        'select_item'=> $sdata['Select_Item'],
                        'select_supplier'=> $sdata['select_supplier'],
                        'purchase_date'=>$sdata['purchase_date'],
                        'notes'=>$sdata['notes'],

                );
        $this->cart->insert($data);
        $contents=$this->cart->contents();
        echo "<pre>";
        print_r($contents);
        exit();

        //redirect('inventory_controll/purchase_entry/');
    }
    public function delete_purchase_list_item($purchase_id=NULL){
        $this->purchase_model->delete_purchase_list_item($purchase_id);
        redirect('inventory_controll/purchase_list/');
        
        
    }

}
