<html>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Slumbook";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	$fullname = 
	
	$user = $_SESSION['User'];
				
				$sql = "SELECT Fullname FROM People WHERE Username = '" . $_SESSION['User'] . "'";
				$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
				if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) 
				{
					$fullname = $row["Fullname"];
				} 
				}
	
	$query="DELETE Information 
			Where Name = '".$fullname."'"; 
	if ($conn->query($query) === TRUE) 
	{
		echo '<script language="javascript">';
		echo 'window.alert("Delete Successfully")';
		echo '</script>';
		require_once 'ViewInformation.php';
	} 
	else 	
	{
		echo "Error: " . $query . "<br>" . $conn->error;
	}
 $conn->close();
?>
</html>