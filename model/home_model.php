<?php 	
		
/**
* 
*/
class Home_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();			
	}

	function viewall()
	{
		$st=$this->db->prepare("SELECT * FROM books");
		$st->execute();
		return $st->fetchAll();
	}



	function view()
	{
		$st=$this->db->prepare("SELECT * FROM dewey");
			$st->execute();
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




	public static function countcategory($value)
	{
		$st=Model::$dbcon->prepare("SELECT * FROM category where c_dewey=?");
		$st->execute(array($value));
		 return $st->rowCount();
	}










}