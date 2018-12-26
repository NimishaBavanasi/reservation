<?php
session_start();
if(!isset($_SESSION['user']))
{
    	header('Location:main.html#popup');

}
echo $_SESSION['origin'];
?>
<html>
<head>
<title>LIST OF BUSES</title>
</head>
<body bgcolor="skyblue">
<center>
<legend><h2>AVAILABLE BUSES</h2>
<table cellspacing=8>
<tr>
<td>
<a href="sairamtravels1.php" name="b1"><img src="select1.jpg" width=100 height=100 alt="image not found"></a>
</td>
<td>
<a href="sairamtravels2.php" name="b2"><img src="select2.jpg" width=100 height=100 alt="image not found"></a>
</td>
<td>
<a href="sairamtravels3.php" name="b3"><img src="select3.jpeg" width=100 height=100 alt="image not found"></a>
</td>
<td>
<a href="sairamtravels4.php" name="b4"><img src="select4.png" width=100 height=100 alt="image not found"></a>
</td>
<td>
<a href="sairamtravels5.php" name="b5"><img src="select5.jpg" width=100 height=100 alt="image not found"></a>
</td>
</tr>
<tr>
<td> <h3>Seats Available:35</h3></td>
<td> <h3>Seats Available:36</h3></td>
<td> <h3>Seats Available:37</h3></td>
<td> <h3>Seats Available:35</h3></td>
<td> <h3>Seats Available:36</h3></td>
</center>
</table>
<p><h2>Click on the bus to book the seat</h2></p>
</legend>
</body>
</html>

