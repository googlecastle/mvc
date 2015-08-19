<?php 

/**
* 
*/
class Addborrower extends Controllers
{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function view()
	{

		
		$this->view->render('addborrower');

	}



	function check()
	{
		
		$result=$this->model->getstudent($_REQUEST['search']);
		$result2=$this->model->borrowedbooks($_REQUEST['search']);
		$this->view->render('borrowerform',$result,$result2);
		

	}

	function cancel()
	{
		Session::init();
		
		Session::set('student',null);
	}


}