<?php

class Login_Model extends CI_Model {

    function validateUser() {
        $this->load->library('encrypt');
        $indexNumber = $this->input->post('index');
        $password = $this->input->post('pword');
        echo $password;

        $this->db->where('username', $indexNumber);
//        $this->db->where('password', $password);

        $query = $this->db->get('user');

        //retrive the data of the user who tries to login to the system
        if ($query->num_rows() == 1) {
            $row = $query->row();
            echo $this->encrypt->decode($row->password);
            if ($this->encrypt->decode($row->password) == $password) {
                $data = array(
                    'indexNum' => $row->username,
                    'validate' => TRUE
                );
                //set the session for the loged in user
                $this->session->set_userdata($data);
                return TRUE;
            } else {
                $data = array(
                    'validate' => FALSE
                );
                $this->session->set_userdata($data);
                return FALSE;
            }
        } else {
            $data = array(
                'validate' => FALSE
            );
            $this->session->set_userdata($data);
            return FALSE;
        }
    }

}

?>
