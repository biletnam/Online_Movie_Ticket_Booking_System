<?php

define('DB_NAME','mini-project');
define('DB_USER','root');
define('DB_HOST','localhost');
define('DB_PASS','mysql2016');

    $m_id=$_GET['movies'];
	$t_id=$_GET['theatres'];
	$t_time=$_GET['timings'];
	$t_no_of_tickets=$_GET['no_of_tickets'];
	
	function connect()
	{
	  mysql_connect(DB_HOST,DB_USER,DB_PASS) or die('Could not  connect to server' .mysql_error());
	  mysql_select_db(DB_NAME); 
	}
	
    function query1()
	{
	$myData=mysql_query("SELECT m_name from movies where m_id='$m_id'");
	while($record=mysql_fetch_array($myData)){
	echo '<option value="' . $record['m_id'] . '">' . $record['m_name'] . '</option>';
	}
	}
	
	function query2()
	{
	$myData=mysql_query("SELECT t_name from theatres where t_id='$t_id'");
	while($record=mysql_fetch_array($myData)){
	echo '<option value="' . $record['t_id'] . '">' . $record['t_name'] . '</option>';
	}	
	}
	
	function query3()
	{
	$myData=mysql_query("SELECT t_time from theatres where t_id='$t_id'");
	while($record=mysql_fetch_array($myData)){
	echo '<option value="' . $record['t_id'] . '">' . $record['t_time'] . '</option>';
	}	
	}
	
	function query4()
	{
	$myData=mysql_query("SELECT t_time2 from theatres where t_id='$t_id'");
	while($record=mysql_fetch_array($myData)){
	echo '<option value="' . $record['t_id'] . '">' . $record['t_time2'] . '</option>';
	}
	}
	
	function query5()
	{
	echo '<option>' . $record['$t_no_of_tickets'] . '</option>';
	}	
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php connect() ?>
<h1>Your Movie Details!</h1>
<h3>Movie Name:</h3>
<select style="width:200px;" >
<?php query1() ?>
</select>
<h3>Theatre Name:</h3>
<select style="width:200px;" >
<?php query2() ?>
</select>
<h3>No. of Tickets:</h3>
<select style="width:200px;" >
<?php query5() ?>
</select>
<h3>Time:</h3>
<select style="width:200px;" >
<?php query3() ?>
<?php query4() ?>
</select>
</body>
</html>