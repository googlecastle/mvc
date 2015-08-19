<?php 
/**
* 
*/
class Addlibrarian_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function addlibrarian($target_file)
	{


		$st=$this->db->prepare("INSERT INTO librarian (name,position,contact,address,username,password,pict) VALUES
							(?,?,?,?,?,?,?)");

		$st->execute(array($_REQUEST['name'],$_REQUEST['position'],$_REQUEST['number'],$_REQUEST['address'],$_REQUEST['user'],
			md5($_REQUEST['pass']),$target_file));

	

		header("Location: ../addlibrarian/view/?g=1");

	
	}

}