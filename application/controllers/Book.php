<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class book extends CI_Controller {

public function index(){
$this->load->view('home');
}

public function content(){
   
    $result['book']= $this->db->get('book')->result();


    $this->load->view('content',$result);
}

public function login(){
    $data=['username'=>$this->input->POST('username'),
    'password'=>$this->input->POST('password')];
   
    $username=$data['username'];
    $password=$data['password'];
  
   
   
if( $result['users']=$this->db->where('username',$username)->where('password',$password)->where('role',1)->get('users')->result()){

    redirect(base_url()."book/adminhome");}

else if ( $result['users']=$this->db->where('username',$username)->where('password',$password)->get('users')->result()) {
//    echo "welcome('$username')";
   
    redirect(base_url()."book/content");
   
    
    }
   
    else{
        {echo "invalid";}
    }

}
public function adminhome(){
   


    $this->load->view('adminhome');
}

public function adminusers(){
    $result['users']= $this->db->get('users')->result();


    $this->load->view('adminusers',$result);
}
public function adduser(){

    $data=['username'=>$this->input->POST('username'),
    'email'=>$this->input->POST('email'),
    'mobile'=>$this->input->POST('mobile'),
    'password'=>$this->input->POST('password')];
   
    $result=$this->db->insert('users',$data);
    if($result){ echo "success";}
  
    else{echo "fail";}
    redirect(base_url()."book/adminusers");

}
public function registeruser(){

    $data=['username'=>$this->input->POST('username'),
    'email'=>$this->input->POST('email'),
    'mobile'=>$this->input->POST('mobile'),
    'password'=>$this->input->POST('password')];
   
    $result=$this->db->insert('users',$data);
    if($result){ echo "success";}
  
    else{echo "fail";}
    redirect(base_url()."book/index");

}

public function addbook(){
    $config['upload_path']          = './uploads/';
	$config['allowed_types']        = 'gif|jpg|png';
	$this->load->library('upload',$config);

    if($this->upload->do_upload('BookImage')){
      
    $data=['BookName'=>$this->input->POST('BookName'),
     'BookPrice'=>$this->input->POST('BookPrice'),
     'BookDesc'=>$this->input->POST('BookDesc'),
	'BookImage'=>$this->upload->data('file_name'),
    
];


     $result=$this->db->insert('book',$data);
     if($result){ echo "success";}
     
     else{echo "fail";}
     redirect(base_url()."book/content");
     
    }
    else{
       
        $data=['BookName'=>$this->input->POST('BookName'),
         'BookPrice'=>$this->input->POST('BookPrice'),
         'BookDesc'=>$this->input->POST('BookDesc'),
         'userid'=>$this->db->get('users','id')];
 
         $result=$this->db->insert('book',$data);
         if($result){ echo "success";}
         
         else{echo "fail";}
         redirect(base_url()."book/content");
 }
 
    }
    public function deletebook()
	{
		$id= $this->input->get('id');
		$result=$this->db->where('id',$id)->delete('book');
		if($result){
			echo "delete success";
            redirect(base_url()."book/content");
		}
		
	}
    public function deleteuser()
    {
        $id=$this->input->get('id');
        $result=$this->db->where('id',$id)->delete('users');
        if($result){
            echo "delete success";
            redirect(base_url()."book/adminhome");
                }
    }
    public function getbyid($id){
        $result['row']=$this->db->where('id',$id)->get('book')->row();
        $this->load->view('updatebook',$result);
        }
    public function update(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
       
        $this->load->library('upload',$config);
        
        if($this->upload->do_upload('BookImage')){
            $id=$this->input->POST('id');
        $data=['BookName'=>$this->input->POST('BookName'),
            'BookPrice'=>$this->input->POST('BookPrice'),
            'BookDesc'=>$this->input->POST('BookDesc'),
            'BookImage'=>$this->upload->data('file_name')];
          
           
  $result=$this->db->where('id',$id)->update('book',$data);
        if($result){
            echo "update success";
        }
        else{
            echo "unable to update";
        }
        
        
    }
    else{
        $id=$this->input->POST('id');
        $data=['BookName'=>$this->input->POST('BookName'),
         'BookPrice'=>$this->input->POST('BookPrice'),
         'BookDesc'=>$this->input->POST('BookDesc')];
 
         $result=$this->db->where('id',$id)->update('book',$data);
         if($result){ echo "success";}
         
         else{echo "fail";}
         redirect(base_url()."book/content");
 }
 
        }
    public function addtocart($id){
            
            $data=['BookName'=>$this->input->POST('BookName'),
            'BookPrice'=>$this->input->POST('BookPrice'),
            'BookDesc'=>$this->input->POST('BookDesc'),
            'BookImage'=>$this->upload->data('file_name')];
         $result['row']=$this->db->where('id',$id)->get('book',$data)->row();
            $this->load->view('cart',$result);
        }

       /* public function addtocart($id){
            $result['row']=$this->db->where('id',$id)->get('book')->row();
            $this->load->view('cart',$result);
            }  */
            
         public function adminbooks()   
            {
                $result['book']= $this->db->get('book')->result();


                $this->load->view('adminbooks',$result);
            }
}
