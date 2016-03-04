<?php

class Mailer_Model extends CI_Model {

    function send_email($data, $templateName) {
        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($data['from_address'], $data['admin_full_name']);
        $this->email->to($data['customer_email']);
        //$this->email->bcc('topu_18_26@yahoo.com'); 
        $this->email->subject($data['subject']);
        $body = $this->load->view('mailscripts/' . $templateName, $data, true);
        echo $body;exit;
        $this->email->message($body);
        // $this->email->send();
        $this->email->clear();
    }
}

?>
