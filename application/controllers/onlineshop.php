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
class onlineshop extends CI_Controller{
    //put your code here
    public function index()
    {
        $data=array();
        $data['user_main']=$this->load->view('user_main_deshboard','',true);
        $this->load->view('main',$data);
    }
    public function user_login(){
        $data=array();
        $data['user_main']=$this->load->view('user_login','',true);
        $this->load->view('main',$data);
    }
    public function user_checkout(){
        $data=array();
        $data['user_main']=$this->load->view('user_checkout','',true);
        $this->load->view('main',$data);   
    }
    public function user_wishlist(){
        $data=array();
        $data['user_main']=$this->load->view('user_wishlist','',true);
        $this->load->view('main',$data);
    }
    public function user_account(){
        $data=array();
        $data['user_main']=$this->load->view('user_account','',true);
        $this->load->view('main',$data);
    }
    
}
