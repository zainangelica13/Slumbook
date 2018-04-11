<html>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Slumbook";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

		header("location: Login.php");
		unset($_SESSION['User']);
?>
</html>