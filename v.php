<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('Location:main.html#popup');
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

    button:hover {
      background:green;
    }

    .svg{
      width:30px;
      height: 30px;
      float:left;
    }

    body{
      background-color:skyblue; 
	  background-size: cover;
      background-position: center;
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
    .jumbotron {
      margin:10px;
        max-width: 500px;
        background: rgb(100, 100, 900,0.9)
    }
	.jumbotron1 {
      margin:10px;
      max-width: 500px;
        background-color:deeppink;
    }
    
