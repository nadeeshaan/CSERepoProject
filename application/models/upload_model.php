<?php

class Upload_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function getProjects(){
        $this->load->database();
        $query=  $this->db->query('SELECT projid,projname FROM project');
        return $query->result();
    }
    
    function addNewProject($data){
        $this->db->insert('project', $data);
    }
    
    function addNewDocument($data){
        $this->db->insert('document', $data);
    }
   

}

?>
