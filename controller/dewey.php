<?php 
/**
* 
*/
class Dewey extends Controllers
{
	
	function __construct()
	{	
		parent::__construct();
		$this->isloggin();
	}


	function index($val)
	{
		$this->view->record = $this->model->view();
		$this->view->id=$val;

		$this->view->render('dewey');


	}

	function validate()
	{
		echo "home validate";
	}

	function get($v)
	{
		$this->view->t= $this->model->getall($val);
		//return $this->model->getall($val);
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
