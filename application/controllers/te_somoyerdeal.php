<?php
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of te_somoyerdeal
 *
 * @author MASUD RANA
 */
class Te_Somoyerdeal extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $management_id = $this->session->userdata('management_id');
        $management_role = $this->session->userdata('management_role');
        if ($management_id != NULL && $management_role != NULL) {
            if ($management_role == 'admin') {
                redirect('te_admin', 'refresh');
            } elseif ($management_role == 'product_manager') {
                redirect('te_product_manager', 'refresh');
            } elseif ($management_role == 'order_manager') {
                redirect('te_order_manager', 'refresh');
            }else {
                echo 'hi';
            }
        }
    }
    public function index() {

        $this->load->view('admin/login');
    }
    public function check_login_authentication(){
        $email = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);
        $result = $this->admin_model->check_login_info($email, $password);
        $sdata = array();
        if ($result->management_role == 'admin') {
            $sdata['management_id'] = $result->management_id;
            $sdata['name'] = $result->management_first_name. ' ' .$result->management_last_name;
            $sdata['management_role'] = $result->management_role;
            $this->session->set_userdata($sdata);
            redirect('te_admin/index');
        } elseif ($result->management_role == 'product_manager') {
            $sdata['management_id'] = $result->management_id;
            $sdata['name'] = $result->management_first_name. ' ' .$result->management_last_name;
            $sdata['management_role'] = $result->management_role;
            $this->session->set_userdata($sdata);
            redirect('te_product_manager/index');
        } elseif ($result->management_role == 'order_manager') {
            $sdata['management_id'] = $result->management_id;
            $sdata['name'] = $result->management_first_name. ' ' .$result->management_last_name;
            $sdata['management_role'] = $result->management_role;
            $this->session->set_userdata($sdata);
            redirect('te_order_manager/index');
        }else {
            $sdata['exception']='User Email And Password is Invalide !';
            $this->session->set_userdata($sdata);
            redirect('te_somoyerdeal/index');
        }        
    }
    
   
        
}
