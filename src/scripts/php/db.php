<?php
	Class Config
	{
		public function __construct()
		{
			$servername = "localhost";
			$username = "creui";
			$password = "....";
			$dbname = "yamm";

			$conn = new mysqli($servername, $username, $password, $dbname);

			$this->conn = $conn;
		}
	}
?>
