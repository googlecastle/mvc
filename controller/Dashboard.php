<?php 

/**
* 
*/
class Dashboard extends Controllers
{
	
	function __construct()
	{
		parent::__construct();
		$this->isloggin();

	}

	function view()
	{
		Session::init();
		$y=Session::get('user');
		$Record=$this->model->view($y);
		$this->view->render('Dashboard',$Record);
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