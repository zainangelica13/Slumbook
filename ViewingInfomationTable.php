<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Responsive Table + Detail View</title>
  
  

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="table/css/style.css">
  
</head>

	<h1>
		Information
	</h1>
	

	
	<p>
		<form action="peopleinformation.php" method="GET">
			Name: <input type="text" name="name" id="demo"/>
			<input type="submit" value="View data"/>
		</form>
	</p>
	
<?php


?>
	
	
		

<body>
<form action="" method="GET">

  <input name="search" type="search" autofocus>
  <input type="submit" name="button">

</form>
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
 
if(isset($_GET['button']))
{    
		$search=$_GET['search'];

		$query="SELECT Fullname FROM People WHERE Fullname LIKE '%{$search}%'";
		$result = $conn->query($query);
		 
		echo "<main>";
		echo "<table id='tableID' onclick='myFun(event)'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>";
		echo "Full Name";
		echo "</th>";
		echo "</tr>";
		echo "</thead>";
		echo "<tfoot>";
		echo "<tr>";
		echo "<th colspan='3'>";
		echo "People";
		echo "</th>";
		echo "</tr>";
		echo "</tfoot>";
			
			if ($result->num_rows > 0) 
			{
				while($row = $result->fetch_assoc()) 
				{
					echo "<tbody>";
					echo "<tr>";
					echo "<td data-title='Full Name'>";
					echo $row['Fullname'];
					echo "</td>";
					echo "</tr>";
					echo "</tbody>";
				}
			}
			else
			{
				echo "No people Found<br><br>";
			}
			echo "</table>";
			
		
}
else
{     
	
	$query="SELECT Fullname FROM People";
	$result = $conn->query($query);
	
	echo "<main>";
	echo "<table id='tableID' onclick='myFun(event)'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>";
	echo "Full Name";
	echo "</th>";
	echo "<th></th>";
	echo "</tr>";
	echo "</thead>";
	echo "<tfoot>";
	echo "<tr>";
	echo "<th colspan='3'>";
	echo "People";
	echo "</th>";
	echo "</tr>";
	echo "</tfoot>";

	if ($result->num_rows > 0) 
			{
				while($row = $result->fetch_assoc()) 
				{
					echo "<tbody>";
					echo "<tr>";
					echo "<td data-title='Full Name'>";
					echo $row['Fullname'];
					echo "</td>";
					echo "</tr>";
					echo "</tbody>";
				}
			}
			else
			{
				echo "No people Found<br><br>";
			}
			echo "</table>";
}
?>

	<script type="text/javascript">
		function myFun(e){
		if(!e.target)
			alert(e.srcElement.innerHTML);
		else
			var txt;
			txt = "" + e.target.innerHTML;
			document.getElementById("demo").value = txt;
			//alert(e.target.innerHTML);
			//var post = event.target;
		}
    </script>

 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src='table/js/index.js'></script>

</body>

</html>
