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
    public function check_position($position) {
        $sql = "SELECT count(main_category_position) as check_position FROM `tbl_main_category` WHERE main_category_position = '$position'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->check_position;
    }

    public function update_main_category_position($position) {
        $sql = "update tbl_main_category set main_category_position = main_category_position+1 where main_category_position >= '$position'";
        $this->db->query($sql);
    }

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
    public function get_main_category_id() {
        $this->db->select('main_category_id as id');
        $this->db->select('main_category_name as name');
        $this->db->from('tbl_main_category');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_sub_category_id_and_name() {
        $this->db->select('sub_category_id');
        $this->db->select('sub_category_name');
        $this->db->select('main_category_id');
        $this->db->from('tbl_sub_category');
        $query = $this->db->get();
        return $query->result();
    }

    public function save_category_info($data) {
        $this->db->insert('tbl_category', $data);
    }

    //---------End save category----------//
    //--------- Manage Menu Start--------//
    //--------- Manage Main Menu--------//
    public function get_main_category() {
        $this->db->select('main_category_id');
        $this->db->select('main_category_name');
        $this->db->select('main_category_status');
        $this->db->select('main_category_position');
        $this->db->from('tbl_main_category');
        $this->db->order_by("main_category_position", "asc");
        $query = $this->db->get();
        return $query->result();
    }

    public function unpublished_main_menu_category($main_category_id) {
        $this->db->set('main_category_status', 0);
        $this->db->where('main_category_id', $main_category_id);
        $this->db->update('tbl_main_category');
    }

    public function published_main_menu_category($main_category_id) {
        $this->db->set('main_category_status', 1);
        $this->db->where('main_category_id', $main_category_id);
        $this->db->update('tbl_main_category');
    }

    public function get_main_menu_info($main_category_id) {
        $this->db->select('main_category_name');
        $this->db->select('main_category_id');
        $this->db->select('main_category_position');
        $this->db->where('main_category_id', $main_category_id);
        $this->db->from('tbl_main_category');
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }

    public function update_main_menu_info($data, $main_category_id) {
        $this->db->where('main_category_id', $main_category_id);
        $this->db->update('tbl_main_category', $data);
    }

}
