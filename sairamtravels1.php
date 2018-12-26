<?php
session_start();
if(!isset($_SESSION['user']))
{
    	header('Location:main.html#popup');

}
echo $_SESSION['origin'];
if(isset($_POST['b']))
{	

	$ticket=$_POST['tickets'];
    $amount=$_POST['amount'];
	$_SESSION['tickets']=$ticket;
	$_SESSION['amount']=$amount;
	
}
?>
<html>
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Arvo|Chicle|Indie+Flower|Lobster|Press+Start+2P" rel="stylesheet">

    <title>SAI RAM TRAVELS</title>
    <style>

    button{
      background:white;
    }

   /* button:hover {
      background:yellow;
    }*/

    .svg{
      width:30px;
      height: 30px;
      float:left;
    }
    .fa-facebook {
      padding-top: 2px;
      background: #3B5998;
      color: white;
    }

    body{
      background-color:skyblue;
      margin-top: 80px;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }
    .fa-twitter {
      background: #55ACEE;
      color: white;
    }
    .fa {

      font-size: 20px;
      width: 20px;
      text-align: center;

    }
    td{
      font-family: arial;

      font-size: 15px;
    }
    .jumbotron {
      margin:20px;
      margin-left: 500px;
        max-width: 500px;

    }
    h1{
      background-color: red;
      font-family: monoscope;
    }
    .btn-default:hover{
      background: green;
    }
    .payment {
     background: green;
      text-align: center;

      font-family: arial;
      /*transition: all 0.5s;*/
      cursor: pointer;

    }

    /*.payment span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      /*transition: 0.5s;*/
    /*}

    .payment span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;*/
      /*transition: 0.5s;*/
    /*}

    .payment:hover span {
      padding-right: 25px;
      background: green;
    }

    .payment:hover span:after {
      opacity: 1;
      right: 0;
    }*/
    .notallowed:hover{
      cursor: not-allowed;
      background: red;


    }
    .notallowed{
      background: red;
      opacity:0.6;
    }
	.jumbotron1 {
      margin:10px;
      margin-left: 10px;
        max-width: 250px;
        background-color:deeppink;
    }
    
  </style>
</head>
<body>
    <div align="center">

             <table align="center" >
      <tr>
        
        <td align ="left" width="40">
        <img src="door.jpg" alt="image not found" width="50" height="50">
		</td>
		<td align="right" width=40><img src="driver.jpg" height="50" alt="no image"/>
        </td>

      </tr>
	        <tr><td align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>

        <br>
		</table>


     
      <table align="center" >
	  <tr></tr>
	  
	  <tr><td><input type="checkbox" name = "but" id ="1" abbr title="seat no:1|Rs:600"  onchange="add()" ><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td><td></td><td></td>
        <td><input type="checkbox"	name = "but" id ="2" abbr title="seat no:2|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="No image"/></td><td><input type="checkbox" name = "but" id ="3" abbr title="seat no:3|Rs:600"><img src="busseat.jpg" align="center" height="50" width="50" onchange="add()"></td></tr>
       <tr><td><input type="checkbox" name = "but" id ="4" abbr title="seat no:4|Rs:600" class="notallowed" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="5" abbr title="seat no:5|Rs:600"class="notallowed" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td><td></td>
        <td><input type="checkbox" name = "but" id ="6" abbr title="seat no:6|Rs:600" onchange="add()" ><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="7" abbr title="seat no:7|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td></tr>
	    <tr><td><input type="checkbox" name = "but1" id ="8" abbr title="seat no:8|Rs:600" onchange="add()" value="8"><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="9" abbr title="seat no:9|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td><td></td>
		<td><input type="checkbox" name = "but" id ="10" abbr title="seat no:10|Rs:600" onchange="add()" ><img src="busseat.jpg" align="center" height="50" width="50" ></td><td><input type="checkbox" name = "but" id ="11" abbr title="seat no:11|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td></tr> 
		<tr><td><input type="checkbox" name = "but" id ="12" abbr title="seat no:12|Rs:600" onchange="add()" ><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="13" abbr title="seat no:13|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td><td></td>
		<td><input type="checkbox" name = "but" id ="14" abbr title="seat no:14|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="15" abbr title="seat no:15|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td></tr> 
	    <tr><td><input type="checkbox" name = "but" id ="16" abbr title="seat no:16|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="17" abbr title="seat no:17|Rs:600"onchange="add()" ><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td><td></td>
		<td><input type="checkbox" name = "but" id ="18" abbr title="seat no:18|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="19" abbr title="seat no:19|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td></tr> 
	    <tr><td><input type="checkbox" name = "but" id ="20" abbr title="seat no:20|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="21" abbr title="seat no:21|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td><td></td>
		<td><input type="checkbox" name = "but" id ="22" abbr title="seat no:22|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="23" abbr title="seat no:23|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td></tr> 
	    <tr><td><input type="checkbox" name = "but" id ="24" abbr title="seat no:24|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="25" abbr title="seat no:25|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td><td></td>
		<td><input type="checkbox" name = "but" id ="26" abbr title="seat no:26|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="27" abbr title="seat no:27|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td></tr> 
	    <tr><td><input type="checkbox" name = "but" id ="28" abbr title="seat no:28|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="29" abbr title="seat no:29|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td><td></td>
		<td><input type="checkbox" name = "but" id ="30" abbr title="seat no:30|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="31" abbr title="seat no:31|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td></tr> 
	    <tr><td><input type="checkbox" name = "but" id ="32" abbr title="seat no:32|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="33" abbr title="seat no:33|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td><td></td>
		<td><input type="checkbox" name = "but" id ="34" abbr title="seat no:34|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="35" abbr title="seat no:35|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td></tr> 
	    <tr><td><input type="checkbox" name = "but" id ="36" abbr title="seat no:36|Rs:600" onchange="add()" ><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="37" abbr title="seat no:37|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/>
		<td><input type="checkbox" name = "but" id ="38" abbr title="seat no:38|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50"></td><td><input type="checkbox" name = "but" id ="39" abbr title="seat no:39|Rs:600" onchange="add()"><img src="busseat.jpg" align="center" height="50" width="50" alt="no image"/></td><td><input type="checkbox" name = "but" id ="40" abbr title="seat no:40|Rs:600" ><img src="busseat.jpg" align="center" height="50" width="50" onchange="add()"></td></tr> 
	    
	  </table>
	  </div>
	  <div align="center">
