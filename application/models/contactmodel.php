<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactmodel extends CI_Model
{
	function sendMessage($data)
	{
		$this->db->insert('messages', $data);
	}
}