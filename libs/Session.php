<?php 

/**
* 
*/
class Session 
{
	
	public static function init()
	{
		@session_start();	
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

	public static function destroy()
	{
		session_destroy();
		session_unset();
	}

	


}