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
		$m_id=$_POST['movies'];
 	$myData1=mysql_query("SELECT * from theatres WHERE screen1='$m_id'");
	while($record=mysql_fetch_array($myData1)){
	echo '<option value="' . $record['t_id'] . '">' . $record['t_name'] . '</option>';
	}
	}
	
	function query2()
	{
	$m_id=$_POST['movies'];
	$myData2=mysql_query("SELECT * from theatres WHERE screen2='$m_id'");
	while($record=mysql_fetch_array($myData2)){
	echo '<option value="' . $record['t_id'] . '">' . $record['t_name'] . '</option>';
	}
	}
	
	function query3()
	{
		$m_id=$_POST['movies'];
	$myData3=mysql_query("SELECT * from theatres WHERE screen3='$m_id'");
	while($record=mysql_fetch_array($myData3)){
	echo '<option value="' . $record['t_id'] . '">' . $record['t_name'] . '</option>';
	}
	}
	
?>

<!DOCTYPE HTML>
<html>
<head>
<style>
.dropbtn {
    background-color: #4CAF50;
    color: black;
    font-size: 16px;
    border:0px solid green;
}

</style>
</head>
<body background="theatre-pic2.jpg" style="background-repeat:no-repeat;">
<h2 style="font-family:Brushed; color:white;"> CHOOSE YOUR THEATRE: </h2>
<?php connect() ?>
<form method="POST" action="timing.php">
<div style="float:left;">
<select name="theatres" style="width:200px;" >
<?php query1() ?>
<?php query2() ?>
<?php query3() ?>
  </select><br />
  <input type="submit"  value="Show Timings">
</div>
</form>
<div style="float:right;">
  <a href="admin.htm" class="dropbtn">ADMINISTRATOR (Click Here)</a>
  </div>
</body>
</html>