<!DOCTYPE html>
<html>
<head>
	<title>Feedback details</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="row"><br>
	<div class="col-sm-2">
		<p>	</p>
	</div>
	<div class="col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1><b><center>FEEDBACK DETAILS</center></b></h1>
			</div>
			<div class="panel-body">
				<?php
					$con = mysqli_connect("localhost","root");
					mysqli_select_db($con,"mydatabase");
					$qry = "select * from feedback";
					$result = mysqli_query($con,$qry);
					while($row = mysqli_fetch_array($result))
					{
						?>
						<div class="row1">
							<div class="col-sm-8">
								<?php
									echo "<h4>Subject: ".$row['3']."<br>";
									echo "<br>Response: ".$row['4']."<br>";
								?>
						</div>
						<div class="row2">
							<div class="col-sm-4">
								<img src="Icons/Feedback1.png">
							</div>
						</div>
					</li>
						<?php
					}
					mysqli_close($con);
				?>
			</div>
		</div>
	</div>
	<div class="col-sm-2">
		<p>	</p>
	</div>
</div>
</body>
</html>