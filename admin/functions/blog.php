<?php

	include __DIR__.'/../../constants/settings.php'; 

	if ($_GET['id'] != null && $_GET['action'] == 'delete') {

		global $servername;
		global $database;
		global $username;
		global $password;
		$conn = mysqli_connect($servername, $username, $password, $database);
		$query = "DELETE FROM blog WHERE id = ".$_GET['id'];
		mysqli_query($conn, $query);
		header("Location: /admin/blog/");

	} 
	function get_article_for_admin(){

		if ($_GET['id'] != null && $_GET['action'] == 'update') {

			global $servername;
			global $database;
			global $username;
			global $password;

			$conn = mysqli_connect($servername, $username, $password, $database);

			$query = "SELECT nameArticle, shortText, content, id FROM blog WHERE id = ".$_GET['id'];
			$result = mysqli_query($conn, $query);
			$data = $result->fetch_row();
			return $data;
		} 
	}

	
	if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['shortText']) && !empty($_POST['shortText']) && isset($_POST['content']) && !empty($_POST['content'])) {
		global $servername;
		global $database;
		global $username;
		global $password;
		$conn = mysqli_connect($servername, $username, $password, $database);
		var_dump($_POST['id']);
		if ($_POST['id'] == '') {
			$query = 'INSERT INTO blog (nameArticle, shortText, content) VALUES ("'.$_POST['name'].'","'.$_POST['shortText'].'","'.$_POST['content'].'")';
		} else {
			$query = "UPDATE blog SET nameArticle = '".$_POST['name']."', shortText = '".$_POST['shortText']."', shortText = '".$_POST['shortText']."' WHERE id=".$_POST['id'];
		}
		
		mysqli_query($conn, $query);

	}


?>