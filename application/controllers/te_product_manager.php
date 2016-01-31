<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of te_product_manager
 *
 * @author MASUD RANA
 */
class Te_Product_Manager extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $management_id = $this->session->userdata('management_id');
        $management_role = $this->session->userdata('management_role');
        if ($management_id == NULL || $management_role != 'product_manager') {
            redirect('te_somoyerdeal', 'refresh');
        }
    }

    public function index() {

        $this->load->view('admin/admin_master');
    }

    public function logout() {
        $this->session->unset_userdata('management_id');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('management_role');
        $sdata = array();
        $sdata['exception'] = 'You Are Successfully Logout ! ';
        $this->session->set_userdata($sdata);
        redirect('UserLogin/index');       
    }

}
