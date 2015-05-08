<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projectmodel extends CI_Model
{	
	function getProject()
	{
		$arr = $this->db->get('project');		
		return $arr->result();
	}
	
	function getProjectById($id)
	{
		$arr = $this->db->where('projectid', $id)
						->from('project')
						->limit(1)
						->get()
						->row();
						// print_r($arr);die;
		return $arr;
	}
	
	function addProject($arr)
	{
		$arrLog = array(
				'usersid' => $this->session->userdata('usersid'),
				'ipaddress' => $_SERVER['REMOTE_ADDR'],
				'log' => "Insert Project ".$arr['name'], // Keterangan log ngapain, ubah sesuai aksi (Insert/update/delete)
			);
			//Transaction Insert data + insert Log
		$this->db->trans_begin();
			$this->db->insert('project', $arr);
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
	
	function updateProject()
	{
		$id=$this->input->post('pid');		
		$name = $this->input->post('name');
		$datebegin = $this->input->post('datebegin');
		$dateend = $this->input->post('dateend');
		$period = date_diff(date_create($datebegin), date_create($dateend));
		$price = $this->input->post('price');
		// $po = $this->input->post('po');
		$isdone = $this->input->post('isdone');
		$arr = array(
			'name' => $name,
			'datebegin' => $datebegin,
			'dateend' => $dateend,
			'period' => $period->format('%R%a'),
			'price' => $price,
			// 'po' => $po,
			'isdone' => $isdone
		);
		if($this->db->where('projectid', $id)->update('project', $arr)){
			if($isdone == "Done"){
				//
				$hasil = $this->db->select('*')
						 ->from('detail_project')
						 ->where('projectid',$id)
						 ->get()
						 ->result();
				// print_r($hasil[1]->usersid);die;
				
				$arrLog = array(
					'usersid' => $this->session->userdata('usersid'),
					'ipaddress' => $_SERVER['REMOTE_ADDR'],
					'log' => "Update Project ".$arr['name'], // Keterangan log ngapain, ubah sesuai aksi (Insert/update/delete)
				);
				
				//Transaction
				$this->db->trans_begin();
					foreach($hasil as $row){
						$this->db->where('usersid', $row->usersid)->update('users', array('status'=>'Available'));
					}	
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
			else{
				return true;
			}
		}
		else{
			return false;
		}
	}
	
	function deleteProject($id)
	{
		$arrLog = array(
			'usersid' => $this->session->userdata('usersid'),
			'ipaddress' => $_SERVER['REMOTE_ADDR'],
			'log' => "Delete Project", // Keterangan log ngapain, ubah sesuai aksi (Insert/update/delete)
		);
		
		//Transaction Insert data + insert Log
		$this->db->trans_begin();
			$this->db->where('projectid', $id)->delete('detail_project');
			$this->db->where('projectid', $id)->delete('project');
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