<?php 
	include'constants/settings.php';

	$email = $_POST['email'];
	if ($email != null) {
		global $servername;
		global $database;
		global $username;
		global $password;
		$conn = mysqli_connect($servername, $username, $password, $database);
		$query = 'INSERT INTO `mail` (`mail`) VALUES ("'.$email.'")';
		mysqli_query($conn, $query);
		mail($email, "Привет", "Дорова2Э");
	}
	

?>