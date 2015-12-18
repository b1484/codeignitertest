<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('session');

	}

	public function index()
	{
		if ($this->session->userdata('logged_in')==TRUE){

			$data['news'] = $this->admin_model->get_news();
			$data['session_id'] = $this->session->userdata('username');

			$this->load->view('templates/admin_header',$data);
			$this->load->view('admin/index',$data);
			$this->load->view('templates/admin_footer');
		}
		else{
			$this->load->view('admin/error_admin');
		}

	}
	public function add_users()

	{  $this->load->library('email');
		if ($this->session->userdata('logged_in')==TRUE){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('login', '"login"', 'required');
		$this->form_validation->set_rules('email', '"email"', 'required');
		$this->form_validation->set_rules('password', '"password"', 'required');
		$this->form_validation->set_rules('password', '"password"', 'required');

		if ($this->form_validation->run() === FALSE)  
		{

			$this->load->view('templates/admin_header');
			$this->load->view('admin/add_users');
			$this->load->view('templates/admin_footer');
		}
		else
		{
			if ($this->admin_model->chek_password()){
$this->email->from('codeigniter@MAIL.COM', 'Codeignitertest');
				$this->email->to($this->input->post('email')); 
				$this->email->subject('CodeigniterTest');
				$this->email->message('login:"'.$this->input->post('login'). '"'. '  password:"'.$this->input->post('password').'"');	
				$this->email->send();

				echo $this->email->print_debugger(); 
				$this->admin_model->set_users();
				$this->load->view('templates/admin_header');
				$this->load->view('admin/success_users');
				$this->load->view('templates/admin_footer');
			}
			else{
				$data['password']="Пароли не совпадают" ;
				$this->load->view('templates/admin_header');
				$this->load->view('admin/add_users', $data);
				$this->load->view('templates/admin_footer');
				


				
			}
		}
	}
	else{
		$this->load->view('admin/error_admin');
	}
}
public function delete($id)
{  if ($this->session->userdata('logged_in')==TRUE){
	$this->load->helper('url');
	$this->admin_model->delete($id);


	redirect('admin', 'location');

}
else{
	$this->load->view('admin/error_admin');
}

}
public function delete_users($id)
{  if ($this->session->userdata('logged_in')==TRUE){
	$this->load->helper('url');
	$this->admin_model->delete_users($id);


	redirect('admin/users', 'location');

	
}
else{
	$this->load->view('admin/error_admin');
}
}

public function users()
{  if ($this->session->userdata('logged_in')==TRUE){


	$data['news'] = $this->admin_model->get_users();

	$this->load->view('templates/admin_header');
	$this->load->view('admin/users_view', $data);
	$this->load->view('templates/admin_footer');
}
else{
	$this->load->view('admin/error_admin');
}
}



public function edit($id)
{  if
	($this->session->userdata('logged_in')==TRUE){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', '"название"', 'required');
		$this->form_validation->set_rules('textck', '"Preview"', 'required');
		$this->form_validation->set_rules('textck1', '"описание"', 'required');

		if ($this->form_validation->run() === FALSE)  
		{
			$data['news'] = $this->admin_model->get_news_id($id);
			$this->load->view('templates/admin_header');
			$this->load->view('admin/edit',$data);
			$this->load->view('templates/admin_footer');
		}
		else
		{
			$this->admin_model->update($id);
			$this->load->view('templates/admin_header');
			$this->load->view('admin/success_edit');
			$this->load->view('templates/admin_footer');
		}
	}
	else{
		$this->load->view('admin/error_admin');
	}
}
public function add_news()
{  
	if ($this->session->userdata('logged_in')==TRUE){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', '"название"', 'required');
		$this->form_validation->set_rules('textck', '"Preview"', 'required');
		$this->form_validation->set_rules('textck1', '"описание"', 'required');

		if ($this->form_validation->run() === FALSE)  
		{
			$this->load->view('templates/admin_header');
			$this->load->view('admin/add_news');
			$this->load->view('templates/admin_footer');

		}

		else
		{
			$data_Author= $this->session->userdata('username');

			$this->admin_model->set_news();
			$this->load->view('templates/admin_header');
			$this->load->view('admin/success');
			$this->load->view('templates/admin_footer');

		}
		
	}
	else{
		$this->load->view('admin/error_admin');
	}
}



public function create()
{  if ($this->session->userdata('logged_in')==TRUE){
	$this->load->helper('form');
	$this->load->library('form_validation');

	$data['title'] = 'Create a news item';

	$this->form_validation->set_rules('title', 'title', 'required');
	$this->form_validation->set_rules('text', 'text', 'required');

	if ($this->form_validation->run() === FALSE)  
	{
		$this->load->view('templates/header', $data);
		$this->load->view('news/create');
		$this->load->view('templates/footer');

	}
	else
	{
		$this->news_model->set_news();
		$this->load->view('news/success');
	}
}
else{
	$this->load->view('admin/error_admin');
}
}

}