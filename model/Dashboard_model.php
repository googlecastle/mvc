<?php 
/**
* 
*/
class Dashboard_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	function view($y)
	{
		
		$t=$this->db->prepare("SELECT * FROM librarian where username = ?");
		$t->execute(array($y));

		return $record=$t->fetchAll();
//		foreach ($record as $key => $value) {
	//		echo $value['fname'];
	//	}

		

	}
}