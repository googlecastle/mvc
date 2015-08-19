<?php 

/**
* 
*/
class SelectBooks_model extends Model
{
	
	function __construct()
	{

		parent::__construct();
		

	}

	function view($val)
	{
		$st=$this->db->prepare("SELECT * FROM books where cid=?");
			$st->execute(array($val));
			return $record=$st->fetchAll();
			 // foreach ($record as $key => $value) {
			 // 	echo $value['d_name'];
			 // }
			
	}


	public function getall($dewey)
	{

		//echo 'try this';

		$st=$this->db->prepare("SELECT * FROM category where c_dewey=?");
		$st->execute(array($dewey));
		 return $st->rowCount();
	}

	public static function countbook($value)
	{
		$st=Model::$dbcon->prepare("SELECT * FROM books where bid=?");
		$st->execute(array($value));
		 return $st->rowCount();
	}

	public static function countbookavailable($value)
	{
		$st=Model::$dbcon->prepare("SELECT * FROM books where bid=?");
		$st->execute(array($value));
		$avai=$st->fetch(PDO::FETCH_ASSOC);
		return $a=$avai['available'];
	}

	public static function countbookborrow($value)
	{
		$st=Model::$dbcon->prepare("SELECT * FROM borrow where bid=?");
		$st->execute(array($value));
		$avai=$st->rowCount();
		if ($avai <1) {
		return $a=0;
			
		}else
		{
		return $a=$avai;

		}
	}


	public static function getauthor($value)
	{
		$st=Model::$dbcon->prepare("SELECT * FROM authors where aid=?");
		$st->execute(array($value));
		$record=$st->fetch(PDO::FETCH_ASSOC);
		return $records=$record['aname'];
	}

	function borrowbook($val1,$val2)
	{


date_default_timezone_set('Asia/Manila'); 
$dat = date('Y-m-d H:i:s');

$nextWeek = time() + (1 * 24 * 60 * 60);
                   // 7 days; 24 hours; 60 mins; 60 secs
// echo 'Now:       '. date('Y-m-d') ."\n";
// echo 'Next Week: '. date('Y-m-d h:i:s A', $nextWeek) ."\n";
 $return1 = date('Y-m-d h:i:s A', $nextWeek);



		
		$st=$this->db->prepare("INSERT INTO borrow (sid,bid,date,datereturn) VALUES (?,?,?,?)");
		$st->execute(array($val2,$val1,$dat,$return1));

			
				echo "<script> alert('Book Borrowed Successfully'); </script>";

		
	
	}


}