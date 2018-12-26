<?php
session_start();
if(!isset($_SESSION['user']))
{
    	header('Location:main.html#popup');

}
?>
<?php
if(isset($_POST['b']))
{   
	$user=$_SESSION['user'];
	$origin=$_SESSION['origin'];
	$destination=$_SESSION['destination'];
	$ticket=$_POST['tickets'];
    $amount=$_POST['amount'];
	$con=new mysqli("localhost","root",'',"mydb");
	$sql="insert into booked(Username,origin,destination,bookedseats,payment)values('$user','$origin','$destination','$ticket','$amount');";
	if($con->query($sql)==true)
	{
		echo "details entered into the database successfully";
	}
	else
	{
		echo "error:".$sql."<br>".$con->error;
	}
	$con->close();
	    	header('Location:booked.php');

}
?>
	    