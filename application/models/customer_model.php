<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of customer_model
 *
 * @author Foyez
 */
class Customer_Model extends CI_Model{
    //put your code here
    public function save_sing_up_customer_info($data)
    {
        $this->db->insert('tbl_customer',$data);
        $customer_id=$this->db->insert_id();
        return $customer_id;
    }
    public function customer_login_check_info($customer_email,$customer_passowrd)
    {
        $passowrd = md5($customer_passowrd);
        $sql="SELECT * FROM tbl_customer WHERE customer_email='$customer_email' AND customer_passowrd='$passowrd'";
        $query_result=$this->db->query($sql);
        $result=$query_result->row();
        return $result;
    }
    public function save_shipping($shipping){/* insert general information of product and return shipping ID */
        $this->db->insert('tbl_shipping',$shipping);
        $shipping_id=$this->db->insert_id();
        return $shipping_id;
    }
    public function save_order($order){/* insert general information of product and return order ID */
        $this->db->insert('tbl_order',$order);
        $order_id=$this->db->insert_id();
        return $order_id;
    }
    public function save_order_details($order_details){/* insert general information of product and return order ID */
        $this->db->insert('tbl_oder_details',$order_details);
    }
    public function get_my_recent_order($customer_id){
        $sql = "SELECT o.order_id, o.invoice_no, date(o.order_date_time) as order_date_time, s.address, o.order_total, o.order_status FROM `tbl_order` as o join tbl_shipping as s on o.shipping_id= s.shipping_id where o.customer_id='$customer_id' order by o.order_id DESC LIMIT 0, 5";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    public function get_my_all_order($customer_id){
        $sql = "SELECT o.order_id, o.invoice_no, date(o.order_date_time) as order_date_time, s.address, o.order_total, o.order_status FROM `tbl_order` as o join tbl_shipping as s on o.shipping_id= s.shipping_id where o.customer_id='$customer_id' order by o.order_id DESC";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    public function get_customer_info($customer_id){
        $this->db->select('*');
        $this->db->where('customer_id',$customer_id);
        $this->db->from('tbl_customer');
        $query = $this->db->get();
        return $query->row();
    }
    public function update_customer_info($customer_id, $customer_name, $customer_adress){
        $this->db->set('customer_name', $customer_name);
        $this->db->set('customer_location', $customer_adress);
        $this->db->where('customer_id', $customer_id);
        $this->db->update('tbl_customer');
    }
    public function get_customer_password($customer_id){
        $this->db->select('customer_passowrd');
        $this->db->where('customer_id',$customer_id);
        $this->db->from('tbl_customer');
        $query = $this->db->get();
        $result=$query->row();
        return $result->customer_passowrd;
    }
    public function update_new_password($customer_id, $new_password){
        $password = md5($new_password);
        $this->db->set('customer_passowrd', $password);
        $this->db->where('customer_id', $customer_id);
        $this->db->update('tbl_customer');
    }
    public function get_my_shipping_address($customer_id){
        $sql = "SELECT `address`,`district`,`alter_mobile_no` FROM `tbl_shipping` WHERE customer_id = '$customer_id' group by address order by shipping_id desc LIMIT 0, 2";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    public function get_my_all_address($customer_id){
        $sql = "SELECT `address`,`district`,`alter_mobile_no` FROM `tbl_shipping` WHERE customer_id = '$customer_id' group by address order by shipping_id desc";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    public function get_my_wishlist($customer_id){
        $sql = "SELECT vp.* FROM `vprice` as vp join tbl_wishlist as w on vp.product_id= w.product_id WHERE w.customer_id = '$customer_id' group by vp.product_id order by w.wistlist_id desc";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    public function clear_wishlist($product_id,$customer_id){
        $this->db->where('customer_id',$customer_id);
        $this->db->where('product_id',$product_id);
        $this->db->delete('tbl_wishlist');
    }
}
