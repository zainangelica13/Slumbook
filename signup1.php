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
			VALUES ('".$_GET['Fullname']."',
					'".$_GET['Username']."',
					'".$_GET['Password']."');"; 
	if ($conn->query($query) === TRUE) 
	{
		echo '<script language="javascript">';
		echo 'window.alert("Sign up successfully")';
		echo '</script>';
		header("location: Login.php");
	} 
	else 	
	{
		echo "Error: " . $query . "<br>" . $conn->error;
	}
 $conn->close();
?>
</html>