<?php 

/**
* 
*/
class Model extends PDO
{
	public static $dbcon=null;
	function __construct()
	{
		$this->db= new PDO("mysql:host=localhost;dbname=library",'root','');
		self::$dbcon= new PDO("mysql:host=localhost;dbname=library",'root','');


	}

	
}