<table  align="center"  class="jumbotron1">

	    <tr>
          <td height="2" bgcolor="red" width="5%"></td><td><td>unavailable</td>
        </td>
        
          <td height="2" bgcolor="yellow" width="5%"></td><td><td>currently selected</td>
      
        </td>
          <td height="2" bgcolor="white" width="5%"></td><td>available</td>
        </tr>
      </table>
	  </div>
	  <div align="center">
	  <table>
	            <center><button type="button"  onclick="payment()"><span><strong>PAY FOR TICKET</strong></span></button></input><br></center>

  </body>

<script>

var buttons = document.getElementsByName("but");
var selectedseats = [];
var available_seats=32;
var booked_seats=0;
var n=0;
/*var user="<?php echo $user;?>";
var origin="<?php echo $origin;?>";
var destination="<?php echo $destination;?>";*/

function add(){
	booked_seats=booked_seats+1;
    available_seats=available_seats-1;
	selectedseats.push(this.id);
    n++;
	enable.classList.add("payment");

}
function payment()
{   var n=selectedseats.length;
	if(n==0)
    {
		    alert("please select seats to reserve");             
	}
	else
	{
		var amount=n*600;
		document.getElementById("tick").value=n;
		document.getElementById("am").value=amount;
	    //document.writeln("<html><head><link rel=stylesheet type=text/css href=back.css/></head><body bgcolor=skyblue><center><h2>SEAT DETAILS AND PAYMENT</h2><table border=2><th>No of seats booked</th><th>Amount for the tickets</th><tr class=even><td name=bookedseats>"+n+"</td><td>"+amount+"</td></tr></table><br><br></form></center></body></html>");
	    //document.writeln("<html><body><center><table><caption><h1>Ticket Details</h1></caption><tr><td>No.of tickets:</td><td>"+n+"</td></tr><tr><td>Amount:</td><td>"+amount+"</td></tr></table></center></body></html>");
        //document.writeln("<html><body><center><a href=payment.php><input type=button name=b value=PROCEED></a></center></body></html>");
	}
}

 
</script>
<form action="payment1.php" method="post">
Number of tickets:<input type="number" id="tick" name="tickets">
<br><br>
Total Amount:<input type="number" id="am" name="amount">
<br><br>
<input type="submit" name="b" value="submit"></a>
</form>
</html>
