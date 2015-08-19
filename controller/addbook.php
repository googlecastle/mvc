<?php 
/**
* 
*/
class Addbook extends Controllers
{
	
	function __construct()
	{	
	
			parent::__construct();
			$this->isloggin();
	}

	function view($val)
	{
	
		//$record = $this->model->view($val);

		$this->view->render('addbook',$val);


	}

	public static function getcategory($value)
	{
		
		$st=Modl::$db->prepare("SELECT * FROM books where cid=?");
		$st->execute(array($value));
		 return $st->rowCount();
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



	public function bookadd()
	{
			
		$this->model->addbooks();
	}
	


}
