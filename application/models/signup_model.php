<?php

class Signup_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    //insert data of the new users
    function updateUser($data1, $data2) {
            $this->db->insert('user', $data1);
            $this->db->insert('profile', $data2);
      
    }

}

?>
