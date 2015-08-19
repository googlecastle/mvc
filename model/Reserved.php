<?php 
/**
* 
*/
class Reserved_Model extends Model
{
	
	function __construct()
	{
		parent::__contstruct();
	}


	function view()
	{
		$this->db->prepare("SELECT * FROM ")
	}

}