<?php 

/**
* 
*/
class Login_Model extends Model
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
				Session::set('user',$_POST['username']); 
				$h= Session::get('user');
				$st=$this->db->prepare("select * from librarian where username = ?");
				$st->execute(array($h));
				$rec=$st->fetch(PDO::FETCH_ASSOC);
				$s=$rec['username'];

				if ($s==$h) {
					header('Location: ../Dashboard/view');
				}
				else
				{
				header("Location: ../login/?g=1");

				}
				
			}else{
				header('Location: ../login/?g=1');
			}
	}

}