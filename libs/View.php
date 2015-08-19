<?php 
/**
* 
*/
class View 
{
	


	function render($name=false,$record=false)
	{	

		
		if($name=='login')
		{
		require 'view/template/header.php';
		require 'view/'.$name.'.php';
		
		}else{
		require 'view/template/header.php';
		require 'view/template/nav.php';
		require 'view/'.$name.'.php';
		require 'view/template/footer.php';
		}
	
	}

}