<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'content' => $this->input->post('content')
		);
		
		$this->load->model('contactmodel');		
		$this->contactmodel->sendMessage($data);
		redirect('home');
	}
}