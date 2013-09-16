<?php

/*This code snippet responsible for login related Works
 */

class Login extends CI_Controller {

    function Login() {
        parent::__construct();
    }

    //Index file which calls default
    function index($msg=NULL) {
        $this->load->helper('url');
        //message which contains error has occured
        $data['msg']=$msg;
        $this->load->view('login_view',$data);
    }
    
    //Function which submits the user data to the server
    function formSubmit(){
        $this->load->library('session');
        $this->load->model('login_model');
        
        //retrive the validation results from the server via 
        //model's validate user function
        $validateRslt=  $this->login_model->validateUser();
        
        if(!$validateRslt){
            //if the user is valid then error message is set and sent to the index
            $msg='<font color=red>Invalid username or password</font><br />';
            $this->index($msg);
        }
        else{
            //If the user is validated successfully user is redirected to the home page
            $this->load->helper('url');
            redirect('home/load_home_view');
        }
    }
}

?>
