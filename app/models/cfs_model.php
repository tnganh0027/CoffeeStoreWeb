<?php 

	class cfs_model
	{
		public function getData($total_store_in_onepage)
		{
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');
			$sql = "SELECT * FROM cfs_data LIMIT $total_store_in_onepage OFFSET 0";
			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
			}

			return $rows;
		}

		public function totalPage($total_store_in_onepage)
		{
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');
			$sql = "SELECT * FROM cfs_data";
			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
			}

			/* divide into small page */

			$total_store = count($rows);
			$total_page = ceil($total_store/$total_store_in_onepage);
			return $total_page;
		}

		public function loadStore($page,$total_store_in_onepage)
		{
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');

			//position
			$offset = ($page-1)* $total_store_in_onepage;
			$sql = "SELECT * FROM cfs_data LIMIT $total_store_in_onepage OFFSET $offset";

			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
			}
			return $rows;
		}

		public function insertData($name,$address,$about,$view=0,$star=0,$image,$content,$open,$average_cost)
		{
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');

			$sql = "INSERT INTO cfs_data (image, name, address, open, average_cost, content, about, view, star)
					VALUES ('$image', '$name', '$address', '$open', '$average_cost', '$content', '$about', '$view', '$star');";
			if($conn->multi_query($sql) === TRUE)
				return TRUE;
			return FALSE; 
		}

		public function insertSomeImages($FilePath,$newFileName,$name_store)
		{
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');

			$sql = "INSERT INTO userfiles (FilePath, FileName, name_store)
					VALUES ('$FilePath','$newFileName','$name_store');";
			if($conn->multi_query($sql) === TRUE)
				return TRUE;
			return FALSE;
		}

		public function getStoreById($id)
		{
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');

			$sql = "SELECT * FROM cfs_data WHERE id = $id";
			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
			}
			return $rows;
		}

		public function getSomeImages($name)
		{
			$check = FALSE;
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');
			
			$sql = "SELECT FileName FROM userfiles WHERE userfiles.name_store = '$name'";
			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
				$check = TRUE;
			}
			if($check == TRUE)
			{
				return $rows;
			}
			else
			{
				return $check;
			}
		}

		public function updateViewById($id)
		{
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');

			$sql = "UPDATE cfs_data SET view = view + 1 WHERE id=$id";
			if ($conn->query($sql) === TRUE) {
				return TRUE;
			}
			return FALSE;
		}

		public function getStore($name)
		{
			$base_url = 'http://localhost/CoffeeStoreWeb/public';
			$content = '<ul class="searchresults">';
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');
			$sql = "SELECT * FROM cfs_data WHERE name LIKE '%".$name."%'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_array())
				{
					/*$content .= '<div class="item">';
					$content .= '<img class="ui avatar image" src="'.$row['image'].'">';
					$content .= '<div class="content">';
					$content .= '<a class="header" href="'.$base_url.'/home/detail_store/'.$row['id'].'">'.$row['name'].'</a>';
					$content .= '<div class="description">'.$row['address'].'</div>';
					$content .= '</div></div>';	*/	

					/* Fix a style of css here */
					$content .= '<li>';
					$content .= '<h2><a href="'.$base_url.'/home/detail_store/'.$row['id'].'">'. $row['name'] .'</a></h2>';
					$content .= '<img src="'.$row['image'].'">';
					$content .= '<p>'.$row['address'].'</p>';
					$content .= '</li>';
				}
				$content .= '</ul>';
				return $content;
			}
			else
			{
				return FALSE;
			}
		}

		public function totalResultView($total_store_in_onepage)
		{
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');
			$sql = "SELECT * FROM cfs_data WHERE 2*view > (SELECT MAX(view) FROM cfs_data)";
			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
			}

			/* divide into small page */

			$total_store = count($rows);
			$total_page = ceil($total_store/$total_store_in_onepage);
			return $total_page;
		}

		public function totalResultStore($name,$total_store_in_onepage)
		{
			$check = FALSE;
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');
			$sql = "SELECT * FROM cfs_data WHERE name LIKE '%".$name."%'";
			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
				$check = TRUE;
			}
			if($check == TRUE)
			{
				/* divide into small page */
				$total_store = count($rows);
				$total_page = ceil($total_store/$total_store_in_onepage);
				return $total_page;
			}
			else 
				return $check;
		}

		public function getResultView($total_store_in_onepage)
		{
			$check = FALSE;
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');
			$sql = "SELECT * FROM cfs_data WHERE 2*view > (SELECT MAX(view) FROM cfs_data) LIMIT $total_store_in_onepage OFFSET 0";
			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
				$check = TRUE;
			}
			if($check == TRUE)
				return $rows;
			else return $check;
		}

		public function getResultStore($name,$total_store_in_onepage)
		{
			$check = FALSE;
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');
			$sql = "SELECT * FROM cfs_data WHERE name LIKE '%".$name."%' LIMIT $total_store_in_onepage OFFSET 0";
			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
				$check = TRUE;
			}
			if($check == TRUE)
				return $rows;
			else return $check;
		}

		public function loadStoreResultView($page,$total_store_in_onepage)
		{
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');

			//position
			$offset = ($page-1)* $total_store_in_onepage;
			$sql = "SELECT * FROM cfs_data WHERE 2*view > (SELECT MAX(view) FROM cfs_data) LIMIT $total_store_in_onepage OFFSET $offset";

			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
			}
			return $rows;
		}

		public function loadStoreResultStore($name,$page,$total_store_in_onepage)
		{
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');

			//position
			$offset = ($page-1)* $total_store_in_onepage;
			$sql = "SELECT * FROM cfs_data WHERE name LIKE '%".$name."%' LIMIT $total_store_in_onepage OFFSET $offset";

			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
			}
			return $rows;
		}

		public function insertMenu($name,$recipe,$price,$name_store)
		{
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');

			$sql = "INSERT INTO cfs_menu (name, recipe, price, name_store)
					VALUES ('$name', '$recipe', '$price', '$name_store');";
			if($conn->multi_query($sql) === TRUE){
				$last_id = $conn->insert_id;
				return $last_id;
			}
		}

		public function getMenu($name_store)
		{
			$check = FALSE;
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');

			$sql = "SELECT * FROM cfs_menu WHERE name_store = '$name_store'";
			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
				$check = TRUE;
			}
			if($check == TRUE)
			{
				return $rows;
			}
			else
			{
				return $check;
			}

		}

		public function getUser($email,$user_password)
		{
			$check = FALSE;
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');

			$email = stripcslashes($email);
			$user_password = stripcslashes($user_password);
			$email = mysqli_real_escape_string($conn,$email);
			$user_password = mysqli_real_escape_string($conn,$user_password);

			$sql = "SELECT * FROM cfs_user WHERE user_email = '$email' AND user_pass = '$user_password'";
			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
				$check = TRUE;
			}
			if($check == TRUE)
				return $rows;
			else
				return FALSE;
		}

		public function getComment($id_store)
		{
			$check = FALSE;
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');

			$sql = "SELECT cfs_comment.id, cfs_comment.content, cfs_user.user_email FROM cfs_comment,cfs_user WHERE (cfs_user.id = cfs_comment.id_user AND cfs_comment.id_store = $id_store)";

			$result = $conn->query($sql);

			while($row = $result->fetch_array())
			{
				$rows[] = $row;
				$check = TRUE;
			}
			if($check == TRUE)
			{
				return $rows;	
			}
			else
			{
				return $check;
			}
		}

		public function getUserID($email)
		{
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');

			$sql = "SELECT id FROM cfs_user WHERE user_email = '$email'";
			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
			}
			return $rows;
		}

		public function insertComment($content,$email,$id_store)
		{
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');

			$sql = "INSERT INTO cfs_comment (content, id_user, id_store)
					VALUES ('$content', '$email', '$id_store');";
					
			if($conn->multi_query($sql) === TRUE){
				$last_id = $conn->insert_id;
				return $last_id;
			}
		}
	}

 ?>