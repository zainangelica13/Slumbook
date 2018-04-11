<?php

require_once ('db.php');

if (isset($_POST['Submit'])) {
// echo "";
// }else{
// $file=$_FILES['image']['tmp_name'];
// $image = $_FILES["image"] ["name"];
// $image_name= addslashes($_FILES['image']['name']);
// $size = $_FILES["image"] ["size"];
// $error = $_FILES["image"] ["error"];
// 
// if ($error > 0){
// die("Error uploading file! Code $error.");
// }else{
// 	if($size > 10000000) //conditions for the file
// 	{
// 	die("Format is not allowed or file size is too big!");
// 	}
// 	
// else
// 	{
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$user = $_SESSION['User'];
				
				$sql = "SELECT Fullname FROM People WHERE Username = '" . $_SESSION['User'] . "'";
				$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
				if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) 
				{
					$fullname = $row["Fullname"];
				} 
				}
	
	$query="INSERT INTO Information 
			VALUES ('".$fullname."',
					'".$_GET['nickname']."',
					'".$_GET['age']."',
					'".$_GET['birthday']."',
					'".$_GET['zodiac']."',
					'".$_GET['ambition']."',
					'".$_GET['movies']."',
					'".$_GET['subject']."',
					'".$_GET['singer']."',
					'".$_GET['song']."',
					'".$_GET['actor']."',
					'".$_GET['actress']."',
					'".$_GET['color']."',
					'".$_GET['book']."',
					'".$_GET['tv']."',
					'".$_GET['food']."',
					'".$_GET['cartoon']."',
					'".$_GET['sport']."',
					'".$_GET['hth']."',
					'".$_GET['hth1']."',
					'".$_GET['hth2']."',
					'".$_GET['hth3']."',
					'".$_GET['hth4']."',
					'$location');"; 
	if ($conn->query($query) == TRUE) 
	{
		$_SESSION['Nickname'] = $_GET['nickname']; 
		$_SESSION['Age'] = $_GET['age'];   
		$_SESSION['Birthday'] = $_GET['birthday'];    
		$_SESSION['Zodiac'] = $_GET['zodiac']; 
		$_SESSION['Ambition'] = $_GET['ambition']; 
		$_SESSION['Movies'] = $_GET['movies'];   
		$_SESSION['Subject'] = $_GET['subject'];    
		$_SESSION['Songs'] = $_GET['song']; 
		$_SESSION['Singer'] = $_GET['singer']; 
		$_SESSION['Actor'] = $_GET['actor']; 
		$_SESSION['Actress'] = $_GET['actress'];   
		$_SESSION['Color'] = $_GET['color'];    
		$_SESSION['Book'] = $_GET['book']; 
		$_SESSION['TV'] = $_GET['tv']; 
		$_SESSION['Food'] = $_GET['food'];   
		$_SESSION['Cartoon'] = $_GET['cartoon'];    
		$_SESSION['Sport'] = $_GET['sport']; 
		$_SESSION['hth'] = $_GET['hth']; 
		$_SESSION['hth1'] = $_GET['hth1'];   
		$_SESSION['hth2'] = $_GET['hth2'];    
		$_SESSION['hth3'] = $_GET['hth3']; 
		$_SESSION['hth4'] = $_GET['hth4'];	
		$_SESSION['image'] = $location;		
		echo '<script language="javascript">';
		echo 'window.alert("Saved")';
		echo '</script>';
		require_once 'ViewInformation.php';
	} 
	else 	
	{
		echo "Error: " . $query . "<br>" . $conn->error;
	}
 $conn->close();

$conn->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location='index.php'</script>";
// }
}
// }
?>