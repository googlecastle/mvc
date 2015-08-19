<?php 

/**
* 
*/
class Result extends Controllers
{
	
	function __construct()
	{
		parent::__construct();
	}


	function view()
	{
		$result=$this->model->search($_REQUEST['search'],$_REQUEST['br']);
		$this->view->render('result',$result);
	}


}