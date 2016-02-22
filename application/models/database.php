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

    public function purchase_no() {
        $this->db->select_max('purchase_no');
        $result = $this->db->get('tbl_purchase_entry');
        return $result->row()->purchase_no + 1;
        $this->db->select('purchase_no');
        $this->db->order_by('purchase_no', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbl_purchase_entry');
        return $query->row()->purchase_no + 1;
        $this->db->select('purchase_no');
        $this->db->from('tbl_purchase_entry');
        $query_result = $this->db->get();
        $result = $query_result->num_rows();
        $result = 1234;
        $this->db->select_max('purchase_no');
        $query = $this->db->get('tbl_purchase_entry');
        $result = $query->result();
        return $result;
        $this->db->select_max('time_taken AS time');
        $result = $this->db->get('students')->row();
        echo $result->time;
    }

}
