<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_news(){
		$query = $this->db->get('news');
		return $query->result_array();

	}
	public function get_users(){
		$query = $this->db->get('users');
		return $query->result_array();

	}

	public function get_news_id($id){
		
		$query = $this->db->get_where('news', array('id' => $id));
		return $query->row_array();
	}
	public function delete($id){
		
		$this->db->where('id', $id);
		$this->db->delete('news'); 
	}
	public function delete_users($id){
		
		$this->db->where('id', $id);
		$this->db->delete('users'); 
	}

	public function update($id){
		$this->load->helper('date');
		$datestring = "%d,%m,%Y";
		$time = time();

		$data = array(
			'title' => $this->input->post('title'),
			'preview' => $this->input->post('textck'),
			'date' => mdate($datestring, $time),
			
			'body' => $this->input->post('textck1')
			);
		$this->db->where('id', $id);

		$this->db->update('news', $data);
		
	}
	public function set_news()
	{
		$this->load->helper('url');
		$this->load->helper('date');
		
		$datestring = "%d,%m,%Y";
		$time = time();

		$data = array(
			'title' => $this->input->post('title'),
			'preview' => $this->input->post('textck'),
			'date' => mdate($datestring, $time),
			'author'=> $this->session->userdata('username'),
			'body' => $this->input->post('textck1')
			);

		return $this->db->insert('news', $data);
	}
	public function chek_password(){
		if ($this->input->post('password')==$this->input->post('password1')){
			return TRUE;}
			else{return FALSE;}

		}
		public function set_users()
		{
			

			$data = array(
				'username' => $this->input->post('login'),
				'email' => $this->input->post('email'),
				
				
				'password' => $this->input->post('password')
				);


			return $this->db->insert('users', $data);
		}
	}