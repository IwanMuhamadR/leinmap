<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('loginmodel');
	}
	
	public function index()
	{		
		if($this->loginmodel->isLogin()==false)
		{
			redirect('home');
		}else{
			redirect('admin/homeview');
		}
	}
	
	public function attempt()
	{
		$cek = $this->loginmodel->loginAction($this->input->post('username'), $this->input->post('password'));
		if($cek == true)
		{
			$create_ses = $this->loginmodel->createSessionLogin($this->input->post('username'));
			if($create_ses == true)
			{
				redirect('admin/home');
			}else{
				redirect('home');
			}
		}else{
			redirect('home');
		}
	}
	
	public function dologout()
	{
		$this->loginmodel->goLogout();
		redirect('home');
	}
}