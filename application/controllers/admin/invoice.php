<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoice extends MY_Controller{
	
	public function pdf()
	{
		$id=$_GET['pid'];
		$this->load->model('admin/projectmodel','project',true);
		$this->load->model('admin/detail_project_model','detail',true);
		$this->load->model('admin/item_model','item',true);
		$this->load->model('admin/invoice_model','invoice',true);
		
		$result['dataproject'] = $this->project->getProjectById($id);
		$result['datateam'] = $this->detail->getTeamByProjectId($id);
		$result['datainvoice'] = $this->invoice->getInvoiceByProjectId($id);
		$result['dataitem'] = $this->item->getItemByProjectId($id);
		//$this->load->view('admin/invoiceview', $result); 

		//load the view, pass the variable and do not show it but "save" the output into $html variable
		$html=$this->load->view('admin/invoiceview', $result, true); 

		//this the the PDF filename that user will get to download
		$pdfFilePath = "invoice.pdf";

		//load mPDF library
		$this->load->library('m_pdf');
		//actually, you can pass mPDF parameter on this load() function
		$pdf = $this->m_pdf->load();
		//generate the PDF!
		$pdf->WriteHTML($html);
		//offer it to user via browser download! (The PDF won't be saved on your server HDD)
		$pdf->Output($pdfFilePath, "D");
	}
}