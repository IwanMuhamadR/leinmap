<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item_model extends CI_Model
{
	function getItemByProjectId($id)
	{
		$arr = $this->db->select('*')
						->from('project p')
						->join('item_project ip','p.projectid=ip.projectid')		
						->where('p.projectid',$id)
						->get()->result();
		return $arr;
	}
	
	function add($arr){
		$this->db->insert('item_project',$arr);
	}
	
}