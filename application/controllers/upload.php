<?php

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $cntr = 0;
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('upload_model');
        $data['projects'] = $this->upload_model->getProjects();
        $this->load->view('upload_view', $data);
    }
    
    function empty_discription(){
         $this->form_validation->set_message('empty_discription', 'Invalid Date');
         return FALSE;
    }

}

?>
