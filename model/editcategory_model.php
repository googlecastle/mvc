<?php 

/**
* 
*/
class editcategory_model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getall($val)
	{

		$st=$this->db->prepare("SELECT * FROM category where cid=?");
		$st->execute(array($val));
		return $st->fetchAll();

	}
	function edit()
	{
		$val=$_POST['cid'];
		$st=$this->db->prepare("UPDATE category set c_dewey=?,c_category=?,cname=? WHERE cid=$val");
		$st->execute(array($_POST['ddc'],$_POST['category'],$_POST['title']));

		$file=URL."editcategory/view/$val/?g=1";
		header("Location: $file");
	}


}