<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('Location:main.html#popup');
}
$n=$_SESSION["n"];
$str=$_SESSION["arr"];
?>
<html>
<body bgcolor="skyblue">
<form action="catcard.php" method="post">
<center>
<h2> ENTER CATCARD DETAILS</h2>
<h3>Enter catcard Name:</h3><input type="text" name="c1"  placeholder="Enter name">
<h3>Enter catcard No:</h3><input type="text" name="c2"  placeholder="Enter number"><br><br>
<?if($n>0)
 echo "<button type=button class=btn btn-default notallowed allowed name=b1 ><span><strong>PAY FOR TICKET</strong></span></button></input><br>";
else
	echo "<h1>Choose seats</h1>"; 
?>
<?php
if(isset($_POST['b1']))
{
    $amount1=$n*600;
	$amt=$amount1*(10/100);
	$amt1=$amount1-$amt;
    echo "<html><head><link rel=stylesheet type=text/css href=back.css/></head><body bgcolor=skyblue><center><h2>SEAT DETAILS AND PAYMENT</h2><table border=2><th>No of seats booked</th><th>Seat No</th><th>Amount for the tickets</th><tr class=even><td name=bookedseats>".$n."</td><td>".$str."</td><td>".$amt1."</td></tr></table><br><br><a href=payment.php><input type=button name=b value=PROCEED></a></form></center></body></html>";
}
</body>
</html>

