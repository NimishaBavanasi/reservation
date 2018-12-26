<html>
<body bgcolor="orange">
<form action="delet.php" method="POST">
<table align="center">
<tr>
<td>
ORIGIN:<input type="text" required name="origin" size="30">
</td>
</tr>
<tr>
<td>
DESTINATION<input type="text" required name="destination" size="30">
</td>
</tr>
<tr>
<td>
<center><input type="submit" name="submit" value="submit"></center>
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
session_start();
 if(isset($_POST['submit']))
 {
	 $f1=$_POST['origin'];
	 $f2=$_POST['destination'];
	 $con=new mysqli("localhost","root",'',"mydb");
	 $sql="delete from search where origin='$f1' and destination='$f2'";
	 if($con->query($sql)==true)
	{
	  echo "Successfully deleted";
	 }
     else
     {
       echo "Error in deleting";
      }
	 $con->close();
 }
?> 