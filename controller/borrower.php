<?php 
/**
* 
*/
class Borrower extends Controllers
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->isloggin();
	}

	function index()
	{
		$this->view->render('book');
	}

	function validate()
	{
		echo "home validate";
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
