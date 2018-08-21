<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
  	parent::__construct();

}
public function index(){


if(isset($_POST['password'])){
	$this->load->model('usuario_model');
	if($this->usuario_model->login($_POST['username'],$_POST['password'])){
	
		redirect('curso');
	}else{
		redirect('login2#bad-password');
	}
	}
	$this->load->view('curso/login');
}

public function logout(){
	$this->session->sess_destroy();
	redirect('login');
}

}


?>