<?php
	session_start();
	if(!isset($_SESSION['rollno']))
	{
		header('location:Login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Student Home</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<style type="text/css">
        <?php include 'pagestyle.css'; ?>
    </style>
  	<!--link href="pagestyle.css" rel="stylesheet" type="text/css"-->
</head>
<body>
	<div class="container con1">
 		<div class="wrapper" id="top_div">
			<div class="row">
				<div class="col-sm-10">
					<h2><b><center>OSMANIA UNIVERSITY</h2>
					<h2><b><center>Department of Computer Science & Engineering</h2>
				</div>
				<div class="col-sm-2">
					<div id="logo_right">
						<a href="http://www.uceou.edu">
							<img src="Icons/logo.png" alt="some text">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container con">
		<div class="row">
			<div class="col-sm-9">
				<ul>
    				<li><a href="StudentHome.html"><h4><b>Home</b></h4></a></li>
					<li><a href="StudentLogout.php"><h4><b>Logout</b></h4></a></li>
	 	 		</ul>
	 	 	</div>
	 	 	<div class="col-sm-3">
	 	 		<h4><b>Welcome <?php echo $_SESSION['rollno']; ?></b></h4>
	 	 	</div>
	 	</div>
	</div>
	<div class="container con4">
		<div class="wrapper" id="top_div">
			<div class="row"><br>
				<div class="col-sm-3">
					<a href="Attendance.php">
						<img src="Icons/Attendance.png"><h5>&nbsp;&nbsp;&nbsp;Attendance</h5>
					</a>
				</div>
				<div class="col-sm-3">
					<a href="Timetable.php">
						<img src="Icons/Timetable.png"><h5>&nbsp;&nbsp;&nbsp;&nbsp;Timetable</h5>
					</a>
				</div>
				<div class="col-sm-3">
					<a href="BESyllabus.php">
						<img src="Icons/Syllabus.png"><h5>&nbsp;&nbsp;&nbsp;&nbsp;Syllabus</h5>
					</a>
				</div>
				<div class="col-sm-3">
					<a href="QuestionPapers.php">
						<img src="Icons/QuestionPapers.png"><h5>Question papers</h5>
					</a><br>
				</div>
				<div class="col-sm-3">
					<a href="MarksList.php">
						<img src="Icons/MarksList.jpg"><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marks List</h5>
					</a>
				</div>
				<div class="col-sm-3">
					<a href="Feedback.php">
						<img src="Icons/Feedback.jpg"><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Feedback</h5>
					</a>
				</div>
				<div class="col-sm-3">
					<a href="ReferenceBooks.php">
						<img src="Icons/link.png"><h5>Reference Books</h5>
					</a>
				</div>
				<div class="col-sm-3">
					<a href="StudyMaterials.php">
						<img src="Icons/Resources.png"><h5>&nbsp;Study Materials</h5>
					</a><br>
				</div>
				<div class="col-sm-3">
					<a href="UploadDisplay.php">
						<img src="Icons/Assignment.png"><h5>&nbsp;Teacher Updates</h5>
					</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>