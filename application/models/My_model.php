<?php


class My_Model extends CI_Model{

    public function validate($username, $password){
	        
		$this->db->where('username', $username);
			$this->db->where('password', $password);
			$query = $this->db->get('users');      
			
    }

}


?>