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
<script src="js/jquery.min.js"></script>
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
				<div class="logout">
					<form action="Login.php" method="GET">	
					<input type="submit" value="Logout" >
				</div>
				</form>	
			
			 
			 
		</div>
		<div class="clearfix"></div>
</div>
<!---->
<link href="inform/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="inform/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!---//pop-up-box---->			
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	 <div class="content">
		 <div class="details_header">
			 <ul>
				 <li><a href="AdminView.php"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>View Other Information</a></li>
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
		 <form action="Update.php" method="GET" enctype="multipart/form-data">	
		 <div class="company contact-grid">
			 <h3 class="clr1">INFORMATION</h3> <br>
					<input type="text" placeholder="Name" name="name" value="<?php echo $_GET['namee']?>">			
					<input type="text" placeholder="Nickname" name="nickname" value="<?php 
						$sql = "SELECT Nickname FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row['Nickname'];
							break;
						} 
						} 
						
						?>">					
					<input type="text" placeholder="Age"  name="age" value="<?php 
						$sql = "SELECT Age FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Age"];
							break;
						} 
						} 
						
						 ?>">
					<input type="date" placeholder="Birthday"  name="birthday" value="<?php 
						$sql = "SELECT Birthday FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Birthday"];
							break;
						} 
						} 
						
						 ?>">		
					<input type="text" placeholder="Zodiac Sign"  name="zodiac" value="<?php 
						$sql = "SELECT Zodiac FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Zodiac"];
							break;
						} 
						} 
						
					 ?>">	
					<input type="text" placeholder="Ambition" name="ambition" value="<?php
						$sql = "SELECT Ambition FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Ambition"];
							break;
						} 
						} ?>">																
						 </div>
		 
		 <div class="company contact-grid">
			 <h3 class="clr1">FAVORITES</h3> <br>
					<input type="text" placeholder="Movie" name="movies" value="<?php
						$sql = "SELECT Movie FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Movie"];
							break;
						} 
						} ?>">
					<input type="text" placeholder="Subject" name="subject" value="<?php
						$sql = "SELECT Subject FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Subject"];
							break;
						} 
						} ?>">
					<input type="text" placeholder="Singer/band" name="singer" value="<?php
						$sql = "SELECT Singer FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Singer"];
							break;
						} 
						} ?>">							
					<input type="text" placeholder="Song" name="song" value="<?php
						$sql = "SELECT Song FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Song"];
							break;
						} 
						} ?>">					
					<input type="text" placeholder="Actors" name="actor" value="<?php
						$sql = "SELECT Actor FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Actor"];
							break;
						} 
						} ?>">						
					<input type="text" placeholder="Actress" name="actress" value="<?php
						$sql = "SELECT Actress FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Actress"];
							break;
						} 
						} ?>">
					<input type="text" placeholder="Color" name="color" value="<?php
						$sql = "SELECT Color FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Color"];
							break;
						} 
						} ?>">											
					<input type="text" placeholder="Book" name="book" value="<?php
						$sql = "SELECT Book FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Book"];
							break;
						} 
						} ?>">						
					<input type="text" placeholder="TV/Shows" name="tv" value="<?php
						$sql = "SELECT Tv FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Tv"];
							break;
						} 
						} ?>">						
					<input type="text" placeholder="Pet" name="food" value="<?php
						$sql = "SELECT Pet FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Pet"];
							break;
						} 
						} ?>">						
					<input type="text" placeholder="Cartoon Character" name="cartoon" value="<?php
						$sql = "SELECT Cartoon FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Cartoon"];
							break;
						} 
						} ?>">	
					<input type="text" placeholder="Sport" name="sport" value="<?php
						$sql = "SELECT Sports FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Sports"];
							break;
						} 
						} ?>">											
		 </div>
		 
		 <div class="company contact-grid">
			 <h3 class="clr1">HEART TO HEART</h3> <br>
					<input type="text" placeholder="Describe yourself. " name="hth" value="<?php
						$sql = "SELECT Describes FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Describes"];
							break;
						} 
						} ?>">					
					<input type="text" placeholder="Who is your crush?" name="hth1" value="<?php
						$sql = "SELECT Crush FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Crush"];
							break;
						} 
						} ?>">
					<input type="text" placeholder="What is your biggest regret?" name="hth2" value="<?php
						$sql = "SELECT Regret FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Regret"];
							break;
						} 
						} ?>">		
					<input type="text" placeholder="Motto in life. "  name="hth3" value="<?php
						$sql = "SELECT Motto FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Motto"];
							break;
						} 
						} ?>">			
					<input type="text" placeholder="Hobbies/Interest " name="hth4" value="<?php
						$sql = "SELECT Habit FROM Information WHERE Name = '" . $_GET['namee'] . "'";
						$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) 
						{
							echo $row["Habit"];
							break;
						} 
						} ?>">			
					<div class="send">
						<input type="file" placeholder="Upload Image" name="image" >
						<input type="submit" value="Update" >
					</div>
		 </div>
		 </form>
	 </div>
</div>
<!---->
</body>
</html>