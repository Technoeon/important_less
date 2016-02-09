<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of onlineshop
 *
 * @author Rubel
 */

class onlineshop extends CI_Controller {        
    public function __construct() {
        parent::__construct();
    }
    //put your code here
    public function index() {
        $data = array();
        $data['nav_menu'] = $this->load->view('nav_menu','', true);
        $data['user_main'] = $this->load->view('user_main_deshboard', $data, true);
        $this->load->view('main', $data);
    }

    public function user_login() {
        $data = array();
        $data['user_main'] = $this->load->view('user_login', '', true);
        $this->load->view('main', $data);
    }

    public function user_checkout() {
        $data = array();
        $data['user_main'] = $this->load->view('user_checkout', '', true);
        $this->load->view('main', $data);
    }

    public function user_wishlist() {
        $data = array();
        $data['user_main'] = $this->load->view('user_wishlist', '', true);
        $this->load->view('main', $data);
    }

    public function user_account() {
        $data = array();
        $data['user_main'] = $this->load->view('user_account', '', true);
        $this->load->view('main', $data);
    }

    public function main_menu($position) {
        $data = array();
        $main_menu = $this->onlineshop_model->get_main_menu_by_position($position);
        foreach ($main_menu as $value) {
            $data['main_menu_id'] = $value->id;
            $data['main_menu_name'] = $value->main_menu_name;
        }
        //$data['menu']= $main_menu;
        return $data;
    }



    public function test($position) {
        $data = array();
        $data['main_menu'] = $this->onlineshop_model->get_main_menu_by_position($position);
        $data['sub_menu'] = $this->onlineshop_model->get_sub_menu_by_position($position);
        $data['menu'] = $this->onlineshop_model->get_menu_by_position($position);
//        echo '<pre>';
//        print_r($data);
//        exit();
        $this->load->view('test', $data);
    }

}
