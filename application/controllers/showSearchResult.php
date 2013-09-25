<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ShowSearchResult extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->helper('url');
        $this->load->view('showSearchResult_view');
    }

    public function getDocumentData() {
        $docid = $_GET['id'];
        $this->load->model('showSearchResult_model');
        $data['docData'] = $this->showSearchResult_model->getDocData($docid);
        $data['did'] = $docid;

        $this->load->view('showSearchResult_view', $data);
    }

    public function sendEmail() {

        $this->load->model('showSearchResult_model');
        $reciever = $this->showSearchResult_model->getRecieverEmail($_GET['id']);

        $currentUser = $this->session->userdata('indexNum');
        $owner = $reciever->username;

        if (!($this->input->post('docComment') == "")) {
            $message = $this->input->post('docComment');
            
            $commentData = array(
                'comment'=>$message,
                'docid'=>$_GET['id'],
                'username'=>$owner,
                'commenter'=>$currentUser
            );
            
            $this->showSearchResult_model->addComment($commentData);
        } 
        else if (!($this->input->post('requestEmail')) == "") {
            $message = $this->input->post('requestEmail');
            $message = $message . 'This message is for requesting the following document available for the user mentioned bellow';
        }

//        print_r($message);
        print_r($currentUser);
        print_r($owner);
//        print_r($reciever->email);
//        $config['protocol'] = "smtp";
//        $config['smtp_host'] = "ssl://smtp.googlemail.com";
//        $config['smtp_port'] = 465;
//        $config['smtp_user'] = "cserepo@gmail.com";
//        $config['smtp_pass'] = "cserepoadmin*";
//
//        $this->load->library('email');
//        $this->email->initialize($config);
//        $this->email->set_newline("\r\n");
//
//        $this->email->from('cserepo@gmail.com', 'CSE Repository Administrator');
//        $this->email->to($reciever->email);
//        $this->email->subject('temperary Email');
//        $this->email->message($message);
//
//        if ($this->email->send()) {
//            echo 'Your email was sent, dude.';
//        } else {
//            show_error($this->email->print_debugger());
//        }
    }

}

?>
