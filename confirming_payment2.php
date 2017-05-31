<?php

define('DB_NAME','mini-project');
define('DB_USER','root');
define('DB_HOST','localhost');
define('DB_PASS','mysql2016');

    function connect()
	{
	  mysql_connect(DB_HOST,DB_USER,DB_PASS) or die('Could not  connect to server' .mysql_error());
	  mysql_select_db(DB_NAME); 
	}
?>

<!DOCTYPE html>
<html>
<head>
<style>
.right{
	position: absolute;
	top:320px;
	left:20px;
	height:350px;
    width:450px;
	background:url(online.jpg);
    background-repeat: no-repeat;
	animation: example 8s infinite;
    background-size: contain;
}
@keyframes example {
    0%   {left:0px; top:320px;}
	10%  {left:0px; top:350px;}
    20%  {left:0px; top:380px;}
	30%  {left:0px; top:410px;}
    40%  {left:0px; top:440px;}
    50%  {left:0px; top:470px;}
	60%  {left:0px; top:440px;}
    70%  {left:0px; top:410px;}
	80%  {left:0px; top:380px;}
	90%  {left:0px; top:350px;}
	100% {left:0px; top:320px;}
}

#left{
	position:absolute;
	left:405px;
	
}
</style>
</head>
<body>
<h1 style="font-family:Courier; color:black;" class="style1"><b>Payment Details!</b></h1>
<form id="test">
<table border="border">
<div class="right"></div>
   <tr><td>Customer Card-Number:</td>
   <td><input type="text" maxlength=16 /> </td></tr>
   <tr><td>Customer Card-Choice:</td>
   <td>
   <select>
   <option>Master Card (Debit) </option>
   <option>VISA Card (Debit) </option>
   <option>Master Card (Credit) </option>
   <option>VISA Card (Credit) </option>
   <option>ICICI Bank(Debit/Credit) </option>
   <option>HDFC Bank (Credit/Debit) </option>
   <option>CANARA Bank(Credit/Debit) </option>
   </select>
   </td>
   </tr>
   <tr><td>Name Written Behind:</td>
   <td><input type="text" maxlength=25 /> </td></tr>
   <tr><td>CCV No:</td>
   <td><input type="text" maxlength=3 /></td></tr>
   <tr><td>Mobile Number(Invoice of ticket will be sent to this number):</td>
   <td><input type="text" maxlength=10 /></td></tr>
   </table>
   <button onclick="myfunction()" id="left">Make-Payment</button><br /><br />
   </form>
<script>

function myfunction()
{
	document.getElementById("test").innerHTML=document.write("..");
	alert("1. The Invoice/Bill is sent to your Email-Id and Phone");
	alert("2. Enjoy Your Movie!!!")
    document.body.style.background = "#f3f3f3 url('end-pic1.png') no-repeat left top";
}
</script>
</body>
</html>