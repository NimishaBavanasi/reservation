<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('Location:main.html#popup');
}
?>
<html>
  <head>
    <title>SAI RAM TRAVELS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Arvo|Chicle|Indie+Flower|Lobster|Press+Start+2P" rel="stylesheet">

    <style>

    button{
      background:white;
    }

    button:hover {
      background:green;
    }

    
    body{
      background: url(inside.jpg);
      margin-top: 80px;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }
    td{
      font-family: monoscope;

      font-size: 20px;
    }
    h1{
      background-color: pink;
      font-family: arial;
    }
    .btn-default:hover{
      background: green;
    }
       
     .back {
      margin:20px;
	  margin-top:250px;
      margin-right: 10px;
        max-width: 500px;
        background: rgb(100, 100,900,0.9)
    }
  </style>
</head>
  <body>

    <center><span style="background-color:red"><h1>SAI RAM TRAVELS</h1></span>
      
      <div class="back" align="center">
        <form action="place2.php" method="post">
        <table align="center">
		<tr><td>Enter origin:<input type="text" name="s1" placeholder="Enter Origin" required></td></tr>
		<tr><td>Enter destination:<input type="text" name="s" placeholder="Enter Destination" required></td></tr>
        </table>
      <input type="submit" name="submit" value="Search">
    </form>
      </div>
  </body>
</html>



