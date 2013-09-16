<?php

class Login_Model extends CI_Model {

    function validateUser() {
        $indexNumber = $this->input->post('index');
        $password = $this->input->post('pword');

        $this->db->where('username', $indexNumber);
        $this->db->where('password', $password);

        $query = $this->db->get('user');
        
        //retrive the data of the user who tries to login to the system
        if ($query->num_rows() == 1) {
            $row = $query->row();
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
    }

}

?>
