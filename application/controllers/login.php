<?php

class Login extends CI_Controller {

    function Login() {
        parent::__construct();
    }

    function index($msg=NULL) {
        $this->load->helper('url');
        $data['msg']=$msg;
        $this->load->view('login_view',$data);
    }
    
    function formSubmit(){
        $this->load->library('session');
        $this->load->model('login_model');
        
        $validateRslt=  $this->login_model->validateUser();
        
        if(!$validateRslt){
            $msg='<font color=red>Invalid username or password</font><br />';
            $this->index($msg);
        }
        else{
            $this->load->helper('url');
            redirect('home/load_home_view');
        }
    }
}

?>
