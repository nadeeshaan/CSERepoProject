<?php

class Signup extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('username', 'Index Number', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmPword', 'Confirm Password', 'callback_confirm_pword[' . $this->input->post('password') . ']');
        $this->form_validation->set_rules('gender', 'Gender', 'callback_gender_check');
        $this->form_validation->set_rules('month', 'Date', 'callback_dob_check');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup_view');
        } else {
            $this->insertData();
            redirect('home/load_home_view');
        }
    }

    function insertData() {

        $dirPath = 'E:\\';  //set the base directory
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $aboutme = $this->input->post('aboutme');
        $genderSelect = $this->input->post('gender');
        $monthSelect = $this->input->post('month');

        //get the selected gender value
        if ($genderSelect == 'Male') {
            $gender = TRUE;
        } elseif ($genderSelect == 'Female') {
            $gender = FALSE;
        }

        //year generate
        $dob = $this->input->post('year') . '-' . $monthSelect . '-' . $this->input->post('date');

        //set the user's directory
        $dirPath = $dirPath . $username . '\profilePics';
        $pictureP = $dirPath .'\\'. ( $_FILES['picture']['name']);

        $config['upload_path'] = $dirPath;
        $config['allowed_types'] = 'png|jpg';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config); //loads the upload library
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

        $this->load->model('signup_model');

        $this->upload->do_upload('picture');
        $this->signup_model->updateUser($data1, $data2);
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
        if ($month === '0' || $this->input->post('year') === '' || $this->input->post('date') === '') {
            $this->form_validation->set_message('dob_check', 'Invalid Date');
            return FALSE;
        } else {
            return TRUE;
        }
    }

}

?>
