<?php
$con=new mysqli("localhost","root","","mydb");
$sql="select * from register1";
$ans=$con->query($sql);
if($ans->num_rows>=1)
{
	echo "<table border=2 width=90%>";
	echo "<tr><th>Firstname</th><th>Lastname</th><th>Username</th><th>Emailid</th><th>Password</th><th>ConfirmPassword</th></tr>";
	while($row=$ans->fetch_assoc())
	{
		echo "<tr><td>".$row['Firstname']."</td><td>".$row['Lastname']."</td><td>".$row['Username']."</td><td>".$row['Emailid']."</td><td>".$row['Password']."</td><td>".$row['ConfirmPassword']."</td></tr>";
	}
	echo "</table>";
}
else
{
	echo "no record found";
}
?>