
<html>
<body bgcolor="darkviolet">
<form  name="f1" action="forget.php" method="POST" >
<table align="center">
<tr>
<td align="center">
USERNAME<input type="text" name="uname" maxlength="25"/><br><br>
</td>
</tr>
<tr>
<td align="center">
NEW PASSWORD<input type="password" name="pwd"/><br><br>
</td>
</tr>
<tr>
<td align="center">
CONFIRM PASSWORD<input type="password" name="pwd1"/><br><br>
</td>
</tr>
<tr>
<td align="center">
<button name="login" value="click">submit</button>
</td>
</tr>
</table>
</body>
</html>
<?php
session_start();
if( isset($_POST['login'])) {
		$conn=mysqli_connect("localhost", "root", "", "mydb");
		$user=$_POST['uname'];
		$pass=$_POST['pwd1'];
		$query = mysqli_query($conn,"select * from register1 where Username='$user'"); 
        if (mysqli_num_rows ($query)==1) 
         {
          $query3 = mysqli_query($conn,"update register1 set Password='$pass' where Username='$user'"); 
          echo 'Password Changed successfully';
		  }
         else
	     {
          echo 'Error';
		 }  
}
?>