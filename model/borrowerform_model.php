<?php 
/**
* 
*/
class Borrowerform_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	function delbook($val1)
	{


		date_default_timezone_set('Asia/Manila'); 
		$dat = date('Y-m-d H:i:s');

		$st=$this->db->prepare("SELECT * FROM borrow where brid = ?");
		$st->execute(array($val1));
		$s=$st->fetch(PDO::FETCH_ASSOC);
		
		$rt=$this->db->prepare("INSERT INTO returnbooks (brid,sid,bid,date,returnbook) VALUES (?,?,?,?,?)");
		$rt->execute(array($s['brid'],$s['sid'],$s['bid'],$s['date'],$dat));

		$t=$this->db->prepare("DELETE FROM borrow where brid =? ");
		$t->execute(array($val1));
	}

}