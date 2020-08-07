<?php 

session_start();

$con = mysqli_connect('localhost','root');
if($con)
{
	// echo "connection successful";
	mysqli_select_db($con, 'mydatabase');

	$email = $_POST['email'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = md5($_POST['password']);
	$username = $_POST['username'];

	$q = "select * from tsignup where username ='$username' ";

	$result = mysqli_query($con, $q);

	if(mysqli_num_rows($result) > 0)
	{
		$message = "Login already exists";
		echo "<script type='text/javascript'>alert('$message'); window.location = 'TeacherSignup.php'; </script>";
		// header('location:TeacherSignup.php'); 
	}
	else
	{
		$qy = " insert into tsignup(email, firstname, lastname, password, username) values ('$email', '$firstname', '$lastname', '$password', '$username')";
		mysqli_query($con, $qy);
		header('location:TeacherLogin.php');
	}
}
else
{
	echo "no connection";
}

?>