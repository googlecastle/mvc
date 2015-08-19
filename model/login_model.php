<?php 

/**
* 
*/
class Login_model extends Model
{
	
	function __construct()
	{

		parent::__construct();
	}

	function run()
	{
		$st=$this->db->prepare("SELECT * FROM librarian where username = ? AND password=?");
			$st->execute(array($_POST['username'], md5($_POST['password'])));
			
			$count = $st->rowCount();

			if ($count>0) {
				Session::init();
				Session::set('loggin',true); 
				header('Location: ../home/');
			}else{
				header('Location: ../login');
			}
	}

}