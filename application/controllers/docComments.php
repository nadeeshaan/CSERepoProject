<?php

class DocComments extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->helper('url');
        $this->load->view('docComments_view');
        $this->load->model('sharedWithMe_model');
        $data['sharedCount'] = count($this->sharedWithMe_model->getShareDocs());
        $this->load->view('docComments_view',$data);
    }
    
    public function showDocComments(){
        
        $this->load->helper('url');
        $docid=$_GET['id'];
        $this->load->model('docComments_model');
        $data['comments']=  $this->docComments_model->getDocComments($docid);
//        print_r($data);
        $this->load->view('docComments_view',$data);
    }
}    

?>
