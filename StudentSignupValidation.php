<?php 

session_start();
// header('location:StudentLogin.php');

$con = mysqli_connect('localhost','root');
if($con)
{
	// echo "connection successful";
	mysqli_select_db($con, 'mydatabase');

	$email = $_POST['email'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = md5($_POST['password']);
	$rollno = $_POST['rollno'];

	$q = "select * from signup where rollno = '$rollno' ";

	$result = mysqli_query($con, $q);

	if(mysqli_num_rows($result) > 0)
	{
		$message = "Login already exists";
		echo "<script type='text/javascript'>alert('$message');</script>";
		// header('location:TeacherSignup.php');
	}
	else
	{
		$qy = " insert into signup(email, firstname, lastname, password, rollno) values ('$email', '$firstname', '$lastname', '$password', '$rollno')";
		mysqli_query($con, $qy);
		header('location:StudentLogin.php');
	}
}
else
{
	echo "no connection";
}
?>