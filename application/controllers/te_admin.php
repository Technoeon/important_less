<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of te_admin
 *
 * @author MASUD RANA
 */
class Te_Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();

        
    }
    public function index()
    {
        
        $this->load->view('admin/login');
    }
    public function check_login()
    {
        
        $this->load->view('admin/admin_master');
    }
    
}