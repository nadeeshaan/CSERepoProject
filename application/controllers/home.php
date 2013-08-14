<?php

    class Home extends CI_Controller{
        
        function Home(){
            parent::__construct();
        }
        
        function load_home_view(){
            $this->load->helper('url');
            $this->load->view("home_view");
        }
        
    }
?>
