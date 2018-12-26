<html>
<body>
<form action="ex.php" method="post">
<h2>Enter No.Of Tickets:</h2><input type="number" name="t2" placeholder="Enter Destination" required>
</body>
</html>
<?php
$name=$_SESSION['user'];
$t1=$_POST['t2'];
$total=($t1*600);
$con=new mysqli("localhost","root","","mydb1");
 $sql1="UPDATE ex set tickets='$t1' and amount='$total' where name='$name'";
if($con->query($sql1))
	{
    
			echo"sucessfully";
			
		}
		else{
		echo "error".$sql1."<br>".$con->error;
		}
	
  }
