<!DOCTYPE html>
<html>
<head>
	<title>Uploads</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<br>
	<div class="row">
		<div class="col-sm-3">
			<p> </p>
		</div>
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel panel-heading">
					<h1><b><center>ASSIGNMENT UPLOADS</center></b></h1>
				</div>
				<div class="panel panel-body">
					<form method="post" enctype="multipart/form-data">
						<label>Subject</label>
						<input type="text" name="subject" class="form-control" id="subject" autocomplete="off" required/>
						<br><label>Semester</label>
						<input type="text" name="semester" class="form-control" id="semester" autocomplete="off" required/>
						<br><label>Description</label>
						<input type="text" name="description" class="form-control" id="description" autocomplete="off" required/>
						<br><label>Select file to upload</label>
						<input type="file" name="file" required/>
						<br/><br/>
						<input type="submit" name="submit" value="Upload" />
					</form>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<p></p>
		</div>
	</div>
</body>
<?php 
	if(isset($_POST['submit']))
	{
		$file = $_FILES['file'];
		
		$fileName = $_FILES['file']['name']; 
		$fileTmpName = $_FILES['file']['tmp_name']; 
		$fileSize = $_FILES['file']['size']; 
		$fileError = $_FILES['file']['error']; 
		$fileType = $_FILES['file']['type']; 

		$fileExt = explode('.',$fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed=array('jpg','jpeg','png','pdf');

		if(in_array($fileActualExt, $allowed))
		{
			if($fileError === 0)
			{
				if($fileSize < 10000000)
				{
					$subject = $_POST['subject'];
					$semester = $_POST['semester'];
					$description = $_POST['description'];
					$image = addslashes($_FILES['file']['tmp_name']);
					$image = file_get_contents($image);
					$image = base64_encode($image);
					saveimage($subject,$semester,$description,$image);
				}
				else
				{
					echo "File size exceeded";
				}
			}
		}
		else
		{
			echo "<h4><center>File uploading error.</center></h4>";
		}
	}
	function saveimage($subject,$semester,$description,$image)
	{
		$con = mysqli_connect("localhost","root");
		mysqli_select_db($con,"upload");
		$qry = "insert into images (subject,semester,description,image) values('$subject','$semester','$description','$image')";
		$result = mysqli_query($con,$qry);
			if($result)
			{
				echo "<h4><center>File uploaded.</center></h4>";	
			}
			else
			{
				echo "<h4><center>File not uploaded.</center></h4>";
			}
	}
?>
</html>