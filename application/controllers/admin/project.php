<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends MY_Controller{


    private $data = array(
        'title' => "Leinmap IT Solution",
        'breadcrumb' => "project",
        );
	
	public function index()
	{
		$this->load->model('admin/projectmodel');
		$resultdata['results'] = $this->projectmodel->getProject();
		$this->load->view('admin/components/header',$this->data);
		$this->load->view('admin/projectview', $resultdata);
		$this->load->view('admin/components/footer');
    }
	
	public function addview()
	{
		$this->load->view('admin/components/header',$this->data);
		$this->load->view('admin/addprojectview');
		$this->load->view('admin/components/footer');
	}
	
	public function add()
	{
		$name = $_POST['name'];
		$datebegin = $_POST['datebegin'];
		$dateend = $_POST['dateend'];
		$period = date_diff(date_create($datebegin), date_create($dateend));
		$price = $_POST['price'];
		$po = $_POST['po'];
		$isdone = $_POST['isdone'];
		$arr = array(
			'name' => $name,
			'datebegin' => $datebegin,
			'dateend' => $dateend,
			'period' => $period->format('%R%a'),
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
			$this->load->view('admin/components/header',$this->data);
			$this->load->view('admin/editprojectview', $resultdata);			
			$this->load->view('admin/components/footer');
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
		$period = date_diff(date_create($datebegin), date_create($dateend));
		$price = $_POST['price'];
		$po = $_POST['po'];
		$isdone = $_POST['isdone'];
		$arr = array(
			'name' => $name,
			'datebegin' => $datebegin,
			'dateend' => $dateend,
			'period' => $period->format('%R%a'),
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
	
	public function addteamview()
	{
		$id=$_GET['pid'];
		$this->load->model('admin/projectmodel');
		$resultdata['find'] = $this->projectmodel->getProjectById($id);
		$resultdata['id'] = $id;
		$this->load->model('admin/usermodel');
		$resultdata['users'] = $this->usermodel->getUserByStatus();
		$this->load->model('admin/detailmodel');
		$resultdata['detail'] = $this->detailmodel->getDetailById($id);		
		if(!empty($resultdata['find']))
		{
			$this->load->view('admin/components/header',$this->data);
			$this->load->view('admin/addteamview', $resultdata);			
			$this->load->view('admin/components/footer');
		}else{
			redirect('admin/project');
		}		
	}
	
	public function addteam()
	{
		$projectid = $_POST['projectid'];		
		$usersid = $_POST['team'];
		$arr = array(
			'projectid' => $projectid,
			'usersid' => $usersid
		);
		$this->load->model('admin/detailmodel');
		$this->detailmodel->addDetail($arr);
		$this->load->model('admin/usermodel');
		$this->usermodel->updateUserStatus($usersid);
		redirect('admin/project/addteamview?pid='.$projectid);
	}
	
	public function updateteam()
	{
		$id=$_GET['dpid'];
		$pid=$_GET['pid'];
		$uid=$_GET['uid'];
		$this->load->model('admin/detailmodel');
		$this->load->model('admin/usermodel');
		if(($this->detailmodel->updateDetail($id, $uid) AND $this->usermodel->updateUserStatus($uid))== TRUE)
		{
			redirect('admin/project/addteamview?pid='.$pid);
		}else{
			redirect('admin/project/addteamview?pid='.$pid);
		}		
	}
	
	public function deleteteam()
	{
		$id=$_GET['dpid'];
		$pid=$_GET['pid'];
		$this->load->model('admin/detailmodel');
		if($this->detailmodel->deleteDetail($id)==TRUE)
		{
			redirect('admin/project/addteamview?pid='.$pid);
		}else{
			redirect('admin/project/addteamview?pid='.$pid);
		}
	}
}