<?php

class Somoyer_User extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $customer_id = $this->session->userdata('customer_id');
        $customer_name = $this->session->userdata('customer_name');
        $customer_mobile = $this->session->userdata('customer_mobile');
        if ($customer_id == NULL && $customer_name == NULL  && $customer_mobile == NULL) {
            $sdata['su'] = 1;
            $this->session->set_userdata($sdata);
            redirect('onlineshop/user_login', 'refresh');
        }
    }
   public function index(){
       $this->session->unset_userdata('su');
       $customer_id = $this->session->userdata('customer_id');
       $data = array();
       $data['my_order']=  $this->customer_model->get_my_recent_order($customer_id);
       $data['customer_info']= $this->customer_model->get_customer_info($customer_id);
       $data['shiping']= $this->customer_model->get_my_shipping_address($customer_id);
       $data['nav_menu'] = $this->load->view('nav_menu', '', true);
       $data['user_main'] = $this->load->view('user_account', $data, true);
       $this->load->view('main', $data);
   }
   public function my_orders(){
       $data = array();
       $customer_id= $this->session->userdata('customer_id');
        $data['customer_info']= $this->customer_model->get_customer_info($customer_id);
       $data['my_order']=$this->customer_model->get_my_all_order($customer_id);
       $data['nav_menu'] = $this->load->view('nav_menu', '', true);
       $data['user_main'] = $this->load->view('my_orders', $data, true);
       $this->load->view('main', $data);
   }

   public function change_info($customer_id){
       $data = array();
       $data['customer_id'] = $customer_id;
       $data['customer_info']= $this->customer_model->get_customer_info($customer_id);
       $data['nav_menu'] = $this->load->view('nav_menu', '', true);
       $data['user_main'] = $this->load->view('change_customer_info', $data, true);
       $this->load->view('main', $data);
   }
   public function customer_info_save() {
        $customer_id = $this->input->post('customer_id', true);
        $customer_name = $this->input->post('customer_name', true);
        $customer_adress = $this->input->post('customer_location', true);
        $this->customer_model->update_customer_info($customer_id, $customer_name, $customer_adress);
        $sdata = array();
        $sdata['message'] = 'Save Your Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('somoyer_user');
    }
    public function change_password($customer_id){
       $data = array();
       $data['customer_id'] = $this->session->userdata('customer_id');
       $data['customer_info']= $this->customer_model->get_customer_info($customer_id);
       $data['nav_menu'] = $this->load->view('nav_menu', '', true);
       $data['user_main'] = $this->load->view('change_password', $data, true);
       $this->load->view('main', $data);
   }
   public function new_password_save(){
        $customer_id = $this->input->post('customer_id', true);
        $current_password = $this->input->post('old_customer_passowrd', true);
        $new_password = $this->input->post('new_customer_passowrd', true);
        $password=  md5($current_password);
        $check_password= $this->customer_model->get_customer_password($customer_id);
        if($check_password == $password) {
            $this->customer_model->update_new_password($customer_id, $new_password);
            $sdata = array();
            $sdata['message'] = 'Change new password Successfully';
            $this->session->set_userdata($sdata);
            redirect('somoyer_user');
        }  else {
            $sdata = array();
            $sdata['message'] = 'Worng password';
            $this->session->set_userdata($sdata);
            redirect('somoyer_user/change_password/'.$customer_id);
        }
    }
    public function address_book($customer_id){
       $data = array();
       $customer_id= $this->session->userdata('customer_id');
       $data['customer_info']= $this->customer_model->get_customer_info($customer_id);
       $data['shiping']=$this->customer_model->get_my_all_address($customer_id);
       $data['nav_menu'] = $this->load->view('nav_menu', '', true);
       $data['user_main'] = $this->load->view('my_address', $data, true);
       $this->load->view('main', $data);
    }
    public function wishlist(){
       $data = array();
       $customer_id= $this->session->userdata('customer_id');
       $data['customer_info']= $this->customer_model->get_customer_info($customer_id);
       $data['wishlist']=$this->customer_model->get_my_wishlist($customer_id);
       $data['nav_menu'] = $this->load->view('nav_menu', '', true);
       $data['user_main'] = $this->load->view('my_wishlist', $data, true);
       $this->load->view('main', $data);
    }
    public function clear_wish($product_id){
       $customer_id= $this->session->userdata('customer_id');
       $this->customer_model->clear_wishlist($product_id,$customer_id);
       $sdata = array();
       $sdata['message'] = 'Clear Product From wishlist successfully';
       $this->session->set_userdata($sdata);
       redirect('somoyer_user/wishlist');
    }
    public function go_for_cart_from_wishlist(){
        $product_id = $this->input->post('product_id', TRUE);
        $qty = $this->input->post('qty', TRUE);
        $check_size = $this->onlineshop_model->check_size($product_id);
        if ($check_size == 0) {
            $this->add_on_cart($product_id, $qty);
            redirect('somoyer_user/wishlist');
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

}
