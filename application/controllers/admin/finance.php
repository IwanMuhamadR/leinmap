<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Finance extends MY_Controller {


    private $data = array(
        'title' => "Leinmap IT Solution",
        'breadcrumb' => "finance",
        'msg' => "",
        'content_msg' => "",
        'pagination' => "",
        'tabel_data' => "",
        'main_view' => "",
        );

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/finance_model','finance',true);
	}
		
	public function index()
	{
		$this->data['dataFinance'] = $this->finance->getFinance();
		$this->load->view('admin/components/header',$this->data);
        $this->load->view('admin/financeview',$this->data);
        $this->load->view('admin/components/footer');
    }
	
	public function addfinance()
	{
		$this->load->view('admin/components/header',$this->data);
		$this->load->view('admin/addfinanceview');
		$this->load->view('admin/components/footer');
	}
	
	public function add()
	{
		$date = $this->input->post('date');
		$status = $this->input->post('status');
		$nominal = $this->input->post('nominal');
		$info = $this->input->post('info');
		$arr = array(
			'datefinance' => $date,
			'status' => $status,
			'nominal' => $nominal,
			'info' => $info,
		);
		$this->session->set_flashdata('msgSts',$this->finance->add($arr));
		$this->session->set_flashdata('msg',true);
		redirect('admin/finance');		
	}
	
}