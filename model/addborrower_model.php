<?php 
/**
* 
*/
class Addborrower_model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	function getstudent($val)
	{
		$st=$this->db->prepare("SELECT * FROM student where sid=?");
		$st->execute(array($val));
		return $result=$st->fetchAll();
	}

	public static function set($value,$key)
	{
		$_SESSION[$value]=$key;
	}

	
	public static function get($value)
	{
		if (isset($_SESSION[$value])) {
			return $_SESSION[$value];
		}
		
	}

	function borrowedbooks($val)
	{
        $st=$this->db->prepare("SELECT books.title, borrow.brid,borrow.datereturn,borrow.date,books.bid,books.author FROM books,borrow where books.bid =borrow.bid && borrow.sid = $val && borrow.flag = 0 ORDER BY borrow.brid desc");
         $st->execute();
         return $st->fetchAll();		
	}
}