<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('location:TeacherLogin.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Teacher Home</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<!-- <style type="text/css"> -->
        <!--?php include 'pagestyle.css'; ?>
    </style-->
    <link href="pagestyle.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container con1">
 		<div class="wrapper" id="top_div">
			<div class="row">
				<div class="col-sm-2"><br>
					<div id="logo_left">
						<img src="Icons/Centenarylogo.jpg" alt="some text" width=100 height=80>
					</div>
				</div>
				<div class="col-sm-8">
					<h2><b><center>OSMANIA UNIVERSITY</center></b></h2>
					<h3><b><center>Department of Computer Science & Engineering</center></b></h3>
				</div>
				<div class="col-sm-2">
					<div id="logo_right">
						<img src="Icons/logo.png">
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="container con">
		<div class="row">
			<div class="col-sm-9">
				<ul>
    				<li><a href="TeacherHome.php"><h4><b>Home</b></h4></a></li>
					<li><a href="TeacherLogout.php"><h4><b>Logout</b></h4></a></li>
	 	 		</ul>
	 	 	</div>
	 	 	<div class="col-sm-3">
	 	 		<h4><b>Welcome <?php echo $_SESSION['username']; ?></b></h4>
	 	 	</div>
	 	</div>
	</div>
	<div class="container con4">
		<div class="wrapper" id="top_div">
			<center><br>
			<a href="Upload.php">
				<h3><b>UPLOAD FILES</b></h3><img src="Icons/Upload.png" height="300" width="300">
			</a>
			</center>
		</div>
	</div>
</body>
</html>