<?php 
	class Upload extends Controller
	{
		public function index()
		{
			$this->view('manage/upload_view');
		}

		public function insert_data()
		{
			$name = $_POST['name'];
			$address = $_POST['address'];
			$about = $_POST['about'];
			$view = $_POST['view'];
			$star = $_POST['star'];
			
			/* Upload image */
			$destination_path = getcwd().DIRECTORY_SEPARATOR;
			$target_file = $destination_path . '\\' . 'uploads' . '\\' . basename( $_FILES["image"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["image"]["tmp_name"]);
			    if($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($target_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Check file size
			if ($_FILES["image"]["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {  /*$target_file*/
			        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}
			/*              */

			$base_url = 'http://localhost/CoffeeStoreWeb/public/';
			$image = $base_url . "uploads/" . basename($_FILES["image"]["name"]);


			var_dump($image);

			$data = $this->model('cfs_model');
			$data->insertData($name,$address,$about,$view,$star,$image='');
			die();
		}
	}
 ?>