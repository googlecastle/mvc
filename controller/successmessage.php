<?php 
/**
* 
*/
class Successmessage extends Controllers	
{
	function __construct()
	{
		parent::__construct();
		
	}

	function view($val)
	{
		$record=$val;
		$this->view->render('successmessage',$record);
	}

}