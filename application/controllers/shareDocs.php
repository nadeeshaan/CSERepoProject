<?php
/*
 * This controller is responsble for shareDocument Functionality
 */
class ShareDocs extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('shareDocs_model');
//        $this->load->model('sharedWithMe_model');
//        //retrive the data which is sent to the sharedocs View
//        
//        $data['shared2']=  $this->sharedWithMe_model->getShareDocs();
        $data['projects'] = $this->shareDocs_model->getProjects();
        $data['users']=  $this->shareDocs_model->getUsers();
        $projid=  $this->input->post("userProjects");
        $data['docs']=  $this->shareDocs_model->getDocs($projid);
        $this->load->view('sharedocs_view',$data);
    }
    
    
    public function shareDocument(){
        $this->load->helper('url');
        $this->load->helper('form');
        $docid=$this->input->post('documents');
        $username=  $this->input->post('users');
        $notified=true;
        
        $this->load->model('shareDocs_model');
        $shareArr=array(
            'docid'=>$docid,
            'username'=>$username,
            'notified'=>$notified
        );
        
        $this->shareDocs_model->shareDoc($shareArr);
        redirect('home/load_home_view');
        
    }
}
?>
