<?php


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