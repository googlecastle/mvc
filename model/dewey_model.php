<?php 

/**
* 
*/
class Dewey_model extends Model
{
	
	function __construct()
	{

		parent::__construct();
		

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


	public static function countcategory($value)
	{
		$st=Model::$dbcon->prepare("SELECT * FROM category where c_dewey=?");
		$st->execute(array($value));
		 return $st->rowCount();
	}


}