<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Finance extends MY_Controller {


    private $data = array(
        'title' => "Leinmap IT Solution",
        'breadcrumb' => "finance",
        'pesan' => "",
        'pagination' => "",
        'tabel_data' => "",
        'main_view' => "",
        'main_view' => "",
        );

	public function index()
	{
		$this->load->view('admin/components/header',$this->data);
        $this->load->view('admin/financeview',$this->data);
        $this->load->view('admin/components/footer');
    }
}