<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log extends MY_Controller{


    private $data = array(
        'title' => "Leinmap IT Solution",
        'breadcrumb' => "log",
        'logData' => "",
        );
	
	public function __construct(){
		parent::__construct();
		$this->load->model('admin/logmodel','log',true);
	}
	
	public function index()
	{
		$this->data['logData'] = $this->log->getLog();
		$this->load->view('admin/components/header',$this->data);
		$this->load->view('admin/logview', $this->data);
		$this->load->view('admin/components/footer');
    }
	
	public function addproject()
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
	
	public function updateview($id)
	{
		$resultdata['find'] = $this->project->getProjectById($id);
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
		if($this->project->updateProject()==TRUE)
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
		$resultdata['find'] = $this->project->getProjectById($id);
		$resultdata['id'] = $id;
		$resultdata['users'] = $this->usermodel->getUserByStatus();
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
	
	public function projectdetails($id){
		$result['dataproject'] = $this->project->getProjectById($id);
		$result['datateam'] = $this->detail->getTeamByProjectId($id);
		
		// print_r($result['dataproject'][0]->name);die;
		$this->load->view('admin/components/header',$this->data);
		$this->load->view('admin/projectdetailsview',$result);
		$this->load->view('admin/components/footer');
	}
	
}