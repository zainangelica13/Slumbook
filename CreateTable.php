<html>

<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "slumbook";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
	
	$sql = "CREATE TABLE People ( 
	Fullname VARCHAR(50) NOT NULL,
	Username VARCHAR(20) PRIMARY KEY,
	Password VARCHAR(20)
	)";

	if ($conn->query($sql) === TRUE) {
		echo "Table Signup created successfully";
	} else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();

?>

</html>