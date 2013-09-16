<?php

class Upload_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    var $lastId;

    //get the projects from the database
    function getProjects() {
        $this->load->database();
        $currentUser = $this->session->userdata('indexNum');
        $query = $this->db->query("SELECT projid,projname FROM project WHERE username='$currentUser'");
        return $query->result();
    }

    //add new entry for the new project
    function addNewProject($data) {
        $this->db->insert('project', $data);
        $lastId = $this->db->insert_id();
        return $lastId;
    }

//    add new entry for the new document
    function addNewDocument($data) {
        $this->db->insert('document', $data);
    }

}

?>
