<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class MyProfile_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function getProfileData() {
        $this->load->database();
        $currentUser = $this->session->userdata('indexNum');
        $query = $this->db->query("SELECT username,firstname,lastname,email,mobile,aboutme,dob FROM profile WHERE username='$currentUser'");

        if ($query->num_rows() === 1) {
            $row = $query->row();
            $data = array(
                'username' => $row->username,
                'firstname' => $row->firstname,
                'lastname' => $row->lastname,
                'email' => $row->email,
                'mobile' => $row->mobile,
                'aboutme' => $row->aboutme,
                'dob' => $row->dob
            );
            return $data;
        } else {
            NULL;
        }
    }

    function updateData($info) {
        $this->load->database();
        $currentUser = $this->session->userdata('indexNum');
        
        $this->db->where('username',$currentUser);
        $this->db->update('profile',$info);
    }

}

?>
