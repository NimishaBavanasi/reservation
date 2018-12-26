<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('Location:main.html#popup');
}
?>
<?php
if(isset($_POST['login']))
{
	$con=mysqli_connect("localhost","root",'',"mydb");
	$user=$_POST['loginid'];
	$pass=$_POST['password'];
	$res=mysqli_query($con,"SELECT * FROM admin WHERE Username='$user' AND Password='$pass' ");
	$row=mysqli_fetch_assoc($res);
	if(!$row)
	{
		echo "<h1>Enter valid credentials</h1>";
	}
	else
	{
		session_start();
		$_SESSION['user']=$user;
		header('location: admin.php');
	}
}
?>
