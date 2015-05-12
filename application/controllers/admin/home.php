<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {


    private $data = array(
        'title' => "Leinmap IT Solution",
        'breadcrumb' => "home",
        );
		
	public function __construct(){
		parent::__construct();
		$this->load->model('admin/projectmodel','project',true);
		$this->load->model('admin/finance_model','finance',true);
	}

	public function index()
	{
		$this->data['dataproject'] = $this->project->countProject();
		$this->data['datafinance'] = $this->finance->totalFinance();
		$this->load->view('admin/components/header',$this->data);
        $this->load->view('admin/homeview',$this->data);
        $this->load->view('admin/components/footer');
    }
}