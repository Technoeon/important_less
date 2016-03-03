<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of onlineshop
 *
 * @author Rubel
 */
class onlineshop extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    //put your code here
    public function index() {
        $data = array();
        $data['leftside_manu'] = $this->load->view('leftside_manu', '', true);
        $data['nav_menu'] = $this->load->view('nav_menu', '', true);
        $data['user_main'] = $this->load->view('user_main_deshboard', $data, true);
        $this->load->view('main', $data);
    }

    public function product_details($product_id) {
        $data = array();
        $data['product_id']=$product_id;
        $data['product_info']=  $this->onlineshop_model->get_product_general_info_by_product_id($product_id);
        
        $data['product_image']=json_encode($this->onlineshop_model->get_product_image_by_product_id($product_id));
        $data['product_size']=  json_encode($this->onlineshop_model->get_product_size_name_by_product_id($product_id));
//        echo '<pre>';
//        print_r($data);
//        exit();
        $data['nav_menu'] = $this->load->view('nav_menu', '', true);
        $data['user_main'] = $this->load->view('product_details',$data, true);
        $this->load->view('main', $data);
    }

    public function product_category($category_id){
        $data = array();
        $data['category_id']=$category_id;
        $data['product_pf1'] = $this->onlineshop_model->get_pfc1_using_category_id($category_id);
        $data['product_pf2'] = $this->onlineshop_model->get_pfc2_using_category_id($category_id);
        $data['product_pf3'] = $this->onlineshop_model->get_pfc3_using_category_id($category_id);
        $data['product_pf4'] = $this->onlineshop_model->get_pfc4_using_category_id($category_id);
        $data['product_pf5'] = $this->onlineshop_model->get_pfc5_using_category_id($category_id);
        $data['product_pf6'] = $this->onlineshop_model->get_pfc6_using_category_id($category_id);
        $data['manufacturer']=json_encode($this->onlineshop_model->get_manufacturer_by_category_id($category_id));
        $data['size']=  json_encode($this->onlineshop_model->get_size_by_category_id($category_id));
        $data['product'] = json_encode($this->onlineshop_model->get_product_by_category_id($category_id));
//        echo '<pre>';
//        print_r($data);
//        exit();
        $data['nav_menu'] = $this->load->view('nav_menu','', true);
        $data['user_main'] = $this->load->view('product_category',$data, true);
        $this->load->view('main', $data);        
    }
    public function product_main_category($main_category_id) {
        $data = array();
        $data['main_category_id'] = $main_category_id;
        $data['product_pf1'] = $this->onlineshop_model->get_pfc1_using_main_category_id($main_category_id);
        $data['product_pf2'] = $this->onlineshop_model->get_pfc2_using_main_category_id($main_category_id);
        $data['product_pf3'] = $this->onlineshop_model->get_pfc3_using_main_category_id($main_category_id);
        $data['product_pf4'] = $this->onlineshop_model->get_pfc4_using_main_category_id($main_category_id);
        $data['product_pf5'] = $this->onlineshop_model->get_pfc5_using_main_category_id($main_category_id);
        $data['product_pf6'] = $this->onlineshop_model->get_pfc6_using_main_category_id($main_category_id);
        $data['manufacturer'] = json_encode($this->onlineshop_model->get_manufacturer_by_main_category_id($main_category_id));
        $data['size'] = json_encode($this->onlineshop_model->get_size_by_main_category_id($main_category_id));
        $data['product'] = json_encode($this->onlineshop_model->get_product_by_main_category_id($main_category_id));
        $data['nav_menu'] = $this->load->view('nav_menu', '', true);
        $data['user_main'] = $this->load->view('product_main_category', $data, true);
        $this->load->view('main', $data);
    }

    public function product_sub_category($sub_category_id){
        $data = array();
        $data['sub_category_id']=$sub_category_id;
        $data['product_pf1'] = $this->onlineshop_model->get_pfc1_using_sub_category_id($sub_category_id);
        $data['product_pf2'] = $this->onlineshop_model->get_pfc2_using_sub_category_id($sub_category_id);
        $data['product_pf3'] = $this->onlineshop_model->get_pfc3_using_sub_category_id($sub_category_id);
        $data['product_pf4'] = $this->onlineshop_model->get_pfc4_using_sub_category_id($sub_category_id);
        $data['product_pf5'] = $this->onlineshop_model->get_pfc5_using_sub_category_id($sub_category_id);
        $data['product_pf6'] = $this->onlineshop_model->get_pfc6_using_sub_category_id($sub_category_id);
        $data['manufacturer']=  json_encode($this->onlineshop_model->get_manufacturer_by_sub_category_id($sub_category_id));
        $data['size']=  json_encode($this->onlineshop_model->get_size_by_sub_category_id($sub_category_id));
        $data['product'] = json_encode($this->onlineshop_model->get_product_by_sub_category_id($sub_category_id));
        $data['nav_menu'] = $this->load->view('nav_menu','', true);
        $data['user_main'] = $this->load->view('product_sub_category',$data, true);
        $this->load->view('main', $data);        
    }

    public function user_login() {
        $data = array();
        $data['nav_menu'] = $this->load->view('nav_menu', '', true);
        $data['user_main'] = $this->load->view('user_login', '', true);
        $this->load->view('main', $data);
    }

    public function user_checkout() {
        $data = array();
        $data['nav_menu'] = $this->load->view('nav_menu', '', true);
        $data['user_main'] = $this->load->view('user_checkout', '', true);
        $this->load->view('main', $data);
    }

    public function user_wishlist() {
        $data = array();
        $data['nav_menu'] = $this->load->view('nav_menu', '', true);
        $data['user_main'] = $this->load->view('user_wishlist', '', true);
        $this->load->view('main', $data);
    }

    public function user_account() {
        $data = array();
        $data['nav_menu'] = $this->load->view('nav_menu', '', true);
        $data['user_main'] = $this->load->view('user_account', '', true);
        $this->load->view('main', $data);
    }

    public function main_menu($position) {
        $data = array();
        $main_menu = $this->onlineshop_model->get_main_menu_by_position($position);
        foreach ($main_menu as $value) {
            $data['main_menu_id'] = $value->id;
            $data['main_menu_name'] = $value->main_menu_name;
        }
        //$data['menu']= $main_menu;
        return $data;
    }

    public function test($main_category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_main_category_id1($main_category_id));
