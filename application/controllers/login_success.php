<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    class Login_Success extends CI_Controller{
        public function __construct() {
            parent::__construct();
        }
        
        function index(){
            $this->load->view('loginSuccess_view');
        }
    }
?>
