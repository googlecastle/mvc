<?php 

/**
* 
*/
class Pdoconnector extends PDO
{
	
	public $conn;

	function connect()
	{
		try
		{
			$this->conn= new PDO("mysql:host=localhost;dbname=library",'root','');
			echo "connected";
		} catch (Exception $e) {
			
			echo 'You cannot connect '.$e;

		}
	}
}