<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

public function index(){
$this->load->view('tasklogin');
}

public function taskhome(){
   
    $result['task']= $this->db->get('task')->result();


    $this->load->view('taskhome',$result);
}

public function login(){
    $data=['username'=>$this->input->POST('username'),
    'password'=>$this->input->POST('password')];
   
    $username=$data['username'];
    $password=$data['password'];
  
   
   
if( $result['users']=$this->db->where('username',$username)->where('password',$password)->where('role',1)->get('users')->result()){

    redirect(base_url()."task/admintask");}

else if ( $result['users']=$this->db->where('username',$username)->where('password',$password)->get('users')->result()) {
   
   
    redirect(base_url()."task/taskhome");
   
    
    }
   
    else{
        {echo "invalid";}
    }


}




public function registeruser(){

    $data=['username'=>$this->input->POST('username'),
    'email'=>$this->input->POST('email'),
    'mobile'=>$this->input->POST('mobile'),
    'password'=>$this->input->POST('password')];
   
    $result=$this->db->insert('users',$data);
    if($result){ echo "success";}
  
    

}

public function addtask(){
    $config['upload_path']          = './uploads/';
	$config['allowed_types']        = 'gif|jpg|png';
	$this->load->library('upload',$config);

    if($this->upload->do_upload('Image')){
    $data=['Name'=>$this->input->POST('Name'),
    
	'Image'=>$this->upload->data('file_name')];
    

     $result=$this->db->insert('task',$data);
     if($result){ echo "success";}
     
    
     
    
 }
 
    }

   

}