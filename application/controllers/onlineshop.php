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
        $data['product_id'] = $product_id;
        $data['product_info'] = $this->onlineshop_model->get_product_general_info_by_product_id($product_id);

        $data['product_image'] = json_encode($this->onlineshop_model->get_product_image_by_product_id($product_id));
        $data['product_size'] = json_encode($this->onlineshop_model->get_product_size_name_by_product_id($product_id));
//        echo '<pre>';
//        print_r($data);
//        exit();
        $data['nav_menu'] = $this->load->view('nav_menu', '', true);
        $data['user_main'] = $this->load->view('product_details', $data, true);
        $this->load->view('main', $data);
    }

    public function product_category($category_id) {
        $data = array();
        $data['category_id'] = $category_id;
        $data['product_pf1'] = $this->onlineshop_model->get_pfc1_using_category_id($category_id);
        $data['product_pf2'] = $this->onlineshop_model->get_pfc2_using_category_id($category_id);
        $data['product_pf3'] = $this->onlineshop_model->get_pfc3_using_category_id($category_id);
        $data['product_pf4'] = $this->onlineshop_model->get_pfc4_using_category_id($category_id);
        $data['product_pf5'] = $this->onlineshop_model->get_pfc5_using_category_id($category_id);
        $data['product_pf6'] = $this->onlineshop_model->get_pfc6_using_category_id($category_id);
        $data['manufacturer'] = json_encode($this->onlineshop_model->get_manufacturer_by_category_id($category_id));
        $data['size'] = json_encode($this->onlineshop_model->get_size_by_category_id($category_id));
        $data['product'] = json_encode($this->onlineshop_model->get_product_by_category_id($category_id));
//        echo '<pre>';
//        print_r($data);
//        exit();
        $data['nav_menu'] = $this->load->view('nav_menu', '', true);
        $data['user_main'] = $this->load->view('product_category', $data, true);
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

    public function product_sub_category($sub_category_id) {
        $data = array();
        $data['sub_category_id'] = $sub_category_id;
        $data['product_pf1'] = $this->onlineshop_model->get_pfc1_using_sub_category_id($sub_category_id);
        $data['product_pf2'] = $this->onlineshop_model->get_pfc2_using_sub_category_id($sub_category_id);
        $data['product_pf3'] = $this->onlineshop_model->get_pfc3_using_sub_category_id($sub_category_id);
        $data['product_pf4'] = $this->onlineshop_model->get_pfc4_using_sub_category_id($sub_category_id);
        $data['product_pf5'] = $this->onlineshop_model->get_pfc5_using_sub_category_id($sub_category_id);
        $data['product_pf6'] = $this->onlineshop_model->get_pfc6_using_sub_category_id($sub_category_id);
        $data['manufacturer'] = json_encode($this->onlineshop_model->get_manufacturer_by_sub_category_id($sub_category_id));
        $data['size'] = json_encode($this->onlineshop_model->get_size_by_sub_category_id($sub_category_id));
        $data['product'] = json_encode($this->onlineshop_model->get_product_by_sub_category_id($sub_category_id));
        $data['nav_menu'] = $this->load->view('nav_menu', '', true);
        $data['user_main'] = $this->load->view('product_sub_category', $data, true);
        $this->load->view('main', $data);
    }

    public function user_login() {
        $data = array();
        $data['nav_menu'] = $this->load->view('nav_menu', '', true);
        $data['user_main'] = $this->load->view('user_login', '', true);
        $this->load->view('main', $data);
    }

    public function user_checkout() {
        if ($this->cart->total_items() != 0) {
            $data = array();
            $data['cart_del_disable'] = 1;
            $data['nav_menu'] = $this->load->view('nav_menu', '', true);
            $data['user_main'] = $this->load->view('user_checkout', '', true);
            $this->load->view('main', $data);
        } else {
            redirect('onlineshop');
        }
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

    public function customer_info_save() {
        $data = array();
        $data['customer_name'] = $this->input->post('customer_name', true);
        $data['customer_mobile'] = $this->input->post('customer_mobile', true);
        $data['customer_email'] = $this->input->post('customer_email', true);
        $data['customer_location'] = $this->input->post('customer_location', true);
        $data['customer_passowrd'] = md5($this->input->post('customer_passowrd', true));
        $customer_id = $this->customer_model->save_sing_up_customer_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Registration Information Successfully !';
        $sdata['customer_id'] = $customer_id;
        $sdata['customer_name'] = $data['customer_name'];
//        echo '<pre>';
//        print_r($sdata);
//        exit();
        $this->session->set_userdata($sdata);

        /*
         * ------------- Start Send Customer Registration Confirmation Email-------
         */
        $mdata = array();
        $mdata['from_address'] = 'info@somoyerdeal';
        $mdata['admin_full_name'] = 'Somoyerdeal';
        $mdata['customer_email'] = $data['customer_email'];
        $mdata['subject'] = 'Registration Successfull- www.somoyerdeal.com';
        $mdata['customer_name'] = $data['customer_name'];
        $mdata['customer_passowrd'] = $this->input->post('customer_passowrd', true);

        $this->mailer_model->send_email($mdata, 'successfull_registration');
        /*
         * ------------- End Send Customer Registration Confirmation Email-------
         */
        if ($this->cart->total_items() == 0) {
            redirect('onlineshop');
        } else {
            redirect('onlineshop/user_checkout');
        }
    }

    public function customer_login_check() {

        $customer_email = $this->input->post('customer_email');
        $customer_passowrd = $this->input->post('customer_passowrd');

        $result = $this->customer_model->customer_login_check_info($customer_email, $customer_passowrd);

        $sdata = array();

        if ($result) {
            $sdata['customer_id'] = $result->customer_id;
            $sdata['customer_name'] = $result->customer_name;
            $this->session->set_userdata($sdata);
            if ($this->cart->total_items() == 0) {
                redirect('onlineshop');
            } else {
                redirect('onlineshop/user_checkout');
            }
        } else {
            $sdata['ecception'] = 'Your User ID And Password Invalide';
            $this->session->set_userdata($sdata);
            redirect('onlineshop/user_login');
        }
    }

    public function customer_logout() {
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('customer_name');
        redirect('onlineshop');
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

    public function fp_by_menufactuer_n_main_category($manufacturer_id, $main_category_id) {
        echo json_encode($this->onlineshop_model->get_product_by_manufacturer_and_main_category_id($manufacturer_id, $main_category_id));
    }

    public function fp_by_menufactuer_n_sub_category($manufacturer_id, $sub_category_id) {
        echo json_encode($this->onlineshop_model->get_product_by_manufacturer_and_sub_category_id($manufacturer_id, $sub_category_id));
    }

    public function fp_by_menufactuer_n_category($manufacturer_id, $category_id) {
        echo json_encode($this->onlineshop_model->get_product_by_manufacturer_and_category_id($manufacturer_id, $category_id));
    }

    public function fp_by_size_n_main_category($size_name, $main_category_id) {
        echo json_encode($this->onlineshop_model->get_product_by_size_and_main_category_id($size_name, $main_category_id));
    }

    public function fp_by_size_n_sub_category($size_name, $sub_category_id) {
        echo json_encode($this->onlineshop_model->get_product_by_size_and_sub_category_id($size_name, $sub_category_id));
    }

    public function fp_by_size_n_category($size_name, $category_id) {
        echo json_encode($this->onlineshop_model->get_product_by_size_and_category_id($size_name, $category_id));
    }

    public function search() {
        $product_name = $this->input->post('product_name', TRUE);
        $main_category_id = $this->input->post('main_category_id', TRUE);
        $data = array();
        $data['search_name'] = $product_name;
        if ($main_category_id != 0) {
            $data['counter'] = $this->onlineshop_model->get_product_by_name_and_main_category_count($main_category_id, $product_name);
            $data['search_product'] = json_encode($this->onlineshop_model->get_product_by_name_and_main_category($main_category_id, $product_name));
        } else {
            $data['counter'] = $this->onlineshop_model->get_product_by_name_count($product_name);
            $data['search_product'] = json_encode($this->onlineshop_model->get_product_by_name($product_name));
        }
        $data['nav_menu'] = $this->load->view('nav_menu', '', true);
        $data['user_main'] = $this->load->view('search', $data, true);
        $this->load->view('main', $data);
    }

    public function go_for_cart_from_home() {
        $product_id = $this->input->post('product_id', TRUE);
        $qty = $this->input->post('qty', TRUE);
        $check_size = $this->onlineshop_model->check_size($product_id);
        if ($check_size == 0) {
            $this->add_on_cart($product_id, $qty);
            redirect('onlineshop');
        } else {
            redirect('onlineshop/product_details/' . $product_id);
        }
    }

    public function go_for_cart_from_main_category($main_category_id) {
        $product_id = $this->input->post('product_id', TRUE);
        $qty = $this->input->post('qty', TRUE);
        $check_size = $this->onlineshop_model->check_size($product_id);
        if ($check_size == 0) {
            $this->add_on_cart($product_id, $qty);
            redirect('onlineshop/product_main_category/' . $main_category_id);
        } else {
            redirect('onlineshop/product_details/' . $product_id);
        }
    }

    public function go_for_cart_from_sub_category($sub_category_id) {
        $product_id = $this->input->post('product_id', TRUE);
        $qty = $this->input->post('qty', TRUE);
        $check_size = $this->onlineshop_model->check_size($product_id);
        if ($check_size == 0) {
            $this->add_on_cart($product_id, $qty);
            redirect('onlineshop/product_sub_category/' . $sub_category_id);
        } else {
            redirect('onlineshop/product_details/' . $product_id);
        }
    }

    public function go_for_cart_from_category($category_id) {
        $product_id = $this->input->post('product_id', TRUE);
        $qty = $this->input->post('qty', TRUE);
        $check_size = $this->onlineshop_model->check_size($product_id);
        if ($check_size == 0) {
            $this->add_on_cart($product_id, $qty);
            redirect('onlineshop/product_category/' . $category_id);
        } else {
            redirect('onlineshop/product_details/' . $product_id);
        }
    }

    public function add_on_cart($product_id, $qty) {
        $product_info = $this->cart_model->select_product_info_by_id($product_id);
        $data = array(
            'id' => $product_info->product_id,
            'qty' => $qty,
            'price' => $product_info->price,
            'name' => $product_info->product_name,
            'image' => $product_info->image_path,
            'options' => array('Size' => $size)
        );

        $this->cart->insert($data);
    }

    public function discount() {
        $data = array();
        $data['search_name'] = 'Discount products';
        $data['counter'] = $this->onlineshop_model->get_discount_product_counter();
        $data['search_product'] = json_encode($this->onlineshop_model->get_all_discount_product());
        $data['nav_menu'] = $this->load->view('nav_menu', '', true);
        $data['user_main'] = $this->load->view('search', $data, true);
        $this->load->view('main', $data);
    }

}
