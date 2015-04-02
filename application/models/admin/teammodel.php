<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teammodel extends CI_Model
{	
	function getUser()
	{
		$arr = $this->db->get('users');		
		return $arr->result();
	}
	
	function getUserById($id)
	{
		$arr = $this->db->where('usersid', $id)->from('users')->limit(1)->get();
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
}