//        $data['products_id']=$main_category_id;
//        echo json_encode($data);
//        $data['main_menu'] = $this->onlineshop_model->get_main_menu_by_position($position);
//        $data['sub_menu'] = $this->onlineshop_model->get_sub_menu_by_position($position);
//        $data['menu'] = $this->onlineshop_model->get_menu_by_position($position);
//        $data['product_price']= json_encode($this->onlineshop_model->get_price_by_main_category_id1($main_category_id));
//        echo '<pre>';
//        print_r($data);
//        exit();
//        $this->load->view('test', $data);
    }

    public function m_price_l500($main_category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_main_category_id1($main_category_id));
    }
    public function m_price_g500_to1000($main_category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_main_category_id2($main_category_id));
    }
    public function m_price_g1000_to2000($main_category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_main_category_id3($main_category_id));
    }
    public function m_price_g2000_to5000($main_category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_main_category_id4($main_category_id));
    }
    public function m_price_g5000_to10000($main_category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_main_category_id5($main_category_id));
    }
    public function m_price_above10000($main_category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_main_category_id6($main_category_id));
    }
    
    
    public function s_price_l500($sub_category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_sub_category_id1($sub_category_id));
    }
    public function s_price_g500_to1000($sub_category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_sub_category_id2($sub_category_id));
    }
    public function s_price_g1000_to2000($sub_category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_sub_category_id3($sub_category_id));
    }
    public function s_price_g2000_to5000($sub_category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_sub_category_id4($sub_category_id));
    }
    public function s_price_g5000_to10000($sub_category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_sub_category_id5($sub_category_id));
    }
    public function s_price_above10000($sub_category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_sub_category_id6($sub_category_id));
    }
    
    public function c_price_l500($category_id) {
        echo json_encode($this->onlineshop_model->get_price_category_id1($category_id));
    }
    public function c_price_g500_to1000($category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_category_id2($category_id));
    }
    public function c_price_g1000_to2000($category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_category_id3($category_id));
    }
    public function c_price_g2000_to5000($category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_category_id4($category_id));
    }
    public function c_price_g5000_to10000($category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_category_id5($category_id));
    }
    public function c_price_above10000($category_id) {
        echo json_encode($this->onlineshop_model->get_price_by_category_id6($category_id));
    }
    public function fp_by_menufactuer_n_main_category($manufacturer_id,$main_category_id) {
        echo json_encode($this->onlineshop_model->get_product_by_manufacturer_and_main_category_id($manufacturer_id,$main_category_id));
    }
    public function fp_by_menufactuer_n_sub_category($manufacturer_id,$sub_category_id) {
        echo json_encode($this->onlineshop_model->get_product_by_manufacturer_and_sub_category_id($manufacturer_id,$sub_category_id));
    }
    public function fp_by_menufactuer_n_category($manufacturer_id,$category_id) {
        echo json_encode($this->onlineshop_model->get_product_by_manufacturer_and_category_id($manufacturer_id,$category_id));
    }
    public function fp_by_size_n_main_category($size_name, $main_category_id){
        echo json_encode($this->onlineshop_model->get_product_by_size_and_main_category_id($size_name,$main_category_id));
    }
    public function fp_by_size_n_sub_category($size_name, $sub_category_id){
        echo json_encode($this->onlineshop_model->get_product_by_size_and_sub_category_id($size_name,$sub_category_id));
    }
    public function fp_by_size_n_category($size_name, $category_id){
        echo json_encode($this->onlineshop_model->get_product_by_size_and_category_id($size_name,$category_id));
    }
}
