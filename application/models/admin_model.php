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
        $this->db->select('*');
        $this->db->from('tbl_main_category');
        $this->db->order_by("main_category_position", "asc");
        $query = $this->db->get();
        return $query->result();
    }
    public function get_main_menu_image($other_image_id){
        $this->db->select('menu_image');
        $this->db->where('other_image_id', $other_image_id);
        $this->db->from('tbl_others_image ');
        $query = $this->db->get();
        $result= $query->row();
        return $result->menu_image;
    }
    public function select_main_category_image($main_category_id){
        $sql = "select p.main_category_id, p.product_name, o.other_image_id, o.menu_image from tbl_product as p join tbl_others_image as o on p.product_id=o.product_id where p.main_category_id='$main_category_id' and o.menu_image IS NOT NULL";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    public function update_main_menu_image($main_category_id,$other_image_id){
        $this->db->set('other_image_id',$other_image_id);
        $this->db->where('main_category_id', $main_category_id);
        $this->db->update('tbl_main_category');
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

    //-------End Manage main menu--------//

    public function get_sub_menu_info() {
        $sql = 'SELECT tbl_sub_category.sub_category_id,tbl_sub_category.sub_category_name,tbl_sub_category.sub_category_status,tbl_main_category.main_category_name FROM tbl_sub_category RIGHT JOIN tbl_main_category ON tbl_sub_category.main_category_id=tbl_main_category.main_category_id';
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }

    public function unpublished_sub_menu_category($sub_category_id) {
        $this->db->set('sub_category_status', 0);
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->update('tbl_sub_category');
    }

    public function published_sub_menu_category($sub_category_id) {
        $this->db->set('sub_category_status', 1);
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->update('tbl_sub_category');
    }

    public function get_sub_menu_name($sub_category_id) {
        $this->db->select('sub_category_name');
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->from('tbl_sub_category');
        $query = $this->db->get();
        $result = $query->row();
        return $result->sub_category_name;
    }

    public function update_sub_menu_info($sub_category_name, $sub_category_id) {
        $this->db->set('sub_category_name', $sub_category_name);
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->update('tbl_sub_category');
    }

    //----- sub category managing end------//
    //-------category managing start------//
    public function get_category_info() {/* select data from tbl_main_category, tbl_sub_category and tbl_category */
        $sql = 'select mc.main_category_name, sc.sub_category_name, c.category_id, c.category_name, c.category_status from tbl_category as c join tbl_sub_category as sc on c.sub_category_id=sc.sub_category_id join tbl_main_category as mc on sc.main_category_id = mc.main_category_id order by mc.main_category_position';
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }

    public function unpublished_category($category_id) {
        $this->db->set('category_status', 0);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function published_category($category_id) {
        $this->db->set('category_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function get_category_name($category_id) {
        $this->db->select('category_name');
        $this->db->where('category_id', $category_id);
        $this->db->from('tbl_category');
        $query = $this->db->get();
        $result = $query->row();
        return $result->category_name;
    }

    public function update_category_name($category_name, $category_id) {
        $this->db->set('category_name', $category_name);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

//---------End Catgegory Managing ----------///
//------------save manufacturer ---------------//
 public function save_manufactuer_by_product($data) {
        $this->db->insert('tbl_manufacturer', $data);
    }
     public function get_menufacturer_info() {
        $this->db->select('manufacturer_id');
        $this->db->select('manufacturer_name');
        $this->db->select('manufacturer_status');
        $this->db->from('tbl_manufacturer');
        $query = $this->db->get();
        return $query->result();
    }
    public function published_manufacturer_info($manufacturer_id) {
        $this->db->set('manufacturer_status', 1);
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->update('tbl_manufacturer');
    }
     public function unpublished_manufacturer_info($manufacturer_id) {
        $this->db->set('manufacturer_status', 0);
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->update('tbl_manufacturer');
    }
    public function get_manufacturer_name($manufacturer_id) {
        $this->db->select('manufacturer_name');
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->from('tbl_manufacturer');
        $query = $this->db->get();
        $result = $query->row();
        return $result->manufacturer_name;
    }
     public function update_manufacturer_name($manufacturer_name, $manufacturer_id) {
        $this->db->set('manufacturer_name', $manufacturer_name);
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->update('tbl_manufacturer');
    }
    // ---------end manufacturer--------//
 

    
}
