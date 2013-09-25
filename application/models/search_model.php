<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Search_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function getDocuments($wrd1, $wrd2, $wrd3, $wrd4) {
        $this->load->database();
        $query = "SELECT filename,docid FROM document WHERE MATCH (filename,description) AGAINST ('";

        for ($i = 0; $i < count($wrd1); $i++) {
            $query = $query ."\"". $wrd1[$i] ."\" ";
        }
        
        

        $query = $query . "' IN BOOLEAN MODE)";
        $myQuery = $this->db->query($query);
        return $myQuery->result();
    }

}

?>
