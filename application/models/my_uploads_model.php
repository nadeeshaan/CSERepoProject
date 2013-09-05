<?php

/*
 * Access the database and retrive data
 * for the use of controller and the view
 */

    class My_Uploads_Model extends CI_Model{
        public function __construct() {
            parent::__construct();
        }
        
        function getProjects(){
            $currentUser = $this->session->userdata('indexNum');
            $query=  $this->db->query("SELECT projname,projdescription,startdate,projid FROM project WHERE username='$currentUser'");
            return $query->result();
        }
        
        function getDocuments(){
            $currentUser = $this->session->userdata('indexNum');
            $query=  $this->db->query("SELECT filename,path,description,privilege,projid,username FROM document WHERE username='$currentUser'");
            return $query->result();
        }
    }
?>
