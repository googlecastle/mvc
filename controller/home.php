<?php 
/**
* 
*/
class Home extends Controllers
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->isloggin();
		
	}

	function index()
	{
		$this->view->render('home');
	}

	function validate()
	{
		echo "home validate";
	}

	function logout()
	{
		Session::init();
		$_SESSION=null;
		//Session::set('loggin',false);
		Session::destroy();
		header('Location: ../login');
		exit;
	}


	function isloggin()
	{
		Session::init();
		$loggin=Session::get('loggin');
		if ($loggin == false) {
			Session::destroy();
			header('Location: login');
			exit;
		}
	}

}
