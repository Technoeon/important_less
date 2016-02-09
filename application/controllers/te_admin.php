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
        $data = array();
        $data['title'] = 'Home';
        $this->load->view('admin/admin_master', $data);
    }

    //---------start addn menu and save menu----//
    public function add_main_menu() {
        $data = array();
        $data['title'] = 'Add main menu';
        $data['main_content'] = $this->load->view('admin/add_main_menu', '', true);
        $this->load->view('admin/admin_master', $data);
    }
    public function save_main_category() {
        $data = array();
        $data['main_category_name'] = $this->input->post('main_category_name', true);
        $data['main_category_position'] = $this->input->post('main_category_position', true);
        $data['main_category_status'] = $this->input->post('main_category_status', true);
        $check = $this->admin_model->check_position($data['main_category_position']);
        if ($check == 1) {
            $this->admin_model->update_main_category_position($data['main_category_position']);
            $this->admin_model->save_main_category_info($data);
        } else {
            $this->admin_model->save_main_category_info($data);
        }
        $sdata = array();
        $sdata['message'] = 'Save Category Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('te_admin/add_main_menu');
    }
     //---------End addn menu and save menu----//
    //-------Start add_sub_menu and Save--------//
    public function add_sub_menu() {
        $data = array();
        $data['title'] = 'Add Sub Menu';
        $data['main_category'] = $this->admin_model->get_main_category_id_and_name();
        $data['main_content'] = $this->load->view('admin/add_sub_menu', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }
   
    public function save_sub_category() {
        $data = array();
        $data['sub_category_name'] = $this->input->post('sub_category_name', true);
        $main_category_id = $this->input->post('main_category_id', true);
        $data['sub_category_status'] = $this->input->post('sub_category_status', true);
        if ($main_category_id == 'Select your main menu') {
            $sdata['required_msg'] = '* select a main menu.';
            $this->session->set_userdata($sdata);
            redirect('te_admin/add_sub_menu');
        } else {
            $data['main_category_id'] = $main_category_id;
            $this->admin_model->save_sub_category_info($data);
            $sdata = array();
            $sdata['message'] = 'Save Sub Menu info Successfully !';
            $this->session->set_userdata($sdata);
            redirect('te_admin/add_sub_menu');
        }
    }
    //-------End add_sub_menu and Save--------//
   
    //-------Start add_menu and Save--------//
    public function add_menu() {
        $main_category = $this->admin_model->get_main_category_id();
        $manu_category = $this->admin_model->get_sub_category_id_and_name();
        $data = array();
        $data['title'] = 'Add Menu';
        $data['main_category'] = json_encode($main_category);
        $data['manu_category'] = json_encode($manu_category);
        $data['main_content'] = $this->load->view('admin/add_menu', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    public function save_menu() {
        $data = array();
        $sdata = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $sub_category_id = $this->input->post('sub_category_id', true);
        $data['category_status'] = $this->input->post('category_status', true);
        if ($sub_category_id == 'Select your Sub menu') {
            $sdata['category_name'] = $data['category_name'];
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
    //-------Start add_menu and Save--------//
    
    //------Start Main Menu Manage Grid------------//
    public function manage_main_menu() {
        $data = array();
        $data['main_menu'] = $this->admin_model->get_main_category();
        $data['title'] = 'Manage Menu';
        $data['main_content'] = $this->load->view('admin/manage_main_menu_grid', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    public function unpublished_main_menu($main_category_id) {
        $this->admin_model->unpublished_main_menu_category($main_category_id);
        redirect('te_admin/manage_main_menu');
    }
    public function published_main_menu($main_category_id) {
        $this->admin_model->published_main_menu_category($main_category_id);
        redirect('te_admin/manage_main_menu');
    }
    public function edit_main_menu($main_category_id) {
        $data = array();
        $data['main_menu_info'] = $this->admin_model->get_main_menu_info($main_category_id);
        $data['title'] = 'Edit Menu';
        $data['main_content'] = $this->load->view('admin/edit_main_menu_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    public function update_main_menu() {
        $data = array();
        $data['main_category_name'] = $this->input->post('main_category_name', true);
        $data['main_category_position'] = $this->input->post('main_category_position', true);
        //$data['main_category_status'] = $this->input->post('main_category_status', true);
        $main_category_id = $this->input->post('main_category_id', true);
        $check = $this->admin_model->check_position($data['main_category_position']);
        if ($check == 1) {
            $this->admin_model->update_main_category_position($data['main_category_position']);
            $this->admin_model->update_main_menu_info($data, $main_category_id);
        } else {
            $this->admin_model->update_main_menu_info($data, $main_category_id);
        }
        $sdata = array();
        $sdata['message'] = 'Update Main Menu Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('te_admin/edit_main_menu/' . $main_category_id);
    }
   //------Start Main Menu Manage Grid------------//
   
   //------Start sub_menu manage _grid//
    public function manage_sub_menu() {
        $data = array();
        $data['sub_menu'] = $this->admin_model->get_sub_menu_info();
        $data['title'] = 'Manage Sub Menu Grid';
        $data['main_content'] = $this->load->view('admin/manage_sub_menu_grid', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    public function unpublished_sub_menu($sub_category_id) {
        $this->admin_model->unpublished_sub_menu_category($sub_category_id);
        redirect('te_admin/manage_sub_menu');
    }
    public function published_sub_menu($sub_category_id) {
        $this->admin_model->published_sub_menu_category($sub_category_id);
        redirect('te_admin/manage_sub_menu');
    }
     public function edit_sub_menu($sub_category_id) {
        $data = array();
        $data['sub_category_id']=$sub_category_id;
        $data['sub_menu_name'] = $this->admin_model->get_sub_menu_name($sub_category_id);
        $data['title'] = 'Edit Menu';
        $data['main_content'] = $this->load->view('admin/edit_sub_menu_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    public function update_sub_menu() {
        $sub_category_name=$this->input->post('sub_category_name', true);
        $sub_category_id = $this->input->post('sub_category_id', true);
        $this->admin_model->update_sub_menu_info($sub_category_name,$sub_category_id);
        $sdata = array();
        $sdata['message'] = 'Update Sub Menu Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('te_admin/edit_sub_menu/' . $sub_category_id);
    }
    //------End sub_menu manage _grid//
   
    //------Start menu manage _grid//
   public function manage_menu() {
        $data = array();
        $data['menu']=$this->admin_model->get_category_info();
        $data['title'] = 'Manage Menu';
        $data['main_content'] = $this->load->view('admin/manage_menu_grid', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    public function unpublished_menu($category_id) {
        $this->admin_model->unpublished_category($category_id);
        redirect('te_admin/manage_menu');
    }
    public function published_menu($category_id) {
        $this->admin_model->published_category($category_id);
        redirect('te_admin/manage_menu');
    }
     public function edit_menu($category_id) {
        $data = array();
        $data['category_id']=$category_id;
        $data['category_name'] = $this->admin_model->get_category_name($category_id);
        $data['title'] = 'Edit Menu';
        $data['main_content'] = $this->load->view('admin/edit_menu_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    public function update_menu() {
        $category_name=$this->input->post('category_name', true);
        $category_id = $this->input->post('category_id', true);
        $this->admin_model->update_category_name($category_name,$category_id);
        $sdata = array();
        $sdata['message'] = 'Update Sub Menu Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('te_admin/edit_menu/' . $category_id);
    }
     //------Start menu manage _grid//
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
