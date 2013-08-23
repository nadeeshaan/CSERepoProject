<?php

session_start();

class Home extends CI_Controller {

    function Home() {
        parent::__construct();
    }

    function load_home_view() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['index'] = $session_data['index'];

            $this->load->view("home_view");
        } 
        else {
            redirect('login/load_login_view','refresh');
        }
//        $this->load->helper('url');
    }
    
    function logout(){
        
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home','refresh');
    }

}

?>
