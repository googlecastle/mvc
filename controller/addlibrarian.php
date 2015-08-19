<?php 
/**
* 
*/
class addlibrarian extends Controllers
{
	
	function __construct($y=false)
	{
		
		parent::__construct();

	}
	

	function view()
	{


		$this->view->render('addlibrarian');
	}
	function add()
	{

// $uploaddir ='pdf/';
// $uploadfile=$uploaddir.basename($_FILES['uploaded_file']['name']);

// if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$uploadfile)){
// //echo '<b> file is valid and was successfully uploaded !!!</b>.\n';
// }

		echo "<script> alert('Successfully Added')  </script>";



		$target_dir = "assets/images/profilepict/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
		
						// Check if file already exists
			if (file_exists($target_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Check file size
			
			// Allow certain file formats
			
			// Check if $uploadOk is set to 0 by an error
		
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)) {
			        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			
			$file = pathinfo($target_file);

	
		$this->model->addlibrarian($file['basename']);

		
		
	}

	
}