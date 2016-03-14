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
    public function get_info_for_invoice_by_order_id($order_id){
        $sql = "SELECT o.order_id, o.shipping_id, o.customer_id, o.invoice_no, o.order_total, date(o.order_date_time) as order_date_time, s.customer_name, s.district, s.address, s.mobile_no, s.alter_mobile_no, c.customer_location, c.customer_email FROM `tbl_order` as o join tbl_shipping as s on o.shipping_id = s.shipping_id join tbl_customer as c on o.customer_id = c.customer_id WHERE o.order_id ='$order_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    public function get_order_details_by_order_id($order_id){
        $this->db->select('*');
        $this->db->where('order_id',$order_id);
        $this->db->from('tbl_oder_details');
        $query = $this->db->get();
        return $query->result();
    }
}
