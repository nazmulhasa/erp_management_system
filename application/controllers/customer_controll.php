<?php

class Customer_Controll extends CI_Controller {

    public function save_customer() {
        $data = array();
        $data['customer_code'] = $this->input->post('customer_code', TRUE);
        $data['customer_name'] = $this->input->post('customer_name', TRUE);
        $data['address'] = $this->input->post('address', TRUE);
        $data['mobile'] = $this->input->post('mobile', TRUE);
        $data['country'] = $this->input->post('country', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $data['notes'] = $this->input->post('notes', TRUE);
        $data['publication_status']=$this->input->post('publication_status', TRUE);
        $data['added_by']=$this->session->userdata('current_user_name');
        $this->purchase_model->save_customer_info($data);
        redirect('inventory_controll/customer_list/');
        }
        public function delete_customer_list_item($customer_id=null){
            $this->purchase_model->delete_customer_list_info($customer_id);
            redirect('inventory_controll/customer_list/');
        }

    }