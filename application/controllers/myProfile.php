<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class MyProfile extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->helper('url');
        $this->load->model('sharedWithMe_model');
        $this->load->model('myProfile_model');

        $data['profileData'] = $this->myProfile_model->getProfileData();
        $data['shared'] = $this->sharedWithMe_model->getShareDocs();
        $this->load->view('myProfile_view', $data);
    }

    public function updateProfile() {
        $this->load->helper(array('form', 'url'));
        $this->load->model('myProfile_model');

        $updateInfo = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'aboutme' => $this->input->post('aboutme'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile')
        );
        
        $this->myProfile_model->updateData($updateInfo);
        redirect('home/load_home_view');
    }

}

?>
