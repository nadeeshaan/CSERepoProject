<?php

/*
 * To change this template, choose Tools | Templates
 * This include the data which is retrived by ajax calls
 */


    Class AjaxData extends CI_Controller{
        public function __construct() {
            parent::__construct();
        }
        
        
        //This function is called by the ajax section in the sharedoc View
        //to extract the document names dynamicallly when project selected
        function getReleventProjects(){
            $this->load->model('ShareDocs_Model');
            $projName=$_POST['projName'];
            $returnedDocs=$this->ShareDocs_Model->getDocs($projName);
            
            $output=array();
            foreach($returnedDocs as $row){
                $output[]=$row;
            }
            
            echo json_encode($output);
        }
    }
?>
