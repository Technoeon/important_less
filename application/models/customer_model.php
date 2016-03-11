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
}
