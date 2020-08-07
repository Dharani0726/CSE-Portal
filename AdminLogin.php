<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
						<center><h2 class="text-success text-center"><b>ADMIN LOGIN</b></h2></center>
					</div>
					<div class="panel-body">
						<form action="AdminLoginValidation.php" method="post" class="bg-light">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" id="username" autocomplete="off" required>
								<span id="username" class="text-danger font-weight-bold"></span>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" id="password" autocomplete="off" required>
								<span id="password" class="text-danger font-weight-bold"></span>
							</div>
							<center><button type="submit" class="btn btn-primary">Login</button></center>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<p>	</p>
			</div>
		</div>
	</div>
</body>
</html>