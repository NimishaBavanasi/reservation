<?php
if(isset($_POST['Register']))
{
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$username=$_POST['uname'];
	$phno=$_POST['num'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$cpwd=$_POST['cpwd'];
	$con=new mysqli("localhost","root",'',"mydb");
	$sql="insert into register1(Firstname,Lastname,Username,Phno,Emailid,Password,ConfirmPassword)values('$firstname','$lastname','$username','$phno','$email','$pwd','$cpwd');";
	if($con->query($sql)==true)
	{
		echo "<br><br>";
		echo "<h1>Registred sucessfully</h1>";
	}
	else
	{
		echo "Error:".$sql."<br>".$con->error;
	}
	$con->close();
}
?>