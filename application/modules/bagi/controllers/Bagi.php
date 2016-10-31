<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bagi extends CI_Controller {

	public function index(){
		$data['active_bagi'] = "active";
		$data['title'] = "Bagi Projek";
		$this->load->view('v_bagi',$data);
	}
}