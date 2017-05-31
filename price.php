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
	
	function query1()
	{
	$t_id=$_POST['timings'];
 	$myData1=mysql_query("SELECT * from theatres WHERE t_id='$t_id'");
	while($record=mysql_fetch_array($myData1)){
	echo '<option value="' . $record['t_id'] . '">' . $record['t_price'] . '</option>';
	}
	}
	
	function query2()
	{
	$t_id2=$_POST['timings'];
 	$myData2=mysql_query("SELECT * from theatres WHERE t_id='$t_id2'");
	while($record=mysql_fetch_array($myData2)){
	echo '<option value="' . $record['t_id'] . '">' . $record['t_price2'] . '</option>';
	}
	}
		
?>

<!DOCTYPE HTML>
<html>
<head>
<style>
.style1{
	position: relative;
	top:3px;
	left:350px;
	height:150px;
    width:150px;
	background:url(pay-pic2.jpg);
    background-repeat: no-repeat;
	animation-name: example;
    animation-duration: 8s;
    background-size: contain;
}

@keyframes example {
    0%   {left:370px; top:3px;}
	10%  {left:405px; top:3px;}
    20%  {left:440px; top:3px;}
	30%  {left:475px; top:3px;}
    40%  {left:510px; top:3px;}
    50%  {left:545px; top:3px;}
	60%  {left:510px; top:3px;}
    70%  {left:475px; top:3px;}
	80%  {left:440px; top:3px;}
	90%  {left:405px; top:3px;}
	100% {left:350px; top:3px;}
}

.style2{
	position: relative;
	top:95px;
	left:5px;
	height:150px;
    width:150px;
	background:url(pay-pic3.jpg);
    background-repeat: no-repeat;
	animation-name: example2;
    animation-duration: 8s;
    background-size: contain;
}

@keyframes example2 {
	0%   {left:5px; top:115px;}
	10%  {left:5px; top:150px;}
    20%  {left:5px; top:185px;}
	30%  {left:5px; top:220px;}
    40%  {left:5px; top:255px;}
    50%  {left:5px; top:290px;}
	60%  {left:5px; top:255px;}
    70%  {left:5px; top:220px;}
	80%  {left:5px; top:185px;}
	90%  {left:5px; top:150px;}
	100% {left:5px; top:95px;}
}

.style3{
	position: absolute;
	top:42px;
	left:0px;
}

.style4{
	position: absolute;
	top:140px;
		left:0px;
	}
	
h1{
	color:yellow;
}

</style>
</head>
<body background="ticket-pic2.jpg" style="background-repeat:no-repeat;">
<h2 style="font-family:Times New Roman; color:yellow;"><b> Preferrred Mode of Payment: </b></h2>
<?php connect() ?>
<!--<div class="style1"></div>-->
<div class="style3">
<i><b><h1>Cash via M-Ticket:</h1></b></i>
<select name="prices1" style="width:150px;" >
<?php query1() ?>
  </select>
    <input type="radio"  onclick="window.location='http://localhost/movies/confirming_payment1.php';" />
	</form>
  </div>
  <!--<div class="style2"></div>-->
  <div class="style4">
<i><b><h1>Online(Debit/Credit Card):</h1></b></i>
<select name="prices2" style="width:150px;" >
<?php query2() ?>
  </select>
    <input type="radio"  onclick="window.location='http://localhost/movies/confirming_payment2.php';" />
	</form>
  </div>
</body>
</html>