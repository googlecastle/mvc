<?php 
/**
* 
*/
class Edit extends Controllers
{
	
	function __construct()
	{
		parent::__construct();
		$this->isloggin();
	}

	function view($val)
	{
		$record=$this->model->getall($val);
		$this->view->render('edit',$record);
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

	function save()
	{
		

		$this->model->editall();
	}


}