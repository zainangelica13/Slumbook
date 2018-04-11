<html>

<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "Slumbook";

	$conn = new mysqli($servername, $username, $password, $database);
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "CREATE TABLE Information ( 
	Name VARCHAR(50) NOT NULL,
	Nickname VARCHAR(20) NOT NULL,
	Age int NOT NULL,
	Birthday VARCHAR(20) NOT NULL,
	Zodiac VARCHAR(100) NOT NULL,
	Ambition VARCHAR(50) NOT NULL,
	Movie VARCHAR(100) NOT NULL,
	Subject VARCHAR(100) NOT NULL,
	Singer VARCHAR(100),
	Song VARCHAR(100),
	Actor VARCHAR(100) NOT NULL,
	Actress VARCHAR(100) NOT NULL,
	Color VARCHAR(100) NOT NULL,
	Book VARCHAR(100) NOT NULL,
	Tv VARCHAR(100) NOT NULL,
	Pet VARCHAR(100) NOT NULL,
	Cartoon VARCHAR(100) NOT NULL,
	Sports VARCHAR(100) NOT NULL,
	Describes VARCHAR(100) NOT NULL,
	Crush VARCHAR(100) NOT NULL,
	Regret VARCHAR(100) NOT NULL,
	Motto VARCHAR(100) NOT NULL,
	Habit VARCHAR(100) NOT NULL,
	Image_locationss blob NOT NULL
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Table Information created successfully";
	} else {
		echo "Error creating table: " . $conn->error;
	}


	$conn->close();

?>

</html>