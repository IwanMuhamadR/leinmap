<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {


    private $data = array(
        'title' => "Leinmap IT Solution",
        'breadcrumb' => "home",
        );

	public function index()
	{
		$this->load->view('admin/components/header',$this->data);
        $this->load->view('admin/homeview',$this->data);
        $this->load->view('admin/components/footer');
    }
}