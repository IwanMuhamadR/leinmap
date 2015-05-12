<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller{


    private $data = array(
        'title' => "Leinmap IT Solution",
        'breadcrumb' => "user",
        );

	public function __construct()
	{
		parent::__construct();
		$this->load->view('admin/components/header',$this->data);		
        $this->load->view('admin/components/footer');	
	}
	
	public function index()
	{
		$this->load->model('admin/usermodel');
		$resultdata['results'] = $this->usermodel->getUser();
        $this->load->view('admin/userview', $resultdata);	
    }
	
	public function addview()
	{
		$this->load->view('admin/adduserview');
	}
	
	public function add()
	{
		$username = $_POST['username'];
		$password = md5($_POST['password']);
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
		$this->load->model('admin/usermodel');
		$this->usermodel->addUser($arr);
		redirect('admin/user');		
	}
	
	public function updateview()
	{
		$id=$_GET['uid'];
		$this->load->model('admin/usermodel');
		$resultdata['find'] = $this->usermodel->getUserById($id);
		$resultdata['id'] = $id;
		if(!empty($resultdata['find']))
		{
			$this->load->view('admin/edituserview', $resultdata);
		}else{
			redirect('admin/user');
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
		$this->load->model('admin/usermodel');
		if($this->usermodel->updateUser($id, $arr)==TRUE)
		{
			redirect('admin/user');
		}else{
			redirect('admin/user');
		}
	}
	
	public function delete()
	{
		$id=$_GET['uid'];
		$this->load->model('admin/usermodel');
		if($this->usermodel->deleteUser($id)==TRUE)
		{
			redirect('admin/user');
		}else{
			redirect('admin/user');
		}
	}
}