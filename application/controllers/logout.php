<?php

/*
 * user logout is handled here
 */
    class Logout extends CI_Controller{
        
        function __construct() {
            parent::__construct();
        }
        
        function index(){
            $this->load->helper('url');
            $this->load->library('session');
            $this->session->sess_destroy();
            redirect('login');
        }
        
    }

?>
