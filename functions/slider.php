<?php 
	include __DIR__.'/../constants/settings.php';
	function get_slider(){

		global $servername;
		global $database;
		global $username;
		global $password;
		$conn = mysqli_connect($servername, $username, $password, $database);

		$query = "SELECT * FROM slider";
		$result = mysqli_query($conn, $query);
		$data = $result->fetch_all();
		return $data;

	}

?>