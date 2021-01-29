<?php

	class DbController {

		private $host = "localhost";

		private $user = "root";

		private $pass = "";

		private $db_name = "phpsample";

		private $conn;

		function __construct() 
		{
			$this->conn = $this->connectDB();
		}

		function connectDB()
		{
			$conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db_name);
			return $conn;
		}

		function RunQuery($query)
		{
			$result = mysqli_query($this->conn, $query);
			while ($row = mysqli_fetch_assoc($result)) {
				$resultset[] = $row;
			}
			if (! empty($resultset)){
				return $resultset;
			}else{
				return "no data found";
			}
		}
	}

 ?>