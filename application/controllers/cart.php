<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cart
 *
 * @author Foyez
 */
class Cart extends CI_Controller {

    //put your code here

    public function add_to_cart() {
        //echo $product_id;
        $product_id = $this->input->post('product_id', true);
        $size = $this->input->post('size', TRUE);
        //echo '---'.$product_id;
        //exit();
        $product_info = $this->cart_model->select_product_info_by_id($product_id);

        /* echo '<pre>';
          print_r($product_info);
          exit(); */


        $sdata=array();
        $sdata['main_category_id']=$product_info->main_category_id;
        $this->session->set_userdata($sdata);
        $qty = $this->input->post('qty', true);
//        echo $product_id.'---id----'.$size.'--size--'.$qty.'--quantity';
//        if($product_info->product_special_price)
//        {
//            $product_price=$product_info->product_special_price;
//        }
//        else{
//            $product_price=$product_info->product_price;
//        }


        $data = array(
            'id' => $product_info->product_id,
            'qty' => $qty,
            'price' => $product_info->price,
            'name' => $product_info->product_name,
            'image' => $product_info->image_path,
            'options' => array('Size' => $size)
        );
//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->cart->insert($data);


        redirect('cart/show_cart');
    }
    
    public function update_cart($drowid = NULL) {
        $data = array();
        $qty = $this->input->post('qty', true);
        $rowid = $this->input->post('rowid', true);
        //echo '------'.$drowid;
        //exit();
        if (isset($qty)) {
            $j = count($rowid);
            for ($i = 0; $i < $j; $i++) {
                $data['rowid'] = $rowid[$i];
                $data['qty'] = $qty[$i];
                $this->cart->update($data);
            }
        }
//        if ($drowid) {
//            $data = array(
//                'rowid' => $drowid,
//                'qty' => 0
//            );
//
//            $this->cart->update($data);
//        } else {
//            $data = array(
//                'rowid' => $rowid,
//                'qty' => $qty
//            );
//
//            
//        }
        redirect('cart/show_cart');
    }

    public function show_cart() {
        $data = array();
//        $data['content']=$this->cart->contents();
//        echo '<pre>';
//        print_r($data);
//        exit();
        $data['main_category_id']=$this->session->userdata('main_category_id');
        $data['nav_menu'] = $this->load->view('nav_menu', '', true);
        $data['user_main'] = $this->load->view('cart_view', $data, TRUE);
        $this->load->view('main', $data);
    }

    public function delete_from_cart($rowid) {
        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );

        $this->cart->update($data);
        redirect('cart/show_cart');
    }
    public function remove_from_cart($rowid) {
        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );

        $this->cart->update($data);
        echo json_encode($this->cart->contents());
    }
    public function total_items_remain() {
        echo json_encode($this->cart->total_items());
    }
    public function total_amount() {
        echo json_encode($this->cart->total());
    }
    public function clear_cart() {
        echo $this->cart->destroy();
        redirect('cart/show_cart');
    }

}
