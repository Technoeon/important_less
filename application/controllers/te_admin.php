<?php

session_start();

class Te_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $management_id = $this->session->userdata('management_id');
        $management_role = $this->session->userdata('management_role');
        if ($management_id == NULL || $management_role != 'admin') {
            redirect('te_somoyerdeal', 'refresh');
        }
    }

    public function index() {

        $this->load->view('admin/admin_master');
    }

    //add_main_menu//
    public function add_main_menu() {
        $data = array();
        $data['main_content'] = $this->load->view('admin/add_main_menu', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    //save_main_category//
    public function save_main_category() {
        $data = array();
        $data['main_category_name'] = $this->input->post('main_category_name', true);
        $data['main_category_position'] = $this->input->post('main_category_position', true);
        $data['main_category_status'] = $this->input->post('main_category_status', true);
        $this->admin_model->save_main_category_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Category Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('te_admin/add_main_menu');
    }

    //add_sub_menu//
    public function add_sub_menu() {
        $data = array();
        $data['main_category'] = $this->admin_model->get_main_category_id_and_name();
        $data['main_content'] = $this->load->view('admin/add_sub_menu', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    //save_sub_category//
    public function save_sub_category() {
        $data = array();
        $data['sub_category_name'] = $this->input->post('sub_category_name', true);
        $data['main_category_id'] = $this->input->post('main_category_id', true);
        $data['sub_category_status'] = $this->input->post('sub_category_status', true);
        $this->admin_model->save_sub_category_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Sub Menu info Successfully !';
        $this->session->set_userdata($sdata);
        redirect('te_admin/add_sub_menu');
    }

    //add menu//
    public function add_menu() {
        $main_category = $this->admin_model->get_main_category_id();
        $manu_category = $this->admin_model->get_sub_category_id_and_name();
        $data = array();
        $data['main_category'] = json_encode($main_category);
        $data['manu_category'] = json_encode($manu_category);
        $data['main_content'] = $this->load->view('admin/add_menu', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    //save sub menu//
    public function save_menu() {
        $data = array();
        $sdata = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $sub_category_id = $this->input->post('sub_category_id', true);
        $data['category_status'] = $this->input->post('category_status', true);
        if ($sub_category_id == 'Select your Sub menu') {
            $sdata['required_msg'] = '* select a sub menu.';
            $this->session->set_userdata($sdata);
            redirect('te_admin/add_menu');
        } else {
            $data['sub_category_id'] = $sub_category_id;
            $this->admin_model->save_category_info($data);
            $sdata['message'] = 'Save Menu info Successfully !';
            $this->session->set_userdata($sdata);
            redirect('te_admin/add_menu');
        }
    }

    //End all type of saving menu//
    //Manage Menu Grid Start//

    public function manage_menu_grid() {
        $data = array();
        $data['main_content'] = $this->load->view('admin/manage_menu_grid', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function logout() {
        $this->session->unset_userdata('management_id');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('management_role');
        $sdata = array();
        $sdata['exception'] = 'You Are Successfully Logout ! ';
        $this->session->set_userdata($sdata);
        redirect('te_somoyerdeal/index');
    }

}
