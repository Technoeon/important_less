<?php

class Admin_Model extends CI_Model {

    public function check_login_info($email, $password) {
        $encript = md5($password);
        $this->db->select('*');
        $this->db->where('management_email', $email);
        $this->db->where('management_password', $encript);
        $this->db->where('management_status', 1);
        $this->db->from('tbl_management');
        $result = $this->db->get();
        return $result->row();
    }

    //---------start save category----------//
    //  Save main category
    public function save_main_category_info($data) {
        $this->db->insert('tbl_main_category', $data);
    }

    // Save sub category
    public function get_main_category_id_and_name() {
        $this->db->select('main_category_id');
        $this->db->select('main_category_name');
        $this->db->from('tbl_main_category');
        $query = $this->db->get();
        return $query->result();
    }

    public function save_sub_category_info($data) {
        $this->db->insert('tbl_sub_category', $data);
    }

    // Save sub category
    public function get_sub_category_id_and_name() {
        $this->db->select('sub_category_id');
        $this->db->select('sub_category_name');
        $this->db->from('tbl_sub_category');
        $query = $this->db->get();
        return $query->result();
    }

    public function save_category_info($data) {
        $this->db->insert('tbl_category', $data);
    }

    //---------End save category----------//
}
