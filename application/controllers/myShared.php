<?php

/*
 *
 *
 */

class MyShared extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->helper('url');
        $this->load->model('sharedWithMe_model');
        $data['shared']=  $this->sharedWithMe_model->getShareDocs();
        $this->load->view('myShared_view',$data);
    }
    
    public function changeNotified(){
        $decision=$_GET["decision"];
        $docid=$_GET["docid"];
        $this->load->model('sharedWithMe_model');        
        $this->sharedWithMe_model->updateTable($decision,$docid);
//        redirect('home/load_home_view');
    }
}
?>
