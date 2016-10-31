<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
     parent::__construct();
     	$this->load->library('session');
     	$this->load->model('auth');
  	}
	public function index(){
		$data['title'] = "Cariprojek.com | Login";
		$this->load->view('login',$data);
	}

	function doLogin(){
		
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		if($this->auth->do_auth($username, $pass) == true){
			$newdata = array(
				'username'  => $username,
				'password' => $pass,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);
			redirect('admin');
		}
		else
		{
			redirect('login');
		}
		
		
	}

	
}