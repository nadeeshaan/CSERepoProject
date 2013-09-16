<?php

class Signup extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->helper(array('form', 'url'));
        $this->load->view('signup_view');
    }

    function insertData() {
        $this->load->model('signup_model');

        $dirPath = 'C:\wamp\www\uploads\\';  //set the base directory
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $aboutme = $this->input->post('aboutme');
        $genderSelect = $this->input->post('gender');
        $dob = $this->input->post('birthdaty');

        //get the selected gender value
        if ($genderSelect == 'Male') {
            $gender = TRUE;
        } elseif ($genderSelect == 'Female') {
            $gender = FALSE;
        }

        //set the user's directory
        $dirPath = $dirPath . $username . '\profilePics';
        $pictureP = $dirPath . '\\' . ( $_FILES['picture']['name']);

        //set the configuration for the uploading file
        $config['upload_path'] = $dirPath;
        $config['allowed_types'] = 'png|jpg';
        $config['max_size'] = '1024';

        //loads the upload library
        $this->load->library('upload', $config);

        //check for the image directory
        if (!file_exists($dirPath)) {
            mkdir($dirPath, 0777, true);
        }

        //set user data array
        $data1 = array(
            'username' => $username,
            'password' => $password
        );

        //set profile data array
        $data2 = array(
            'username' => $username,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'dob' => $dob,
            'gender' => $gender,
            'email' => $email,
            'mobile' => $mobile,
            'aboutme' => $aboutme,
            'picture' => $pictureP
        );

        //uploads the user profile picture to the server
        $this->upload->do_upload('picture');
        $this->signup_model->updateUser($data1, $data2);
        redirect('home/load_home_view');
    }

    //check the confirmation password is valid
    function confirm_pword($cnfrm, $pword) {
        if (!($cnfrm == $pword)) {
            $this->form_validation->set_message('confirm_pword', 'Password confirmation does not Match');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    //check the validity of the gender
    function gender_check($selected) {
        if ($selected === '0') {
            $this->form_validation->set_message('gender_check', 'Select Gender');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    //check the validity of the entered date
    function dob_check($month) {
        if ($month === '') {
            $this->form_validation->set_message('dob_check', 'Invalid Date');
            return FALSE;
        } else {
            return TRUE;
        }
    }

}

?>
