<?php 

/**
* 
*/
class Addbook_model extends Model
{
	
	function __construct()
	{

		parent::__construct();
		

	}


	public function addbooks()
	{
		$st1=$this->db->prepare("INSERT INTO authors (aname) VALUES(?)");
		$st1->execute(array($_REQUEST['author']));

		echo $lastid=$this->db->lastInsertId();

		$st=$this->db->prepare("INSERT INTO books (author,cid,title,isbn,publisher,edition,summary,available) VALUES
			(?,?,?,?,?,?,?,?)");
		$st->execute(array($lastid,$_REQUEST['cid'],$_REQUEST['title'],$_REQUEST['isbn'],
			$_REQUEST['publisher'],$_REQUEST['edition'],$_REQUEST['summary'],$_REQUEST['copies']));

			$h=$_REQUEST['cid'];
			$path=URL."successmessage/view/".$h;

		header("Location: $path");
	}	

	public static function countbook($value)
	{
		$st=Model::$dbcon->prepare("SELECT * FROM books where cid=?");
		$st->execute(array($value));
		 return $st->rowCount();
	}


	public static function getdewey($value)
	{
		$st=Model::$dbcon->prepare("SELECT * FROM category where c_category=?");
		$st->execute(array($value));
			$rec=$st->fetch(PDO::FETCH_ASSOC);

			$h=$rec['c_dewey'];

  			$st1=Model::$dbcon->prepare("SELECT * FROM dewey where d_id=?");
			$st1->execute(array($h));
			return $rec1=$st1->fetch(PDO::FETCH_ASSOC);
		  	
	}


	public static function getcategory($value)
	{
		$st=Model::$dbcon->prepare("SELECT * FROM category where c_category=?");
		$st->execute(array($value));
		return	$rec=$st->fetch(PDO::FETCH_ASSOC);
  			  	
	}

	public static function getbooks($value)
	{
		$st=Model::$dbcon->prepare("SELECT * FROM dewey where cid=?");
		$st->execute(array($value));
		return	$rec=$st->fetch(PDO::FETCH_ASSOC);
  			  	
	}





}	