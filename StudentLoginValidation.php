<?php 

session_start();

$con = mysqli_connect('localhost','root');
if($con)
{
	echo "connection successful";
}
else
{
	echo "no connection";
}

mysqli_select_db($con, 'mydatabase');

$rollno = $_POST['rollno'];
$password = md5($_POST['password']);

$q = "select * from signup where rollno ='$rollno' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);
if($num == 1)
{
	$_SESSION['rollno'] = $rollno;
	header('location:StudentHome.php');
}
else
{
	echo "Incorrect login";
	header('location:StudentLogin.php');
}

?>