<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$this->load->view('themes/header');
		$this->load->view('home');
		$this->load->view('themes/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */