<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ajax_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function chek_login_password(){
		$login = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->db->get_where('users', array('username' => $login,
			'password' => $password));
		return $query->row_array();
		


	}
	
}