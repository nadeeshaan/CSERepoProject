<?php

class Login_Model extends CI_Model {

    function login($usrName, $pword) {
        $this->db->select('username,password');
        $this->db->from('user');
        $this->db->where('username', $usrName);
        $this->db->where('password', $pword);
        $this->db->limit(1);

        $authQuery = $this->db->get();

        if ($authQuery->num_rows() == 1) {
            return $authQuery->result();
        }
        else{
            return FALSE;
        }
    }
}

?>
