<?php

class Login_Model extends CI_Model {

    function validateUser(){
        $indexNumber=$this->input->post('index');
        $password=$this->input->post('pword');
        
//        $this->load->database();
        
//        $this->db->select('username','password');
//        $this->db->from('user');
        $this->db->where('username',$indexNumber);
        $this->db->where('password',$password);
//        $this->db->limit(1);
        
        $query=$this->db->get('user');
        
        if ($query->num_rows()==1){
            $row=$query->row();
            $data=array(
                'indexNum'=>$row->username,
                'validate'=>TRUE
            );
            $this->session->set_userdata($data);
            return TRUE;
        }
        else{
            $data=array(
                'validate'=>FALSE
            );
            $this->session->set_userdata($data);
            return FALSE;
        }
    }
}

?>
