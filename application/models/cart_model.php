<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cart_model
 *
 * @author Foyez
 */
class Cart_Model extends CI_Model{
    //put your code here
    public function select_product_info_by_id($product_id){
        $this->db->select('*');
        $this->db->where('product_id',$product_id);
        $this->db->from('vprice');
        $query = $this->db->get();
        $result=$query->row();
        return $result;
    }
}
