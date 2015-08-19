<?php 

/**
* 
*/
class Addstudent extends Controllers
{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function view()
	{

		
		$this->view->render('addstudent');

	}

	function add()
	{
		$this->model->add();
	}



}