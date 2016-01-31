<?php

class Admin_Model extends CI_Model{
    public function check_login_info($email,$password){
        $encript = md5($password);
        $this->db->select('*');
        $this->db->where('management_email',$email);
        $this->db->where('management_password',$encript);
        $this->db->where('management_status',1);
        $this->db->from('tbl_management');
        $result = $this->db->get();
        return $result->row();
    }
}


