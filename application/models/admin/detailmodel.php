<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detailmodel extends CI_Model
{
	function getDetailById($pid)
	{
		$arr = $this->db->select('detailprojectid, projectid, name')->from('users')
					->join('detail_project', 'detail_project.usersid = users.usersid')
					->where('projectid', $pid)->get();
		return $arr->result();
	}
	
	function getUserByStatus()
	{
		$arr = $this->db->where('status', 'Available')->from('users')->get();		
		return $arr->result();
	}
	
	function addDetail($arr)
	{
		$this->db->insert('detail_project', $arr);
	}
	
	function updateDetail($id, $arr)
	{
		$this->db->where('detailprojectid', $id)->update('detail_project', array('usersid' => $arr));
	}
	
	function deleteDetail($id)
	{
		$this->db->where('detailprojectid', $id)->delete('detail_project');
	}
}