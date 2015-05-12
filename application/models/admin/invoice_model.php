<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoice_model extends CI_Model
{
    
	function getInvoiceByProjectId($id)
	{
		$arr = $this->db->select('*')
						->from('project p')
						->join('invoice i','p.projectid=i.projectid')		
						->where('p.projectid',$id)
						->limit(1)
						->get()
						->row();
		return $arr;
	}
	
	function add($arr){
		//Transaction Insert data + insert Log
		$this->db->trans_begin();
			$this->db->set('date','NOW()',false);
			$this->db->insert('invoice',$arr);
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return false;
		}
		else
		{
			$this->db->trans_commit();
			return true;
		}
	}
	
}