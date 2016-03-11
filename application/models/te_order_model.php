<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of te_order_model
 *
 * @author MASUD RANA
 */
class Te_Order_Model extends CI_Model {
    //put yo ur code here
    public function get_all_order(){
        $sql = 'SELECT o.order_id, o.invoice_no, o.order_total, s.customer_name, s.mobile_no, o.order_status FROM `tbl_order` as o join tbl_shipping as s on o.shipping_id= s.shipping_id';
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
}
