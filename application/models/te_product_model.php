<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of te_product_model
 *
 * @author MASUD RANA
 */
class Te_Product_Model extends CI_model {
    //put your code here
     // Start Getting manufacturer//
    public function get_manufacturer(){
        $this->db->select('manufacturer_id');
        $this->db->select('manufacturer_name');
        $this->db->from('tbl_manufacturer');
        $query = $this->db->get();
        return $query->result();
    }
    // start getting category// 
    public function get_main_category(){
        $this->db->select('main_category_id');
        $this->db->select('main_category_name');
        $this->db->where('main_category_status',1);
        $this->db->from('tbl_main_category');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_sub_category(){
        $this->db->select('sub_category_id');
        $this->db->select('sub_category_name');
        $this->db->select('main_category_id');
        $this->db->where('sub_category_status',1);
        $this->db->from('tbl_sub_category');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_category(){
        $this->db->select('category_id');
        $this->db->select('category_name');
        $this->db->select('sub_category_id');
        $this->db->where('category_status',1);
        $this->db->from('tbl_category');
        $query = $this->db->get();
        return $query->result();
    }
    // end getting category //
    //--------Save Product--------//
    public function save_product_general_info($data){/* insert general information of product and return product ID */
        $this->db->insert('tbl_product',$data);
        $product_id=$this->db->insert_id();
        return $product_id;
    }
    // ------------save product size----------//
    public function save_size($product_size){
        $this->db->insert('tbl_product_size', $product_size);
    }
    //----------Save product description------//
    public function save_description($product_description){
        $this->db->insert('tbl_description', $product_description);
    }
    //----------Save product image--------------------//
    public function save_product_image_info($data) {
        $this->db->insert('tbl_image', $data);
    }
    // ----------save menu Image-------------------//
    public function save_menu_image($product_id, $menu_image) {
        $this->db->set('product_id', $product_id);
        $this->db->set('menu_image', $menu_image);
        $this->db->insert('tbl_others_image');
    }
    // ----------save menu Image-------------------//
    public function save_slider_image($product_id, $slider_image) {
        $this->db->set('product_id', $product_id);
        $this->db->set('slider_image', $slider_image);
        $this->db->insert('tbl_others_image');
    }
    // ----------Saving Discount-----------//
    public function set_discount($discount) {
        $this->db->insert('tbl_discount', $discount);
    }

}
