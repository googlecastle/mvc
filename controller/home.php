<?php 
/**
* 
*/
class Home extends Controllers
{
	
	function __construct()
	{
		
		parent::__construct();

	}

	function index()
	{

		$result= $this->model->viewall();
		$this->view->record = $this->model->view();
		$this->view->render('home',$result);

	
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
