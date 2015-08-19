<?php 
/**
* 
*/
class Viewstudent extends Controllers
{
	
	function __construct()
	{
		parent::__construct();				
	}

	function view()
	{
		$record=$this->model->getstudent();
		$this->view->render('viewstudent',$record);
	}


}