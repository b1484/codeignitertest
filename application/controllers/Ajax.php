<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ajax extends CI_Controller{
public function __construct()
  {
    parent::__construct();
     $this->load->model('ajax_model');
      $this->load->library('session');
  }
  
  public function username_taken()
  {
$var = $this->ajax_model->chek_login_password();
   if ($var){
   
    
    $newdata = array(
                   'username'  => $var['username'],
                  
                   'logged_in' => TRUE
               );
    $this->session->set_userdata($newdata);
   
   echo 1;
  //   // echo $this->input->post('password');
    }
   
    // $username = trim($_POST['username']);
    
    
    }
  

}
