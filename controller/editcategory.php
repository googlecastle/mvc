<?php 

/**
* 
*/
class Editcategory extends Controllers
{
	
	function __construct()
	{
		parent::__construct();
	}


	function view($val)
	{
		$record=$this->model->getall($val);

		$this->view->render('editcategory',$record);

	}

	function save()
	{
		$this->model->edit();
	}

}