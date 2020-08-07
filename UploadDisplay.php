<!DOCTYPE html>
<html>
<head>
	<title>Assignments</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="row"><br>
	<div class="col-sm-1">
		<p>	</p>
	</div>
	<div class="col-sm-10">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1><b><center>ASSIGNMENTS</center></b></h1>
			</div>
			<div class="panel-body">
				<?php
					$con = mysqli_connect("localhost","root");
					mysqli_select_db($con,"upload");
					$qry = "select * from images";
					$result = mysqli_query($con,$qry);
					while($row = mysqli_fetch_array($result))
					{
						?>
						<div class="row1">
							<div class="col-sm-4">
								<?php
									echo "<h4><br><br><br>Subject: ".$row['1']."<br>";
									echo "<br>Semester: ".$row['2']."<br>";
									echo "<br>Description: ".$row['3']."<br>";
								?>
							</div>
						</div>
						<div class="row2">
							<div class="col-sm-4">
								<?php
									echo '<img height="700" width="700" src="data:image;base64,'.$row[4].'" > <br></h4>';
								?>
							</div>
						</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						<?php
					}
					mysqli_close($con);
				?>
			</div>
		</div>
	</div>
	<div class="col-sm-1">
		<p>	</p>
	</div>
</div>
</body>
</html>