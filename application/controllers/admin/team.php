<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team extends MY_Controller{


    private $data = array(
        'title' => "Leinmap IT Solution",
        'breadcrumb' => "team",
        );

	public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/components/header',$this->data);		
        $this->load->view('admin/components/footer');	
	}
	
	public function index()
	{
		$this->load->model('admin/teammodel');
		$resultdata['results'] = $this->teammodel->getUser();
        $this->load->view('admin/teamview', $resultdata);	
    }
	
	public function addview()
	{
		$this->load->view('admin/addteamview');
	}
	
	public function add()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$status = $_POST['status'];
		$usergroupid = $_POST['usergroupid'];
		$arr = array(
			'username' => $username,
			'password' => $password,
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'email' => $email,
			'status' => $status,
			'usergroupid' => $usergroupid
		);
		$this->load->model('admin/teammodel');
		$this->teammodel->addUser($arr);
		redirect('admin/team');		
	}
	
	public function updateview()
	{
		$id=$_GET['uid'];
		$this->load->model('admin/teammodel');
		$resultdata['find'] = $this->teammodel->getUserById($id);
		$resultdata['id'] = $id;
		if(!empty($resultdata['find']))
		{
			$this->load->view('admin/editteamview', $resultdata);
		}else{
			redirect('admin/team');
		}
	}
	
	public function update()
	{
		$id=$_GET['uid'];		
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$status = $_POST['status'];
		$arr = array(
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'email' => $email,
			'status' => $status
		);
		$this->load->model('admin/teammodel');
		if($this->teammodel->updateUser($id, $arr)==TRUE)
		{
			redirect('admin/team');
		}else{
			redirect('admin/team');
		}
	}
	
	public function delete()
	{
		$id=$_GET['uid'];
		$this->load->model('admin/teammodel');
		if($this->teammodel->deleteUser($id)==TRUE)
		{
			redirect('admin/team');
		}else{
			redirect('admin/team');
		}
	}
}