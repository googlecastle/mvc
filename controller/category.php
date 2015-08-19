<?php 
/**
* 
*/
class Category extends Controllers
{
	
	function __construct()
	{	
	
			parent::__construct();
			$this->isloggin();
	}

	function view($val)
	{
	
		$record = $this->model->view($val);

		$this->view->render('category',$record);


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
