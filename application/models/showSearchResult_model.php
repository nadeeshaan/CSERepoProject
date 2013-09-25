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

    function getRecieverEmail($docid) {
        $this->load->database();
        $query = $this->db->query("SELECT profile.username,profile.email FROM profile,document WHERE profile.username=document.username AND document.docid='$docid'");
        return $query->row();
    }

    function addComment($comment){
        $this->load->database();
        $this->db->insert('comment', $comment);
    }
}

?>
