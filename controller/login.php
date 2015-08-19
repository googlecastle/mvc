<?php


class Login extends Controllers
{
	
	function __construct()
	{
		parent::__construct();
		
		
		
	}

	function index()
	{
		$this->view->render('login');
	}
	
	function validate()
	{
		
		$this->model->run();
		

	}

	function log()
	{

	//	echo "log <br>";
	}

}