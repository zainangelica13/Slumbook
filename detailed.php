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

echo "<div class='detail'>";
    echo "<div class='detail-container'>";
	if(isset($_GET['Fullname']))
	{
		$id = $_GET['Fullname'];
		
		$query = $mysqli->query("SELECT Name,Nickname,Age,Birthday,Zodiac,Ambition FROM Information WHERE Name='$id'");
			echo "<dl>";
			echo "<dt>";
				$sql = "SELECT Name FROM Information WHERE Name = '$id'";
				if($sql){
						while($obj = $sql->fetch_object()){
							echo 'Fullname: '.$obj->Name;
						}
					}
			echo "</dt>";
			echo "<dd>";
			  $sql = "SELECT Nickname FROM Information WHERE Name = '$id'";
				if($sql){
						while($obj = $sql->fetch_object()){
							echo 'Fullname: '.$obj->Nickname;
						}
					}
			echo "</dd>";
			echo "<dt>";
			  $sql = "SELECT Age FROM Information WHERE Name = '$id'";
				if($sql){
						while($obj = $sql->fetch_object()){
							echo 'Fullname: '.$obj->Age;
						}
					}
			echo "</dt>";
			echo "<dd>";
			  $sql = "SELECT Birthday FROM Information WHERE Name = '$id'";
				if($sql){
						while($obj = $sql->fetch_object()){
							echo 'Fullname: '.$obj->Birthday;
						}
					}
			echo "</dd>";
			echo "<dt>";
			  $sql = "SELECT Zodiac FROM Information WHERE Name = '$id'";
				if($sql){
						while($obj = $sql->fetch_object()){
							echo 'Fullname: '.$obj->Zodiac;
						}
					}
			echo "</dt>";
			echo "<dd>";
			  $sql = "SELECT Ambition FROM Information WHERE Name = '$id'";
				if($sql){
						while($obj = $sql->fetch_object()){
							echo 'Fullname: '.$obj->Ambition;
						}
					}
			echo "</dd>";
		  echo "</dl>";
	}
	else
	{
		 echo "No people Found<br><br>";
	}
    echo "</div>";
    echo "<div class='detail-nav'>";
      echo "<button class='close'>";
        echo "Close";
      echo "</button>";
    echo "</div>";
  echo "</div>";

?>

</html>