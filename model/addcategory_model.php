<?php 
/**
* q
*/
class Addcategory_model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getdewey($val)
	{
		$st=$this->db->query("SELECT * FROM dewey where d_id=$val");
		return $st->fetchAll();
	}

	function save()
	{
		$st1=$this->db->prepare("INSERT INTO category (c_dewey,c_category,cname)VALUES(?,?,?)");
		$st1->execute(array($_REQUEST['ddc'],$_REQUEST['category'],$_REQUEST['title']));

		echo $h=$_REQUEST['ddc'];

		$path=URL."addcategory/view/".$h."/?g=1";

		header("Location: $path");
	}
}