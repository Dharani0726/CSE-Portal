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

$username = $_POST['username'];
$password = md5($_POST['password']);

$q = "select * from tsignup where username ='$username' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);
if($num == 1)
{
	$_SESSION['username'] = $username;
	header('location:TeacherHome.php');
}
else
{
	echo "Incorrect login";
	header('location:TeacherLogin.php');
}

?>