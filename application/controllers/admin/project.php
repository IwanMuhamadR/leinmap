<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends MY_Controller{


    private $data = array(
        'title' => "Leinmap IT Solution",
        'breadcrumb' => "project",
        );

	public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/components/header',$this->data);		
		$this->load->view('admin/components/footer');	
	}
	
	public function index()
	{
		$this->load->model('admin/projectmodel');
		$resultdata['results'] = $this->projectmodel->getProject();
		$this->load->view('admin/projectview', $resultdata);
    }
	
	public function addview()
	{
		$this->load->view('admin/addprojectview');
	}
	
	public function add()
	{
		$name = $_POST['name'];
		$datebegin = $_POST['datebegin'];
		$dateend = $_POST['dateend'];
		$period = $_POST['period'];
		$price = $_POST['price'];
		$po = $_POST['po'];
		$isdone = $_POST['isdone'];
		$arr = array(
			'name' => $name,
			'datebegin' => $datebegin,
			'dateend' => $dateend,
			'period' => $period,
			'price' => $price,
			'po' => $po,
			'isdone' => $isdone
		);
		$this->load->model('admin/projectmodel');
		$this->projectmodel->addProject($arr);
		redirect('admin/project');		
	}
	
	public function updateview()
	{
		$id=$_GET['pid'];
		$this->load->model('admin/projectmodel');
		$resultdata['find'] = $this->projectmodel->getProjectById($id);
		$resultdata['id'] = $id;
		if(!empty($resultdata['find']))
		{
			$this->load->view('admin/editprojectview', $resultdata);
		}else{
			redirect('admin/project');
		}
	}
	
	public function update()
	{
		$id=$_GET['pid'];		
		$name = $_POST['name'];
		$datebegin = $_POST['datebegin'];
		$dateend = $_POST['dateend'];
		$period = $_POST['period'];
		$price = $_POST['price'];
		$po = $_POST['po'];
		$isdone = $_POST['isdone'];
		$arr = array(
			'name' => $name,
			'datebegin' => $datebegin,
			'dateend' => $dateend,
			'period' => $period,
			'price' => $price,
			'po' => $po,
			'isdone' => $isdone
		);
		$this->load->model('admin/projectmodel');
		if($this->projectmodel->updateProject($id, $arr)==TRUE)
		{
			redirect('admin/project');
		}else{
			redirect('admin/project');
		}
	}
	
	public function delete()
	{
		$id=$_GET['pid'];
		$this->load->model('admin/projectmodel');
		if($this->projectmodel->deleteProject($id)==TRUE)
		{
			redirect('admin/project');
		}else{
			redirect('admin/project');
		}
	}
}