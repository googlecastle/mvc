<?php 

/**
* 
*/
class Reserved extends Controllers
{
	
	function __construct()
	{
		parent::__construct();
		$this->isloggin();

	}

	function view()
	{
		$this->view->render('Reserved');
	}



	function isloggin()
	{
		Session::init();
		$loggin=Session::get('loggin');
		if($loggin == false)
		{
			Session::destroy();
			header('Location: login');
			exit;
		}
	}
}