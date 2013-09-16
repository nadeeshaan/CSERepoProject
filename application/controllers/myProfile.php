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
        
        $data['profileData']=  $this->myProfile_model->getProfileData();
        $data['shared'] = $this->sharedWithMe_model->getShareDocs();
        $this->load->view('myProfile_view',$data);
    }

}

?>
