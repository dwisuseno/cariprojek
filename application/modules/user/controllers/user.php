<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
     parent::__construct();
     
  	}
	public function index(){
		$data['active_home'] = "active";
		$data['title'] = "Cariprojek.com | Home";
		$this->load->view('home',$data);
	}

	public function tentang(){
		$data['active_tentang'] = "active";
		$data['title'] = "Cariprojek.com | Tentang Kami";
		$this->load->view('tentang',$data);
	}

	
}