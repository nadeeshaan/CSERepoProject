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
        $query = "SELECT filename,docid FROM document WHERE MATCH (docname,description) AGAINST ('";

//        print_r($wrd1);print_r($wrd2);print_r($wrd3);print_r($wrd4);
        
        if ($wrd1 !== NULL) {
            for ($i = 0; $i < count($wrd1); $i++) {
                $query = $query . "\"" . $wrd1[$i] . "\" ";
            }
        }

        if ($wrd2 !== NULL) {
            for ($i = 0; $i < count($wrd2); $i++) {
                $query = $query . "\"" . $wrd2[$i] . "\" ";
            }
        }
        
        if ($wrd3 !== NULL) {
            for ($i = 0; $i < count($wrd3); $i++) {
                $query = $query . "\"" . $wrd3[$i] . "\" ";
            }
        }
        
        if ($wrd4 !== NULL) {
            for ($i = 0; $i < count($wrd4); $i++) {
                $query = $query . "\"" . $wrd4[$i] . "\" ";
            }
        }

        $query = $query . "' IN BOOLEAN MODE)";
        $myQuery = $this->db->query($query);
        return $myQuery->result();
    }

    function getProjects($wrd1, $wrd2, $wrd3, $wrd4) {
        $this->load->database();
        $query = "SELECT projname,projid FROM project WHERE MATCH (projname,projdescription) AGAINST ('";

        if ($wrd1 !== NULL) {
            for ($i = 0; $i < count($wrd1); $i++) {
                $query = $query . "\"" . $wrd1[$i] . "\" ";
            }
        }
        
        if ($wrd2 !== NULL) {
            for ($i = 0; $i < count($wrd2); $i++) {
                $query = $query . "\"" . $wrd2[$i] . "\" ";
            }
        }

        if ($wrd3 !== NULL) {
            for ($i = 0; $i < count($wrd3); $i++) {
                $query = $query . "\"" . $wrd3[$i] . "\" ";
            }
        }
        
        if ($wrd4 !== NULL) {
            for ($i = 0; $i < count($wrd4); $i++) {
                $query = $query . "\"" . $wrd4[$i] . "\" ";
            }
        }

        $query = $query . "' IN BOOLEAN MODE)";
        $myQuery = $this->db->query($query);
        return $myQuery->result();
    }

}

?>
