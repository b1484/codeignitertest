<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News_model extends CI_Model {

	public function __construct()
	{
		
		$this->load->database();
	}
	public function get_news($id = FALSE){
		if ($id === FALSE)
		{
			$query = $this->db->get('news');
			return $query->result_array();
		}

		$query = $this->db->get_where('news', array('id' => $id));
		return $query->row_array();
	}
	public function set_count($count, $id){
		
		$data = array(
			'count' => $count
			);
		$this->db->where('id', $id);

		$this->db->update('news', $data);
	}
	
}