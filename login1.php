<html>
<?php
	session_start();
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
	
	$sql = "SELECT * FROM People WHERE Username = '" .$_GET['Username']. "' and Password = '" .$_GET['Password']."'";
	$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
	$count = mysqli_num_rows($result);

	if ($count == 1)
	{
		if ($_GET['Username'] == "Admin")
		{
			$_SESSION['User'] = $_GET['Username'];     
			header("location: Adminview.php");
		}
		else
		{
			$_SESSION['User'] = $_GET['Username'];     
			header("location: InsertInformation.php");
		}
	} 
	else
	{
		echo '<script language="javascript">';
		echo 'window.alert("ERROR")';
		echo '</script>';
		require_once 'Login.php';
	}
	$conn->close();
?>
</html>