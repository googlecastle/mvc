<?php 

/**
* 
*/
class Book_model extends Model
{
	
	function __construct()
	{

		parent::__construct();
		

	}

	function view($val)
	{
		$st=$this->db->prepare("SELECT * FROM books where cid=?");
			$st->execute(array($val));
			return $record=$st->fetchAll();
			 // foreach ($record as $key => $value) {
			 // 	echo $value['d_name'];
			 // }
			
	}


	public function getall($dewey)
	{

		//echo 'try this';

		$st=$this->db->prepare("SELECT * FROM category where c_dewey=?");
		$st->execute(array($dewey));
		 return $st->rowCount();
	}

	public static function countbook($value)
	{
		$st=Model::$dbcon->prepare("SELECT * FROM books where cid=?");
		$st->execute(array($value));
		 return $st->rowCount();
	}

	public static function getauthor($value)
	{
		$st=Model::$dbcon->prepare("SELECT * FROM authors where aid=?");
		$st->execute(array($value));
		$record=$st->fetch(PDO::FETCH_ASSOC);
		return $records=$record['aname'];
	}



		public static function countbookavailable($value)
	{
		$st=Model::$dbcon->prepare("SELECT * FROM books where bid=?");
		$st->execute(array($value));
		$avai=$st->fetch(PDO::FETCH_ASSOC);
		return $a=$avai['available'];
	}

	public static function countbookborrow($value)
	{
		$st=Model::$dbcon->prepare("SELECT * FROM borrow where bid=?");
		$st->execute(array($value));
		$avai=$st->rowCount();
		if ($avai <1) {
		return $a=0;
			
		}else
		{
		return $a=$avai;

		}
	}


}