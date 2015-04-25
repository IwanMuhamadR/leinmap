<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail_project_model extends CI_Model
{	
	private $tblUsers = 'users';
	private $tblDetail = 'detail_project';

	function getTeamByProjectId($id)
	{
		$arr = $this->db->select('*')
						->from('project p')
						->where('p.projectid',$id)
						->join('detail_project d','p.projectid=d.projectid')		
						->join('users u','d.usersid=u.usersid')
						->get()->result();
		return $arr;
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
		$this->db->insert('project', $arr);
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
				
				//Transaction
				$this->db->trans_begin();
					foreach($hasil as $row){
						$this->db->where('usersid', $row->usersid)->update('users', array('status'=>'Available'));
					}				
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
		$this->db->where('projectid', $id)->delete('detail_project');
		$this->db->where('projectid', $id)->delete('project');
	}
}