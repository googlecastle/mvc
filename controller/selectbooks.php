<?php 
/**
* 
*/
class Selectbooks extends Controllers
{
	
	function __construct()
	{	
	
			parent::__construct();
			$this->isloggin();
	}

	function view($val)
	{
	
		$record = $this->model->view($val);

		$this->view->render('selectbooks',$record);


	}

	function validate()
	{
		echo "home validate";
	}

	function get($val)
	{
		$this->view->t= $this->model->getall($val);
		//return $this->model->getall($val);
	}


	function addbook($val)
	{
			$this->model->borrowbook($val,$_REQUEST['id']);
			
					echo "<script> alert('Book Borrowed Successfully'); </script>";
				
					$path=URL."addborrower/check/?search=".$_REQUEST['id']	;
					header("Location: $path");
					echo "<script> alert('Book Borrowed Successfully'); </script>";
			
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
