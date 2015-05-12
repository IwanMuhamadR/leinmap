<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function inc_app($dir,$file)
{
	include(APPPATH.'views/'.$dir.'/'.$file.'.php');
}

function get_header()
{	
	inc_app('themes','header');
}

function get_footer()
{	
	inc_app('themes','footer');
}