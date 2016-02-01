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
        /* echo'<pre>';
          print_r($management_id.'---------'.$management_role);
          exit(); */
    }

    public function add_main_menu() {
        $data = array();
        $data['main_content'] = $this->load->view('admin/add_main_menu', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_sub_menu() {
        $data = array();
        $data['main_content'] = $this->load->view('admin/add_sub_menu', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }
     public function add_menu() {
        $data = array();
        $data['main_content'] = $this->load->view('admin/add_menu', '', TRUE);
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
