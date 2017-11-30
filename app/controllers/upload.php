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
			$content = $_POST['content'];
			$open = $_POST['open'];
			$average_cost = $_POST['average_cost'];
			
			/* Upload image */
			$destination_path = getcwd().DIRECTORY_SEPARATOR;
			$destination_path = str_replace('\\', '/', $destination_path);
			$target_file = $destination_path . '/' . 'uploads' . '/' . basename( $_FILES["image"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["image"]["tmp_name"]);
			    if($check !== false) {
			        //echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        //echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($target_file)) {
			    //echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Check file size
			if ($_FILES["image"]["size"] > 500000) {
			    //echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {  /*$target_file*/
			        //echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
			    } else {
			        //echo "Sorry, there was an error uploading your file.";
			    }
			}
			/*              */

			$base_url = 'http://localhost/CoffeeStoreWeb/public/';
			$image = $base_url . "uploads/" . basename($_FILES["image"]["name"]);



			/*		insert some images */
			$errors = array();
			
			$extension = array("jpeg","jpg","png","gif");
			
			$bytes = 1000000;
			$allowedKB = 100;
			$totalBytes = $allowedKB * $bytes;
			
			//$conn = mysqli_connect("localhost","root","","phpfiles");	
			$target = $destination_path. '/' . 'some_images';
			foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
			{
				$uploadThisFile = true;
				
				$file_name=$_FILES["files"]["name"][$key];
				$file_tmp=$_FILES["files"]["tmp_name"][$key];
				
				$ext=pathinfo($file_name,PATHINFO_EXTENSION);

				if(!in_array(strtolower($ext),$extension))
				{
					array_push($errors, "File type is invalid. Name:- ".$file_name);
					$uploadThisFile = false;
				}				
				
				if($_FILES["files"]["size"][$key] > $totalBytes){
					array_push($errors, "File size must be less than 1MB. Name:- ".$file_name);
					$uploadThisFile = false;
				}
				
				if(file_exists("some_images/".$_FILES["files"]["name"][$key]))
				{
					array_push($errors, "File is already exist. Name:- ". $file_name);
					$uploadThisFile = false;
				}
				
				if($uploadThisFile){
					$filename=basename($file_name,$ext);
					$newFileName=$filename.$ext;				
					move_uploaded_file($_FILES["files"]["tmp_name"][$key],"$target/".$newFileName);
					
					//$query = "INSERT INTO UserFiles(FilePath, FileName) VALUES('Upload','".$newFileName."')";
					$some_images = $base_url . "some_images/" . $newFileName;
					$data = $this->model('cfs_model');
					$result = $data->insertSomeImages('some_images',$some_images,$name);
					//mysqli_query($conn, $query);
					if($result === FALSE)
					{
						echo 'Failure up anh khong thanh cong';
						return;
					}		
				}
			}
			
			$data = $this->model('cfs_model');
			if($data->insertData($name,$address,$about,$view,$star,$image,$content,$open,$average_cost))
			{
				echo 'Done';
			}
			else 
			{
				echo 'Failure ! Insert khong thanh cong';
			}
		}

		public function member()
		{
			$this->view('manage/upload_member_view');
		}

		public function insert_data_member()
		{
			$name = $_POST['name'];
			$idname = $_POST['idname'];
			$about = $_POST['about'];
			$link_fb = $_POST['link_fb'];
			$link_ins = $_POST['link_ins'];
			$link_tw = $_POST['link_tw'];

			/* Upload image */
			$destination_path = getcwd().DIRECTORY_SEPARATOR;
			$destination_path = str_replace('\\', '/', $destination_path);
			$target_file = $destination_path . '/' . 'uploads' . '/' . basename( $_FILES["image"]["name"]);
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

			$data = $this->model('cfm_model');
			if($data->insertData($image,$about,$name,$idname,$link_fb,$link_ins,$link_tw))
			{
				echo 'Done';
			}
			else 
			{
				echo 'Failure';
			}
		}
	}
 ?>