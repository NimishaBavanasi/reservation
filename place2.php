<?php
session_start();
if(!isset($_SESSION['user']))
{
    	header('Location:main.html#popup');

}
?>
<html>
<head>
<style>
td{
	background-color:cyan;
}
body{
	background-color:skyblue;
}
</style>
<body>
</body>
</html>
<?php
  if(isset($_POST['submit']))
  {
    $origin=$_POST['s1'];
    $destination=$_POST['s'];
	$_SESSION['origin']=$origin;
	$_SESSION['destination']=$destination;
    $con=new mysqli("localhost","root","","mydb");
    $sql1="select * from search where origin='$origin'";
    $result=$con->query($sql1);
    if($result->num_rows>0){
		if($origin==$destination)
		{
			echo "PLEASE SELECT VALID OPTIONS";
		}
		else{
		header('location:numberofbuses.php');
		}
	  }
	else{
      echo "SORRY FOR THE INCONVENIENCE WE DO NOT HAVE SERVICES FOR THE ORIGIN AND DESTINATION YOU HAVE ENTERED";
          }
  }
?>