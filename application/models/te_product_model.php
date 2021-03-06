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
    //-----------Manage Product------------//
    // --------Start Managing general product and discount---------// 
    public function get_all_product(){
        $sql = 'select p.product_id, p.product_name, p.product_model, p.product_quantity, p.product_status, p.product_price, p.product_sku, img.image_path, d.discount_price from tbl_product as p left outer join tbl_image as img on p.product_id = img.product_id left outer join tbl_discount as d on p.product_id = d.product_id where img.default_image=1';
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    public function unpublished_product($product_id) {
        $this->db->set('product_status', 0);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }

    public function published_product($product_id) {
        $this->db->set('product_status', 1);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }
    public function get_product_and_discount($product_id){
        $sql = "select p.product_name, p.product_model, p.product_quantity, p.product_price, p.product_sku, d.discount_id, d.discount_price, d.start_date, d.end_date from tbl_product as p left outer join tbl_discount as d on p.product_id = d.product_id where p.product_id='$product_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    
    public function update_product($product_id,$product){
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product', $product);
    }
    public function update_discount($product_id,$discount){
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_discount', $discount);
    }
    // --------End Managing general product and discount---------// 
    // --------Start Managing product product size and discription---------//
    public function get_size_by_product_id($product_id){
        $this->db->select('size_id');
        $this->db->select('size_name');
        $this->db->where('product_id',$product_id);
        $this->db->from('tbl_product_size');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_description_by_product_id($product_id){
        $this->db->select('description_id');
        $this->db->select('description');
        $this->db->where('product_id',$product_id);
        $this->db->from('tbl_description');
        $query = $this->db->get();
        return $query->result();
    }
    public function delete_product_size($size_id)
    {
        $this->db->where('size_id',$size_id);
        $this->db->delete('tbl_product_size');
    }
    public function delete_description($description_id)
    {
        $this->db->where('description_id',$description_id);
        $this->db->delete('tbl_description');
    }
    public function get_size_by_size_id($size_id){
        //$this->db->select('size_id');
        $this->db->select('size_name');
        $this->db->where('size_id',$size_id);
        $this->db->from('tbl_product_size');
        $query = $this->db->get();
        $result=$query->row();
        return $result->size_name;
    }
    public function update_product_size($size_id,$size_name){
        $this->db->set('size_name',$size_name);
        $this->db->where('size_id', $size_id);
        $this->db->update('tbl_product_size');
    }
    public function get_description_by_description_id($description_id){
        //$this->db->select('description_id');
        $this->db->select('description');
        $this->db->where('description_id',$description_id);
        $this->db->from('tbl_description');
        $query = $this->db->get();
        $result=  $query->row();
        return $result->description;
    }    
    public function update_description($description_id,$data){
        $this->db->where('description_id', $description_id);
        $this->db->update('tbl_description', $data);
    }

    // --------Start Managing product product size and discription---------//
    //---------save description----------////////////
    public function save_description_by_product_id($data){
        $this->db->insert('tbl_description',$data);
    }
    public function save_size_by_product_id($data){
        $this->db->insert('tbl_product_size',$data);
    }
}
