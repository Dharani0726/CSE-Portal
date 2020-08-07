<!DOCTYPE html>
<html>
<head>
	<title>Student Signup</title>
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
				<center><h2 class="text-success text-center"><b>STUDENT SIGN-UP</b></h2></center>
			</div>
			<div class="panel-body">
				<form action="StudentSignupValidation.php" method="post" onsubmit="return validation()" class="bg-light">
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" id="email" autocomplete="off" required>
						<span id="mail" class="text-danger font-weight-bold"></span>
					</div>
					<div class="form-group">
						<label>Firstname</label>
						<input type="text" name="firstname" class="form-control" id="firstname" autocomplete="off" required>
						<span id="firstname" class="text-danger font-weight-bold"></span>
					</div>
					<div class="form-group">
						<label>Lastname</label>
						<input type="text" name="lastname" class="form-control" id="lastname" autocomplete="off" required>
						<span id="lastname" class="text-danger font-weight-bold"></span>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" id="password" autocomplete="off" required>
						<span id="password" class="text-danger font-weight-bold"></span>
					</div>
					<div class="form-group">
						<label>Confirm Password</label>
						<input type="password" name="conpassword" class="form-control" id="conpassword" autocomplete="off" required>
						<span id="conpassword" class="text-danger font-weight-bold"></span>
					</div>
					<div class="form-group">
						<label>Roll Number</label>
						<input type="bigint" name="rollno" class="form-control" id="rollno" autocomplete="off" required>
						<span id="num" class="text-danger font-weight-bold"></span>
					</div>
					<center><button type="submit" class="btn btn-primary">Signup</button></center>
				</form>
			</div>
			</div>
			<div class="col-md-3">
				<p>	</p>
			</div>
		</div>
	</div>
</div>
<div id="user" class="text-center" style="color:red;"></div>
<script type="text/javascript">
	function validation()
	{
		var email = document.getElementById('email').value;
		var firstname = document.getElementById('firstname').value;
		var lastname = document.getElementById('lastname').value;
		var password = document.getElementById('password').value;
		var conpassword = document.getElementById('conpassword').value;
		var rollno = document.getElementById('rollno').value;

		if((firstname.length < 3) || (firstname.length > 20))
		{
			document.getElementById('user').innerHTML = "FIRSTNAME: ** Length must be in between 2-20 characters";
			return false;
		}
		else if(!isNaN(firstname))
		{
			document.getElementById('user').innerHTML = "FIRSTNAME: ** Only characters are allowed";
			return false;
		}

		else if(email.indexOf('@') <= 0)
		{
			document.getElementById('user').innerHTML = "EMAIL: ** @ Invalid Position";
			return false;
		}
		else if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.'))
		{
			document.getElementById('user').innerHTML = "EMAIL: ** . Invalid Position";
			return false;	
		}

		else if((password.length < 6) || (password.length > 20))
		{
			document.getElementById('user').innerHTML = "PASSWORD: ** Length must be in between 5-20 characters";
			return false;
		}

		else if(conpassword!=password)
		{
			document.getElementById('user').innerHTML = "CONFIRM PASSWORD: ** Must be same as password";
			return false;
		}

		else if(isNaN(rollno))
		{
			document.getElementById('user').innerHTML = "ROLL NUMBER: ** Only numbers are allowed";
			return false;
		}
		else if(rollno.length!=12)
		{
			document.getElementById('user').innerHTML = "ROLL NUMBER: ** Length must be 12 digits";
			return false;
		}

	}
</script>
</body>
</html>