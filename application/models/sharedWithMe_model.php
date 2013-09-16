<?php

/*
 * This model retrives the data from the user_document table
 * 
 */

class SharedWithMe_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function getShareDocs() {
        $this->load->database();
        $currentUser = $this->session->userdata('indexNum');
        $query = $this->db->query("SELECT user_document.docid AS docid,user_document.notified AS notif,document.filename AS fname,document.username AS username,document.description AS des FROM user_document,document WHERE user_document.docid=document.docid AND user_document.username='$currentUser' AND user_document.notified=1");

        return $query->result();
    }

    function getNotiDocIds() {
        $currentUser = $this->session->userdata('indexNum');
        $query = $this->db->query("SELECT user_document.docid AS docid FROM user_document WHERE user_document.username='$currentUser' AND user_document.notified=1");

        return $query->result_array();
    }

    function updateTable() {
        $this->load->database();
        $shr = $this->getNotiDocIds();
        $myDataArr = array();
        if (is_array($shr)) {
            foreach ($shr as $shr) {
                $myDataArr[] = array(
                    'docid' => $shr['docid'],
                    'notified' => 0,
                );
            }
        }
        $this->db->update_batch('user_document', $myDataArr, 'docid');
    }

}

?>
