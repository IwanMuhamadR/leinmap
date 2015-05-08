<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Finance_model extends CI_Model
{
    function getFinance()
	{
		$arr = $this->db->get('finance');		
		return $arr->result();
	}
    function getFinanceById($financeid)
	{
		$arr = $this->db->where('financeid',$financeid)
						->get('finance');		
		return $arr->row();
	}
	
	function add($arr){
		$arrLog = array(
			'usersid' => $this->session->userdata('usersid'),
			'ipaddress' => $_SERVER['REMOTE_ADDR'],
			'log' => "Insert Finance".$arr['info'], // Keterangan log ngapain, ubah sesuai aksi (Insert/update/delete)
		);
		
		//Transaction Insert data + insert Log
		$this->db->trans_begin();
			$this->db->insert('finance',$arr);
			$this->db->set('logdate','NOW()',false);
			$this->db->insert('logevent',$arrLog);
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
	function update($id,$arr){
		$arrLog = array(
			'usersid' => $this->session->userdata('usersid'),
			'ipaddress' => $_SERVER['REMOTE_ADDR'],
			'log' => "Update Finance ".$arr['info'], // Keterangan log ngapain, ubah sesuai aksi (Insert/update/delete)
		);
		
		//Transaction Insert data + insert Log
		$this->db->trans_begin();
			$this->db->where('financeid', $id)->update('finance', $arr);
			$this->db->set('logdate','NOW()',false);
			$this->db->insert('logevent',$arrLog);
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
	function delete($id){
		$arrLog = array(
			'usersid' => $this->session->userdata('usersid'),
			'ipaddress' => $_SERVER['REMOTE_ADDR'],
			'log' => "Delete Finance", // Keterangan log ngapain, ubah sesuai aksi (Insert/update/delete)
		);
		
		//Transaction Insert data + insert Log
		$this->db->trans_begin();
			$this->db->where('financeid', $id)->delete('finance');
			$this->db->set('logdate','NOW()',false);
			$this->db->insert('logevent',$arrLog);
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