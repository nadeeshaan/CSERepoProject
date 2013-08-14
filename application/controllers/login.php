<?php

    class Login extends CI_Controller {

        function Login() {
            parent::__construct();
        }

        function load_login_view() {
            $this->load->helper('url');
            $this->load->view("login_view");
        }

    }
?>
