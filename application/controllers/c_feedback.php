<?php

class c_feedback extends CI_Controller{
	public function index(){
		redirect('c_feedback/start');
	}

	public function start(){
		$this->load->view('feedback');
	}
}

?>