<?php 

/**
* 
*/
class Controllers 
{
	
	function __construct()
	{

		$this->view=new View();
	}

	public function loadModel($name)
	{
		$path='model/'.$name.'_model.php';

		if (file_exists($path))
		{
			require 'model/'.$name.'_model.php';
			$namemodel = $name.'_model';
			$this->model=new $namemodel();
		}
	}

}