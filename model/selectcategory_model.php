<?php 

/**
* 
*/
class SelectCategory_Model extends Model
{
	
	function __construct()
	{

		parent::__construct();
		

	}

	function view($val)
	{
		$st=$this->db->prepare("SELECT * FROM category where c_dewey=? LIMIT 0, 100");
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

}