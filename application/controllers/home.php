<?php

session_start();

class Home extends CI_Controller {

    function Home() {
        parent::__construct();
    }

    function load_home_view() {
        $this->load->helper("url");
        $this->load->view("home_view");
    }

    function logout() {

        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }

}

?>
