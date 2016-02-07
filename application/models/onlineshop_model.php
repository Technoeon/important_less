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
        $sql ="select main_menu_id as id, main_menu_name from vmenu where position='$position' and main_menu_status =1 group by main_menu_id";
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
}
