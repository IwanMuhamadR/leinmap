<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Finance extends MY_Controller {


    private $data = array(
        'title' => "Leinmap IT Solution",
        'breadcrumb' => "finance",
        'msg' => "",
        'content_msg' => "",
        'pagination' => "",
        'table_data' => "",
        'main_view' => "",
        'title_form' => "",
        'form_action' => "",
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
		$this->data['form_action'] = "admin/finance/add";
		$this->data['title_form'] = "Add Finance";
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
		$msgSts = $this->finance->add($arr);
		$this->session->set_flashdata('msgSts',$msgSts);
		if($msgSts == 1){
			$this->session->set_flashdata('msg','Success! Data input success.');
		}
		else{
			$this->session->set_flashdata('msg','Error! Data input failed.');
		}
		$this->session->set_flashdata('process',true);
		redirect('admin/finance');		
	}
	
	public function edit($id = null)
	{
		$this->data['form_action'] = "admin/finance/edit/".$id;
		if(!empty($id)){
			if($this->input->post('submit')){
				// print_r("kokoni");die;
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
				$msgSts = $this->finance->update($id,$arr);
				$this->session->set_flashdata('msgSts',$msgSts);
				if($msgSts == 1){
					$this->session->set_flashdata('msg','Success! Data update success.');
				}
				else{
					$this->session->set_flashdata('msg','Error! Data update failed.');
				}
				$this->session->set_flashdata('process',true);
				redirect('admin/finance');	
			}
			else{
				$this->data['title_form'] = "Edit Finance";
				$this->data['table_data'] = $this->finance->getFinanceById($id);
				$this->load->view('admin/components/header',$this->data);
				$this->load->view('admin/addfinanceview',$this->data);
				$this->load->view('admin/components/footer');
			}
		}
		else{
			redirect('admin/finance');
		}
	}
	
	public function delete($id = null)
	{
		if(!empty($id)){
			$msgSts = $this->finance->delete($id);
			$this->session->set_flashdata('msgSts',$msgSts);
			if($msgSts == 1){
				$this->session->set_flashdata('msg','Success! Delete data success.');
			}
			else{
				$this->session->set_flashdata('msg','Error! Delete data failed.');
			}
			$this->session->set_flashdata('process',true);
			redirect('admin/finance');	
		}
		else{
			$this->session->set_flashdata('msg','Error! Delete data failed.');
			$this->session->set_flashdata('process',true);
			redirect('admin/finance');
		}
	}
	
	
	
}