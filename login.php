<html>
<body bgcolor="skyblue">
<img src="bus.jpg" width=1500 height=400 alt="checkinternet">
<form action="login.php" method="post">
<center>
<table border="1" width="100%">
<tr><td align="center">Login here</td></tr>
</table>
<table width="100%">
<form>
Username:<input type="text" name="loginid" placeholder="Enter Username"><br><br>
Password:<input type="password" name="Password" placeholder="Enter Password"><br><br>
<input type="submit" value="login"><br><br>
<input type="checkbox" name="remember" > Remember me<br><br>
<a href="forget.html">Forgotpassword?</a>
</center>
</form>
</body>
</html>
<?php
if(isset($_POST['login']))
{
	$con=mysqli_connect("localhost","root",'',"mydb");
	$user=$_POST['loginid'];
	$pass=$_POST['password'];
	$res=mysqli_query($con,"SELECT * FROM register1 WHERE Username='$user' AND Password='$pass' ")or die ("Could not execute query: ".mysqli_error($con));
	$row=mysqli_fetch_assoc($res);
	if(!$row)
	{
		echo "<h1>Enter valid credentials</h1>";
	}
	else
	{
		session_start();
		$_SESSION['user']=$user;
		header('location: booking.php');
	}
}
?>
