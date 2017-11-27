<?php 

	class cfs_model
	{
		public function getData()
		{
			include(__DIR__.'\..\database.php');
			$sql = "SELECT * FROM cfs_data";
			$result = $conn->query($sql);
			while($row = $result->fetch_array())
			{
				$rows[] = $row;
			}
			return $rows;
		}

		public function insertData($name,$address,$about,$view=0,$star=0,$image)
		{
			
		}
	}

 ?>