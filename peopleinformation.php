<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Curriculum Vitae a Personal Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
<link href="inform/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="inform/js/jquery.min.js"></script>
<!-- Custom Theme files -->
 <link href="inform/css/dashboard.css" rel="stylesheet">
<link href="inform/css/style.css" rel='stylesheet' type='text/css' />

<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Curriculum Vitae Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
<!-- start menu -->
  
</head>
<body>
<!-- header -->
<div class="col-sm-3 col-md-2 sidebar">
		 <div class="sidebar_top">
			 <h1>
				<div class="profile_info">
					<div>
					<?php
						session_start();
						echo $_SESSION['User'];
					?>
					</div>
				</div> 
			 </h1> 
					<img src="inform/images/g3.jpg" alt=""/>
		 </div>
		<div class="details">
			 <h3>Full name</h3>
			 <p>
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
				
				$user = $_SESSION['User'];
				
				$sql = "SELECT Fullname FROM People WHERE Username = '" . $_SESSION['User'] . "'";
				$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
				if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) 
				{
					echo $row["Fullname"];
				} 
				}
				
				
			 ?>
			 </p>  	 
		
				<form action="Login.php" method="GET">	
				<div class="logout">
					<input type="submit" value="Logout" >
				</div>
				</form>	
			 
		</div>
		<div class="clearfix"></div>
</div>
<!---->
<link href="inform/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="inform/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="inform/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="inform/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!---//pop-up-box---->			
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	 <div class="content">
		 <div class="details_header">
			 <ul>
				 <li><a href="ViewingInformationTable.php"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>View Other Information</a></li>
				 <div id="small-dialog" class="mfp-hide">
					 <img src="inform/images/g4.jpg" alt=""/>
				 </div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
			 </ul>
		 </div>
		 <div class="company">
			 <h3 class="clr1">INFORMATION</h3>
			 <div class="company_details">
				 <h4>Fullname:  <span> <?php 
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
						
						$sql = "SELECT Name FROM Information WHERE Name = '" . $_GET['name'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Name"];
							break;
						} 
						} 
						
						 ?></span></h4>
				 <h4>Nickname:  <span> <?php 
						$sql = "SELECT Nickname FROM Information WHERE Name = '" . $_GET['name'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Nickname"];
							break;
						} 
						} 
						
						?></span></h4>
				 <h4>Age:  <span> <?php 
						$sql = "SELECT Age FROM Information WHERE Name = '" . $_GET['name'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Age"];
							break;
						} 
						} 
						
						 ?></span></h4>
				 <h4>Birthday:  <span> <?php 
						$sql = "SELECT Birthday FROM Information WHERE Name = '" . $_GET['name'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Birthday"];
							break;
						} 
						} 
						
						 ?></span></h4>
				 <h4>Zodiac:  <span> <?php 
						$sql = "SELECT Zodiac FROM Information WHERE Name = '" . $_GET['name'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Zodiac"];
							break;
						} 
						} 
						
					 ?></span></h4>
				 <h4>Ambition:  <span> <?php
						$sql = "SELECT Ambition FROM Information WHERE Name = '" . $_GET['name'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Ambition"];
							break;
						} 
						} ?> </span></h4>
			 </div>
		 </div>
		 <div class="copywrite">
			 <p>© 2015 Curriculum Vitae All Rights Reseverd | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		 </div>
	 </div>
</div>
<!---->
</body>
</html>