<?php

class DocComments_Model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    function getDocComments($docId){
        $this->load->database();
        
        $query=$this->db->query("SELECT comment,firstname,lastname,addeddate FROM comment,profile WHERE docid='$docId' AND comment.commenter=profile.username");
//        print_r($docId);
        return $query->result();
    }
}
?>
