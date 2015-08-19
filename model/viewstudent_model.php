<?php 
/**
* 
*/
class viewstudent_model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	function getstudent()
	{
		$st=$this->db->prepare("SELECT * FROM student ORDER BY id desc");
		$st->execute();
		return $result=$st->fetchAll();
	}

	
}