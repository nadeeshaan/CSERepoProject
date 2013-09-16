<?php

session_start();

class Home extends CI_Controller {

    function Home() {
        parent::__construct();
    }

    function load_home_view() {
        $this->load->helper("url");
        $this->load->model('sharedWithMe_model');
        
        $data['shared'] = $this->sharedWithMe_model->getShareDocs();
        
        $this->load->view("home_view",$data);
    }

    function logout() {
        //when the logout button clicked this function is called and the user session data
        //is removed
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }

}

?>
