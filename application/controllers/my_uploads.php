<?php

/* This controller combines and
 * operates with the my_uploads_model
 * and the my_uploads_view 
 */

class My_Uploads extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('my_uploads_model');
        $this->load->model('sharedWithMe_model');
        //retrive the projects and the project documents
        //which is related to the user
        
        $data['shared'] = $this->sharedWithMe_model->getShareDocs();
        $data['myprojects'] = $this->my_uploads_model->getProjects();
        $data['prjdocs'] = $this->my_uploads_model->getDocuments();
        $this->load->view('my_uploads_view', $data);
    }

    function process($fileName,$path) {
        $this->load->helper('download');
        $data = file_get_contents($path); // Read the file's contents
        force_download($fileName, $data);
    }

}

?>
