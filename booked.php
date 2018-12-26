<?php
session_start();
if(!isset($_SESSION['user']))
{
    	header('Location:main.html#popup');

}
?>
<?php
	$user=$_SESSION['user'];
	$origin=$_SESSION['origin'];
	$destination=$_SESSION['destination'];
	//$ticket=$_POST['tickets'];
    //$amount=$_POST['amount'];
$con=new mysqli("localhost","root","","mydb");
$sql="select * from booked where Username='$user';";
$ans=$con->query($sql);
if($ans->num_rows>=1)
{ 
    echo "<center>";
    echo "<h2>BOOKED DETAILS OF TICKET</h2>";
	echo "<table border=2>";
	echo "<tr><th>Username</th><th>origin</th><th>destination</th><th>bookedseats</th><th>payment</th>";
		while($row=$ans->fetch_assoc())
	{
		echo "<tr><td>".$row['Username']."</td><td>".$row['origin']."</td><td>".$row['destination']."</td><td>".$row['bookedseats']."</td><td>".$row['payment']."</td></tr>";
	}
	echo "</center>";
	echo "</table>";
}
else
{
	echo "no record found";
}
?>
<html>
<body>
<br><br>
<a href="main.html" target="main"><input type="button" name="button" value="LOGOUT">
</body>
</html>