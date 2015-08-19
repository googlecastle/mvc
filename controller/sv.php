<?php


class Sv extends Controllers
{
	
	function __construct()
	{
		parent::__construct();
		
		
		
	}

	function index()
	{
		$this->view->render('sv');
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