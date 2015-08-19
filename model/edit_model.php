<?php 
/**
* 
*/
class Edit_model extends Model
{
	
	function __construct()
	{

		parent::__construct();
		

	}

	function getall($val)
	{
		$st=$this->db->prepare("SELECT * FROM books WHERE bid=$val");
		$st->execute(array($val));
		return $st->fetchAll();
	}

	public static function dewey($val)
	{
		$st=Model::$dbcon->prepare("SELECT * FROM category WHERE c_category=?");
		$st->execute(array($val));
		return $rec=$st->fetchAll();
		 

	}

	public static function getauthor($value)
	{
		$st=Model::$dbcon->prepare("SELECT * FROM authors where aid=?");
		$st->execute(array($value));
		$record=$st->fetch(PDO::FETCH_ASSOC);
		return $records=$record['aname'];
	}


	function editall()
	{
		$ci=$_POST['id'];
		$aut=$_POST['ty'];
		$st=$this->db->prepare("UPDATE books 
								set title=?,
									isbn=?,
									publisher=?,
									edition=?,
									summary=?,
									available=?

								where bid=$ci");

		$st->execute(array($_POST['title'],$_POST['isbn'],$_POST['publisher'],$_POST['edition'],$_POST['summary'],$_POST['copies']));

		$st2=$this->db->prepare("UPDATE authors set aname =? where aid=$aut");

		$st2->execute(array($_POST['author']));

		$file=URL."edit/view/$ci/?g=1";
		header("Location: $file");


	}


}