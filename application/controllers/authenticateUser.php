<?php

class AuthenticateUser extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('login_model', '', TRUE);
    }

    function index() {
        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('index', 'Index', 'trim|required|xss_clean');
        $this->form_validation->set_rules('pword', 'Password', 'trim|required|xss_clean|callback_check_database');

        if ($this->form_validation->run() === FALSE) {
            //Field validation failed.  User redirected to login page
            $this->load->view('login_view');
        } else {
            //Go to private area
            redirect('home/load_home_view', 'refresh');
        }
    }

    function checkDb($password) {
        $index = $this->input->post('index');

        $dbResult = $this->login_model->login($index, $password);

        if ($dbResult) {
            $sessionArray = array();
            foreach ($dbResult as $row) {
                $sessionArray = array(
                    'index' => $row->username
                );
                $this->session->set_userdata('logged_in', $sessionArray);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('chckDb', 'Invalid username or Password');
            return FALSE;
        }
    }

}

?>
