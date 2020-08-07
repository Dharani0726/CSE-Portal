<!DOCTYPE html>
<html>
<head>
	<title> Student Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div class="container"><br>
		<div class="row">
			<div class="col-md-3">
				<p>	</p>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<center><h2 class="text-success text-center"><b>STUDENT LOGIN</b></h2></center>
					</div>
					<div class="panel-body">
						<form action="StudentLoginValidation.php" method="post" onsubmit="return validation()" class="bg-light">
							<div class="form-group">
								<label>Roll Number</label>
								<input type="bigint" name="rollno" class="form-control" id="rollno" autocomplete="off" required>
								<span id="num" class="text-danger font-weight-bold"></span>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" id="password" autocomplete="off" required>
								<span id="password" class="text-danger font-weight-bold"></span>
							</div>
							<center><button type="submit" class="btn btn-primary">Login</button></center><br>
							<div class="form-group"> 
								Don't have an account! 
								<a href="StudentSignup.php"> Sign Up Here </a> 	 
							</div> 
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<p>	</p>
			</div>
		</div>
	</div>
<div id="user" class="text-center" style="color:red;"></div>
<script type="text/javascript">
	function validation()
	{
		var rollno = document.getElementById('rollno').value;
		var password = document.getElementById('password').value;

		if(isNaN(rollno))
		{
			document.getElementById('user').innerHTML = "ROLL NUMBER: ** Only numbers are allowed";
			return false;
		}
		else if(rollno.length!=12)
		{
			document.getElementById('user').innerHTML = "ROLLNO: ** Length must be 12 digits";
			return false;
		}

		else if((password.length < 6) || (password.length > 20))
		{
			document.getElementById('user').innerHTML = "PASSWORD: ** Length must be in between 5-20 characters";
			return false;
		}
	}
</script>
</body>
</html>