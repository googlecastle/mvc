<?php 
/**
* 
*/
class Borrowerform extends Controllers
{
	
	function __construct()
	{
		parent::__construct();				
	}

	function view($hd)
	{
		$this->view->render('borrowerform',$hd);
	}

	function returnbook($val)
	{
		$this->model->delbook($val);
		$file=URL."addborrower/check/?search=".$_REQUEST['id'];
		header("Location: $file");
	}

}