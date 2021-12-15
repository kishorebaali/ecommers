<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		
		$this->load->view('login');
	}

	public function login(){
		$data=['username'=>$this->input->POST('username'),
		'password'=>$this->input->POST('password')];
	       $username= $data['username'] ;
		   $password= $data['password'] ;
		$result['users'] = $this->db->where('username',$username )->where('password',$password)->get('users')->result();

		if($result['users']==null){ echo "invaild";
		
		}else{
			redirect(base_url()."users");

		}		 
			
    }
    public function register()
	{
		$this->load->view('register');
	}
public function registeruser(){
	$config['upload_path']          = './uploads/';
	$config['allowed_types']        = 'gif|jpg|png';
	$this->load->library('upload',$config);
	//  print_r($this->input->post());
	
	if($this->upload->do_upload('pic')){
   $data=['username'=>$this->input->POST('username'),
	'email'=>$this->input->POST('email'),
	'mobile'=>$this->input->POST('mobile'),
	'password'=>$this->input->POST('password'),
	'image'=>$this->upload->data("file_name"),
];

//print_r($data);
// print_r($this->upload->display_errors());

$result=$this->db->insert('users',$data);
			if($result){ echo "success";}
			else{echo "fail";}
			// redirect(base_url()."index");
	}
	else{
	       $data=['username'=>$this->input->POST('username'),
			'email'=>$this->input->POST('email'),
			'mobile'=>$this->input->POST('mobile'),
			'password'=>$this->input->POST('password')];
	
			$result=$this->db->insert('users',$data);
			if($result){ echo "success";}
			
			else{echo "fail";}
			redirect(base_url()."index");
	}
	
			      
	}
	public function data()
	{
		$result['users']= $this->db->get('users')->result();


		$this->load->view('data',$result);
		
	}
	public function delete()
	{
		$id= $this->input->get('id');
		$result=$this->db->where('id',$id)->delete('users');
		if($result){
			echo "delete success";
		}
		
	}
public function getbyid($id){
$result['row']=$this->db->where('id',$id)->get('users')->row();
$this->load->view('update',$result);
}
	
public function update(){
	$id=$this->input->POST('id');
	$data=['username'=>$this->input->POST('username'),
		'email'=>$this->input->POST('email'),
		'mobile'=>$this->input->POST('mobile'),
		'password'=>$this->input->POST('password')];
	$result=$this->db->where('id',$id)->update('users',$data);
	if($result){
		echo "update success";
	}
	else{
		echo "unable to update";
	}
	redirect(base_url()."data");
	
	}
	public function users(){
		$result['book']= $this->db->get('book')->result();


		$this->load->view('users',$result);
		

	}
	public function book()
	{
		$this->load->view('addbook');
	}
	public function addbook(){
		$data=['bookname'=>$this->input->POST('bookname'),
		 'bookauthor'=>$this->input->POST('bookauthor'),
		 'bookprice'=>$this->input->POST('bookprice'),
		'userid'=>$this->input->POST('1')];
 
		 $result=$this->db->insert('book',$data);
		 if($result){ echo "success";}
		 
		 else{echo "fail";}
		}
		public function deletebook()
		{
			$id= $this->input->get('id');
			$result=$this->db->where('id',$id)->delete('book');
			if($result){
		      echo "delete success";
		  }
		 redirect(base_url()."users");
		}
			
}
