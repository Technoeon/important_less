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
        $this->db->select('*');
        $this->db->where('main_category_id',$main_category_id);
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
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
    public function get_product_by_category_id($category_id){
        $this->db->select('*');
        $this->db->where('category_id',$category_id);
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_product_by_sub_category_id($sub_category_id){
        $this->db->select('*');
        $this->db->where('sub_category_id',$sub_category_id);
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_manufacturer_by_main_category_id($main_category_id){
        $sql ="SELECT m.manufacturer_id, m.manufacturer_name, p.main_category_id, COUNT(p.manufacturer_id) AS have_product FROM tbl_manufacturer as m join tbl_product as p on m.manufacturer_id= p.manufacturer_id where m.manufacturer_status=1 and p.product_status=1 and  p.main_category_id ='$main_category_id' group by m.manufacturer_id";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function get_manufacturer_by_sub_category_id($sub_category_id){
        $sql ="SELECT m.manufacturer_id, m.manufacturer_name, p.sub_category_id, COUNT(p.manufacturer_id) AS have_product FROM tbl_manufacturer as m join tbl_product as p on m.manufacturer_id= p.manufacturer_id where m.manufacturer_status=1 and p.product_status=1 and p.sub_category_id ='$sub_category_id' group by m.manufacturer_id";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function get_manufacturer_by_category_id($category_id){
        $sql ="SELECT m.manufacturer_id, m.manufacturer_name, p.category_id, COUNT(p.manufacturer_id) AS have_product FROM tbl_manufacturer as m join tbl_product as p on m.manufacturer_id= p.manufacturer_id where m.manufacturer_status=1 and p.product_status=1 and p.category_id ='$category_id' group by m.manufacturer_id";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function get_size_by_main_category_id($main_category_id){
        $sql ="select p.main_category_id, s.size_name, count(s.size_name) as have_product from tbl_product_size as s join tbl_product as p on s.product_id=p.product_id where p.product_status=1 and p.main_category_id='$main_category_id' group by s.size_name";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function get_size_by_sub_category_id($sub_category_id){
        $sql ="select p.sub_category_id, s.size_name, count(s.size_name) as have_product from tbl_product_size as s join tbl_product as p on s.product_id=p.product_id where p.product_status=1 and p.sub_category_id='$sub_category_id' group by s.size_name";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function get_size_by_category_id($category_id){
        $sql ="select p.category_id, s.size_name, count(s.size_name) as have_product from tbl_product_size as s join tbl_product as p on s.product_id=p.product_id where p.product_status=1 and p.category_id='$category_id' group by s.size_name";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    /*---------price filter----------*/
    public function get_price_by_main_category_id1($main_category_id){
        $this->db->select('*');
        $this->db->where('main_category_id',$main_category_id);
        $this->db->where('price <=','500');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_by_main_category_id2($main_category_id){
        $this->db->select('*');
        $this->db->where('main_category_id',$main_category_id);
        $this->db->where('price >=','501');
        $this->db->where('price <=','1000');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_by_main_category_id3($main_category_id){
        $this->db->select('*');
        $this->db->where('main_category_id',$main_category_id);
        $this->db->where('price >=','1001');
        $this->db->where('price <=','2000');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_by_main_category_id4($main_category_id){
        $this->db->select('*');
        $this->db->where('main_category_id',$main_category_id);
        $this->db->where('price >=','2001');
        $this->db->where('price <=','5000');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_by_main_category_id5($main_category_id){
        $this->db->select('*');
        $this->db->where('main_category_id',$main_category_id);
        $this->db->where('price >=','5001');
        $this->db->where('price <=','10000');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_by_main_category_id6($main_category_id){
        $this->db->select('*');
        $this->db->where('main_category_id',$main_category_id);
        $this->db->where('price >=','10001');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_by_sub_category_id1($sub_category_id){
        $this->db->select('*');
        $this->db->where('sub_category_id',$sub_category_id);
        $this->db->where('price <=','500');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_by_sub_category_id2($sub_category_id){
        $this->db->select('*');
        $this->db->where('sub_category_id',$sub_category_id);
        $this->db->where('price >=','501');
        $this->db->where('price <=','1000');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_by_sub_category_id3($sub_category_id){
        $this->db->select('*');
        $this->db->where('sub_category_id',$sub_category_id);
        $this->db->where('price >=','1001');
        $this->db->where('price <=','2000');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_by_sub_category_id4($sub_category_id){
        $this->db->select('*');
        $this->db->where('sub_category_id',$sub_category_id);
        $this->db->where('price >=','2001');
        $this->db->where('price <=','5000');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_by_sub_category_id5($sub_category_id){
        $this->db->select('*');
        $this->db->where('sub_category_id',$sub_category_id);
        $this->db->where('price >=','5001');
        $this->db->where('price <=','10000');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_by_sub_category_id6($sub_category_id){
        $this->db->select('*');
        $this->db->where('sub_category_id',$sub_category_id);
        $this->db->where('price >=','10001');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_category_id1($category_id){
        $this->db->select('*');
        $this->db->where('category_id',$category_id);
        $this->db->where('price <=','500');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_by_category_id2($category_id){
        $this->db->select('*');
        $this->db->where('category_id',$category_id);
        $this->db->where('price >=','501');
        $this->db->where('price <=','1000');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_by_category_id3($category_id){
        $this->db->select('*');
        $this->db->where('category_id',$category_id);
        $this->db->where('price >=','1001');
        $this->db->where('price <=','2000');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_by_category_id4($category_id){
        $this->db->select('*');
        $this->db->where('category_id',$category_id);
        $this->db->where('price >=','2001');
        $this->db->where('price <=','5000');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_by_category_id5($category_id){
        $this->db->select('*');
        $this->db->where('category_id',$category_id);
        $this->db->where('price >=','5001');
        $this->db->where('price <=','10000');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_price_by_category_id6($category_id){
        $this->db->select('*');
        $this->db->where('category_id',$category_id);
        $this->db->where('price >=','10001');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    /*--------price filter end here---------*/
}
