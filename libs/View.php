<?php 
/**
* 
*/
class View 
{
	


	function render($name=false,$record=false,$record2=false)
	{	

		
		if($name=='login')
		{
		require 'view/template/header.php';
		require 'view/'.$name.'.php';
		

		
		}elseif($name=='Dashboard')
		{
		require 'view/template/header.php';
		//require 'view/template/header2.php';
		require 'view/'.$name.'.php';
		require 'view/template/footer.php';
		}
		else{
		require 'view/template/header.php';
		require 'view/template/nav.php';
		require 'view/'.$name.'.php';
		require 'view/template/footer.php';
		}
	
	}

	public function got($val)
	{
		$st=$this->db->prepare("SELECT * FROM category where c_dewey=?");
		$st->execute(array($val));
		 return $st->rowCount();
	}

}