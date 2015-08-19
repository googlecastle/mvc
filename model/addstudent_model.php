<?php 
/**
* 
*/
class Addstudent_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function add()
	{


		$st=$this->db->prepare("INSERT INTO student (sid,name,year,section,contact,address) VALUES (?,?,?,?,?,?)");

		$st->execute(array($_REQUEST['st'],$_REQUEST['name'],$_REQUEST['year'],$_REQUEST['section'],$_REQUEST['contact'],$_REQUEST['address']));



		header("Location: ../viewstudent/view/?g=1");





	
	}

}