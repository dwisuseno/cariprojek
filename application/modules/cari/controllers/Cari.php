<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cari extends CI_Controller {
	public function index(){
		$data['active_cari'] = "active";
		$data['title'] = "Cari Projek";
		$this->load->view('vw_cari',$data);
	}
}