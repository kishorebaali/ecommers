<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mytask extends CI_Controller
{
    public function index()
    {
        $this->load->view('mylogin');
    }
    public function register()
    {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'password' => $this->input->post('password')
        ];
        $result = $this->db->insert('admin', $data);
    }
    public function login()
    {
        $name = $this->input->post('name');
        $password = $this->input->post('password');

        $result = $this->db->where(['name' => $name, 'password' => $password])->get('admin')->row();

        if ($result) {
            $this->load->view('myadmin');
        }
    }
}
