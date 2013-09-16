<?php

/*
 * this file is responsible for uploading the documents to the server
 */


class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public $currentProjects;

    function index() {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('upload_model');
        //retrive the data from the database to be sent to the upload view
        $this->load->model('sharedWithMe_model');
        
        $data['shared'] = $this->sharedWithMe_model->getShareDocs();
        $data['projects'] = $this->upload_model->getProjects();
        $this->currentProjects['projects'] = $data;
        $this->load->view('upload_view', $data);
    }

    function uploadFiles() {

        //this function is called when the upload button is pressed
        $this->load->model('upload_model');

        $currentUser = $this->session->userdata('indexNum');
        $dirPath = 'C:\wamp\www\uploads\\';                 //set the base path
        $projName = $this->input->post("selectedText");
        $projDescription = $this->input->post('projDescription');
        $startDate = $this->input->post('startdate');
        $priLevel = 0;
        $docDescription = $this->input->post('docDescription');
        $privilege = $this->input->post('privilege');

        //get the privilege level assigned by the user
        if ($privilege === '1') {
            $priLevel = 1;
        } else if ($privilege === '2') {
            $priLevel = 2;
        }

        $dirPath = $dirPath . $currentUser . '\projects' . '\\' . $projName;  //this path shows the project directory location

        $fileName = ( $_FILES['document']['name']); //This path is stored in the database
        $filePath = $dirPath . '\\' . $fileName;

        $config['upload_path'] = $dirPath;
        $config['allowed_types'] = '*';
        $config['max_size'] = '1024';

        $this->load->library('upload', $config);    //loads the upload library

        if (!file_exists($dirPath)) {               //check the directory availability and creates a new dirctory if one does not exist
            mkdir($dirPath, 0777, true);
            $oldProject = false;                    //Since the project is a new one 
        } else {
            $oldProject = true;
        }
        echo $oldProject;
        $projects = $this->upload_model->getProjects(); //get the project id of the document if the project already exists

            foreach ($projects as $prjs) {
                if ($projName === $prjs->projname) {
                    $projId = $prjs->projid;
                    break 1;
                }
            }

        $this->upload->do_upload('document');           //Upload the file to the relevent Directory

        if (!($oldProject)) {                           //setting the project table's data only if the project is a new project
            $projectData = array(
                'projname' => $projName,
                'projdescription' => $projDescription,
                'startdate' => $startDate,
                'username' => $currentUser
            );
            
            $projId=$this->upload_model->addNewProject($projectData);   //add new project and new document tables            
        }
        
        $docData = array(                               //setting the document table's data
            'filename' => $fileName,
            'path' => $filePath,
            'filetype' => ( $_FILES['document']['type']),
            'filesize' => ( $_FILES['document']['size']),
            'description' => $docDescription,
            'username' => $currentUser,
            'projid' => $projId,
            'privilege' => $priLevel
        );
        
            $this->upload_model->addNewDocument($docData);      //add new document to the document table
            redirect('home/load_home_view');
    }

}

?>
