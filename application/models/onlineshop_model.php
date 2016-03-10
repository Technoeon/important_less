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
        $sql ="select `product_id`,`main_category_id`,`sub_category_id`,`category_id` ,`product_name`,`product_price`,`image_path`, ( CASE WHEN start_date <= CURDATE() AND end_date >= CURDATE() THEN `discount_price` ELSE `discount_price`=null END) as discount from vproduct where default_image=1 and product_status=1 and category_id='$category_id'";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function get_product_by_sub_category_id($sub_category_id){
        $sql ="select `product_id`,`main_category_id`,`sub_category_id`,`category_id` ,`product_name`,`product_price`,`image_path`, ( CASE WHEN start_date <= CURDATE() AND end_date >= CURDATE() THEN `discount_price` ELSE `discount_price`=null END) as discount from vproduct where default_image=1 and product_status=1 and sub_category_id='$sub_category_id'";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
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
    public function get_pfc1_using_main_category_id($main_category_id){
        $sql ="select count(product_id) as have_product from vprice where price<=500 and main_category_id='$main_category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    public function get_pfc2_using_main_category_id($main_category_id){
        $sql ="select count(product_id) as have_product from vprice where price>500 and price<=1000 and main_category_id='$main_category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    public function get_pfc3_using_main_category_id($main_category_id){
        $sql ="select count(product_id) as have_product from vprice where price>1000 and price<=2000 and main_category_id='$main_category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    public function get_pfc4_using_main_category_id($main_category_id){
        $sql ="select count(product_id) as have_product from vprice where price>2000 and price<=5000 and main_category_id='$main_category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    public function get_pfc5_using_main_category_id($main_category_id){
        $sql ="select count(product_id) as have_product from vprice where price>5000 and price<=10000 and main_category_id='$main_category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    public function get_pfc6_using_main_category_id($main_category_id){
        $sql ="select count(product_id) as have_product from vprice where price>10000 and main_category_id='$main_category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    
    
    public function get_pfc1_using_sub_category_id($sub_category_id){
        $sql ="select count(product_id) as have_product from vprice where price<=500 and sub_category_id='$sub_category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    public function get_pfc2_using_sub_category_id($sub_category_id){
        $sql ="select count(product_id) as have_product from vprice where price>500 and price<=1000 and sub_category_id='$sub_category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    public function get_pfc3_using_sub_category_id($sub_category_id){
        $sql ="select count(product_id) as have_product from vprice where price>1000 and price<=2000 and sub_category_id='$sub_category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    public function get_pfc4_using_sub_category_id($sub_category_id){
        $sql ="select count(product_id) as have_product from vprice where price>2000 and price<=5000 and sub_category_id='$sub_category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    public function get_pfc5_using_sub_category_id($sub_category_id){
        $sql ="select count(product_id) as have_product from vprice where price>5000 and price<=10000 and sub_category_id='$sub_category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    public function get_pfc6_using_sub_category_id($sub_category_id){
        $sql ="select count(product_id) as have_product from vprice where price>10000 and sub_category_id='$sub_category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    
    
    public function get_pfc1_using_category_id($category_id){
        $sql ="select count(product_id) as have_product from vprice where price<=500 and category_id='$category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    public function get_pfc2_using_category_id($category_id){
        $sql ="select count(product_id) as have_product from vprice where price>500 and price<=1000 and category_id='$category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    public function get_pfc3_using_category_id($category_id){
        $sql ="select count(product_id) as have_product from vprice where price>1000 and price<=2000 and category_id='$category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    public function get_pfc4_using_category_id($category_id){
        $sql ="select count(product_id) as have_product from vprice where price>2000 and price<=5000 and category_id='$category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    public function get_pfc5_using_category_id($category_id){
        $sql ="select count(product_id) as have_product from vprice where price>5000 and price<=10000 and category_id='$category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    public function get_pfc6_using_category_id($category_id){
        $sql ="select count(product_id) as have_product from vprice where price>10000 and category_id='$category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->have_product;
    }
    public function get_product_by_manufacturer_and_main_category_id($manufacturer_id,$main_category_id){
        $sql ="SELECT vp.* FROM `vprice` as vp join tbl_product as p on vp.product_id=p.product_id WHERE p.manufacturer_id='$manufacturer_id' and vp.main_category_id='$main_category_id'";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function get_product_by_manufacturer_and_sub_category_id($manufacturer_id,$sub_category_id){
        $sql ="SELECT vp.* FROM `vprice` as vp join tbl_product as p on vp.product_id=p.product_id WHERE p.manufacturer_id='$manufacturer_id' and vp.sub_category_id='$sub_category_id'";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function get_product_by_manufacturer_and_category_id($manufacturer_id,$category_id){
        $sql ="SELECT vp.* FROM `vprice` as vp join tbl_product as p on vp.product_id=p.product_id WHERE p.manufacturer_id='$manufacturer_id' and vp.category_id='$category_id'";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function get_product_by_size_and_main_category_id($size_name,$main_category_id){
        $sql ="select p.* from tbl_product_size as s join vprice as p on s.product_id=p.product_id where p.main_category_id='$main_category_id' and s.size_name='$size_name'";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function get_product_by_size_and_sub_category_id($size_name,$sub_category_id){
        $sql ="select p.* from tbl_product_size as s join vprice as p on s.product_id=p.product_id where p.sub_category_id='$sub_category_id' and s.size_name='$size_name'";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function get_product_by_size_and_category_id($size_name,$category_id){
        $sql ="select p.* from tbl_product_size as s join vprice as p on s.product_id=p.product_id where p.category_id='$category_id' and s.size_name='$size_name'";
        $query_result = $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function get_product_image_by_product_id($product_id){
        $this->db->select('image_path');
        $this->db->where('product_id',$product_id);
        $this->db->from('tbl_image');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_product_size_name_by_product_id($product_id){
        $this->db->select('size_id');
        $this->db->select('size_name');
        $this->db->where('product_id',$product_id);
        $this->db->from('tbl_product_size');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_product_general_info_by_product_id($product_id){
        $this->db->select('*');
        $this->db->where('product_id',$product_id);
        $this->db->from('vprice');
        $query = $this->db->get();
        $result=$query->row();
        return $result;
    }
    public function get_main_category_name_and_id($main_category_id){
        $this->db->select('main_category_id');
        $this->db->select('main_category_name');
        $this->db->where('main_category_id',$main_category_id);
        $this->db->from('tbl_main_category');
        $query = $this->db->get();
        $result=$query->row();
        return $result;
    }
    public function get_all_main_category_name_and_id(){
        $this->db->select('main_category_id');
        $this->db->select('main_category_name');
        $this->db->where('main_category_status',1);
        $this->db->from('tbl_main_category');
        $query = $this->db->get();
        $result=$query->result();
        return $result;
    }
    public function get_product_by_name($product_name){
        if($product_name==NULL)
        {
            $sql = "SELECT * FROM vprice";
        }
        else{
        $sql = "SELECT * FROM vprice WHERE product_name LIKE '%$product_name%'";
        }
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    public function get_product_by_name_count($product_name){
        if($product_name==NULL)
        {
            $sql = "SELECT count(product_id) as counter FROM vprice";
        }
        else{
        $sql = "SELECT count(product_id) as counter FROM vprice WHERE product_name LIKE '%$product_name%'";
        }
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->counter;
    }
    public function get_product_by_name_and_main_category($main_category_id, $product_name){
        if($product_name==NULL)
        {
            $sql = "SELECT * FROM vprice";
        }
        else{
        $sql = "SELECT * FROM vprice WHERE main_category_id = '$main_category_id' and product_name LIKE '%$product_name%'";
        }
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    public function get_product_by_name_and_main_category_count($main_category_id, $product_name){
        if($product_name==NULL)
        {
            $sql = "SELECT count(product_id) as counter FROM vprice";
        }
        else{
        $sql = "SELECT count(product_id) as counter FROM vprice WHERE main_category_id = '$main_category_id' and product_name LIKE '%$product_name%'";
        }
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->counter;
    }
    public function check_size($product_id) {
        $sql = "SELECT count(product_id) as check_size FROM `tbl_product_size` WHERE product_id = '$product_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->check_size;
    }
    public function get_all_discount_product(){
        $this->db->select('*');
        $this->db->where('discount !=','NULL');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_discount_product_counter(){
        $sql = "SELECT count(product_id) as counter FROM vprice WHERE discount IS NOT NULL";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result->counter;
    }
    public function get_all_products(){
        $this->db->select('*');
        $this->db->from('vprice');
        $query = $this->db->get();
        return $query->result();
    }
    
}
