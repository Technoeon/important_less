<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of onlineshop_model
 *
 * @author Rubel
 */
class onlineshop_model extends CI_Model{
    //put your code here
    public function get_main_menu_by_position($position){
        $sql ="select c.main_category_id as id, c.main_category_name as main_menu_name, p.product_id, p.product_name, oi.menu_image from tbl_main_category as c left outer join tbl_others_image as oi on c.other_image_id=oi.other_image_id left outer join tbl_product as p on oi.product_id= p.product_id where c.main_category_position='$position' and c.main_category_status =1";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function get_sub_menu_by_position($position){
        $sql ="select sub_menu_id, sub_menu_name from vmenu where position='$position' and sub_menu_status =1";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function get_menu_by_position($position){
        $sql ="select sub_menu_id, menu_id, menu_name from vmenu where position='$position' and menu_status =1 order by sub_menu_id";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function get_product_by_main_category_id($main_category_id){
        $sql ="select `product_id`,`main_category_id`,`sub_category_id`,`category_id` ,`product_name`,`product_price`,`image_path`, ( CASE WHEN start_date <= CURDATE() AND end_date >= CURDATE() THEN `discount_price` ELSE `discount_price`=null END) as discount from vproduct where default_image=1 and product_status=1 and main_category_id='$main_category_id'";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function get_sub_category_by_main_category_id($main_category_id){
        $this->db->select('sub_category_id');
        $this->db->select('sub_category_name');
        $this->db->where('main_category_id',$main_category_id);
        $this->db->where('sub_category_status',1);
        $this->db->from('tbl_sub_category');
        $query = $this->db->get();
        return $query->result();
    }
    
}
