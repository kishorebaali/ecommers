<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

    public function register()
	{
		$this->load->view('register');
	}
	public function registeruser(){
	
		$data=['username'=>$this->input->POST('username'),
		'email'=>$this->input->POST('email'),
		'mobile'=>$this->input->POST('mobile'),
		'password'=>$this->input->POST('password')];

		$result=$this->db->insert('users',$data);
		if($result){ echo "success";}
		
		else{echo "fail";}
		redirect(base_url()."index");

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

}
