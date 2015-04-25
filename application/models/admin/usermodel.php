<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermodel extends CI_Model
{	
	function getUser()
	{
		$arr = $this->db->where('usergroupid !=',1)
				->order_by('name')
				->get('users');		
		return $arr->result();
	}
	
	function getUserById($id)
	{
		$arr = $this->db->where('usersid', $id)->from('users')->limit(1)->get();
		return $arr->result();
	}
	
	function getUserByStatus()
	{
		$arr = $this->db
					->where('usergroupid !=', 1)
					->where('status', 'Available')
					->from('users')
					->get();		
		return $arr->result();
	}
	
	function addUser($arr)
	{
		$this->db->insert('users', $arr);
	}
	
	function updateUser($id, $arr)
	{
		$this->db->where('usersid', $id)->update('users', $arr);
	}
	
	function deleteUser($id)
	{
		$this->db->where('usersid', $id)->delete('users');
	}
	
	function updateUserStatus($id)
	{
		$this->db->where('usersid', $id)->update('users', array('status' => 'Not Available'));
		/*$query = $this->db->select('status')->from('users')->where('usersid', $id)->get();
		foreach($query->result() as $row)
		{
			if($row->status == 'Available')
			{
				$this->db->where('usersid', $id)->update('users', array('status' => 'Not Available'));
			}
			else if($row->status == 'Not Available')
			{
				$this->db->where('usersid', $id)->update('users', array('status' => 'Available'));
			}
		}*/
	}
}