<?php 
/**
* 
*/
class Addcategory extends Controllers
{
	
	function __construct()
	{
		parent::__construct();
		$this->isloggin();
	}

		function view($val)
	{
		
		$record=$this->model->getdewey($val);
		$this->view->render('addcategory',$record);

	}

	function addcat()
	{
		$this->model->save();
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