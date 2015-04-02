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
		$arr = $this->db->where('projectid', $id)->from('project')->limit(1)->get();
		return $arr->result();
	}
	
	function addProject($arr)
	{
		$this->db->insert('project', $arr);
	}
	
	function updateProject($id, $arr)
	{
		$this->db->where('projectid', $id)->update('project', $arr);
	}
	
	function deleteProject($id)
	{
		$this->db->where('projectid', $id)->delete('project');
	}
}