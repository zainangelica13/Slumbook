<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Slumbook";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
	
	$query="INSERT INTO People 
			VALUES ('Admin',
					'Admin',
					'Admin');"; 
	if ($conn->query($query) === TRUE) 
	{
		echo '<script language="javascript">';
		echo 'window.alert("Sign up successfully")';
		echo '</script>';
	} 
	else 	
	{
		echo "Error: " . $query . "<br>" . $conn->error;
	}
 $conn->close();
?>
</html>