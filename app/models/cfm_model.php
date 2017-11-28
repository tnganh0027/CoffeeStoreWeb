<?php 
	class cfm_model
	{
		public function getData()
		{
			include(__DIR__.'\..\database.php');
			$sql = "SELECT * FROM cfm_data";
			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
			}
			return $rows;
		}

		public function insertData($image,$about,$name,$idname,$link_fb='',$link_ins='',$link_tw='')
		{
			include(__DIR__.'\..\database.php');
			$sql = "INSERT INTO cfm_data (image, about, name, idname, link_fb, link_ins, link_tw)
					VALUES ('$image', '$about', '$name', '$idname', '$link_fb', '$link_ins', '$link_tw');";
			if($conn->multi_query($sql) === TRUE)
				return TRUE;
			return FALSE;
		}
	}
 ?>