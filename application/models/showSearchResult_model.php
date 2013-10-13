<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ShowSearchResult_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function getDocData($docid) {
        $this->load->database();
        $query = $this->db->query("SELECT document.filename,document.path,document.description,document.username,document.privilege AS dPrivi,profile.firstname,profile.lastname,project.projname FROM document,project,profile WHERE document.docid='$docid' AND document.projid=project.projid AND profile.username=document.username");
//            print_r($query->result());
        return $query->result();
    }
    
    function getProjData($projid) {
        $this->load->database();
        $query = $this->db->query("SELECT project.projname,project.projdescription,profile.firstname,profile.lastname,project.projname FROM project,profile WHERE project.projid='$projid' AND profile.username=project.username");
//            print_r($query->result());
        return $query->result();
    }
    
    function getAllDocs($projid){
        $this->load->database();
        $query = $this->db->query("SELECT DISTINCT document.docid,document.username,document.filename,document.path,document.description,document.privilege,project.projname,project.projid FROM document,project WHERE document.projid='$projid' AND project.projid='$projid'");
//            print_r($query->result());
        return $query->result();
    }

    function getRecieverEmail($docid) {
        $this->load->database();
        $query = $this->db->query("SELECT profile.firstname,profile.lastname,document.filename,profile.email FROM profile,document WHERE profile.username=document.username AND document.docid='$docid'");
        return $query->row();
    }

    function getRequester($usrname){
        $this->load->database();
        $query = $this->db->query("SELECT profile.firstname,profile.lastname FROM profile WHERE username='$usrname'");
        return $query->row();
    }
    function addComment($comment){
        $this->load->database();
        $this->db->insert('comment', $comment);
    }
}

?>
