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
	/*if($_GET['nickname'] =! "" && $_GET['age'] =! ""  && $_GET['birthday'] =! "" && $_GET['zodiac'] =! "" && $_GET['ambition'] =! "" && $_GET['movies'] =! "" && $_GET['subject'] =! ""
	&& $_GET['singer'] =! "" && $_GET['song'] =! "" && $_GET['actor'] =! "" && $_GET['actress'] =! "" && $_GET['color'] =! "" && $_GET['book'] =! "" && $_GET['book'] =! ""
	&& $_GET['tv'] =! "" && $_GET['food'] =! "" && $_GET['cartoon'] =! "" && $_GET['sport'] =! "")*/
	$query="UPDATE Information 
			SET Name = '".$_GET['name']."',
				Nickname = '".$_GET['nickname']."',
				Age = '".$_GET['age']."',
				Birthday = '".$_GET['birthday']."',
				Zodiac = '".$_GET['zodiac']."',
				Ambition = '".$_GET['ambition']."',
				Movie = '".$_GET['movies']."',
				Subject = '".$_GET['subject']."',
				Singer = '".$_GET['singer']."',
				Song = '".$_GET['song']."',
				Actor = '".$_GET['actor']."',
				Actress = '".$_GET['actress']."',
				Color = '".$_GET['color']."',
				Book = '".$_GET['book']."',
				Tv = '".$_GET['tv']."',
				Pet = '".$_GET['food']."',
				Cartoon = '".$_GET['cartoon']."',
				Sports = '".$_GET['sport']."',
				Describes = '".$_GET['hth']."',
				Crush = '".$_GET['hth1']."',
				Regret = '".$_GET['hth2']."',
				Motto = '".$_GET['hth3']."',
				Habit = '".$_GET['hth4']."' WHERE Name = '".$_GET['name']."'"; 
				
	if ($conn->query($query) === TRUE) 
	{	
		echo '<script language="javascript">';
		echo 'window.alert("Update Successfully")';
		echo '</script>';
		require_once 'peopleadmininformation1.php';
	} 
	else 	
	{
		echo "Error: " . $query . "<br>" . $conn->error;
	}
 $conn->close();
?>
</html>