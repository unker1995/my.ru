<?php

	include __DIR__.'/../constants/settings.php';
	

	function get_blog(){
		global $servername;
		global $database;
		global $username;
		global $password;
		$conn = mysqli_connect($servername, $username, $password, $database);

		$query = "SELECT id, nameArticle, articleDate, shortText FROM blog ORDER BY articleDate DESC";

		$result = mysqli_query($conn, $query);

		$data = $result->fetch_all();

		return $data;
	}
	
	function get_article(){

		global $servername;
		global $database;
		global $username;
		global $password;
		$conn = mysqli_connect($servername, $username, $password, $database);

		$query = "SELECT nameArticle, articleDate, content FROM blog WHERE id = ".$_GET['id'];

		$result = mysqli_query($conn, $query);

		$data = $result->fetch_row();

		return $data;



	}




?>