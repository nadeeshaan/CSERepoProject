<?php

/*
 * This model is related to the sharing document Functionality
 */

class ShareDocs_Model extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function shareDocument($data) {
        $this->db->insert('user_document', $data);
    }

    function getProjects() {
        $this->load->database();
        $currentUser = $this->session->userdata('indexNum');

        $query = $this->db->query("SELECT projid,projname FROM project WHERE username='$currentUser'");
        return $query->result();
    }

    function getDocs($project) {
        $this->load->database();
        $currentUser = $this->session->userdata('indexNum');
        $query = $this->db->query("SELECT docid,filename FROM document WHERE username ='$currentUser' AND projid='$project'");
        return $query->result();
    }
    
    function getUsers(){
        $this->load->database();
        $currentUser = $this->session->userdata('indexNum');
        $query=  $this->db->query("SELECT username,firstname,lastname FROM profile WHERE username <>'$currentUser'");
        return $query->result();
    }
    
    function shareDoc($data){
        $this->db->insert('user_document',$data);
    }
    
    function getShareDocs() {
        $this->load->database();
        $currentUser = $this->session->userdata('indexNum');
        $query = $this->db->query("SELECT user_document.docid AS docid,user_document.notified AS notif,document.filename AS fname,document.username AS username,document.description AS des FROM user_document,document WHERE user_document.docid=document.docid AND user_document.username='$currentUser' AND user_document.notified=1");

        return $query->result();
    }

}

?>
