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
			$path = str_replace('\\', '/', __DIR__);
			include($path.'/../database.php');
			
			$sql = "SELECT FileName FROM userfiles WHERE userfiles.name_store = '$name'";
			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
			}
			return $rows;
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
	}

 ?>