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
		$t_id=$_POST['theatres'];
 	$myData1=mysql_query("SELECT * from theatres WHERE t_id='$t_id'");
	while($record=mysql_fetch_array($myData1)){
	echo '<option value="' . $record['t_id'] . '">' . $record['t_time'] . '</option>';
	}
	}
	
		function query2()
	{
		$t_id=$_POST['theatres'];
 	$myData=mysql_query("SELECT * from theatres WHERE t_id='$t_id'");
	while($record=mysql_fetch_array($myData)){
	echo '<option value="' . $record['t_id'] . '">' . $record['t_time2'] . '</option>';
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

.look1 {
	position: absolute;
	height:850px;
    width:500px;
    background:url(timing-pic5.jpg);
    background-repeat: no-repeat;
    background-size: contain;
}


<!-- 
    .look2 {
	position: absolute;
	left:250px;
	height:700px;
    width:500px;
    background:url(timing-pic7.jpg);
    background-repeat: no-repeat;
    background-size: contain;
}-->

.look3{
	position: absolute;
    right: 0px;
	height:850px;
    width:500px;
    background:url(timing-pic6.jpg);
    background-repeat: no-repeat;
    background-size: contain;
}

.align_center {    
	position: absolute;
    top: 20px;
	left:460px;
    border: 27px solid transparent;
    padding: 12px;
	}
	
.go_bottom{
	position: absolute;
    top: 520px;
	left:470px;
    border: 27px solid transparent;
    padding: 12px;
}
</style>
</head>
<body>
<?php connect() ?>
<form method="POST" action="price.php">
<div class="look1"  style="float:left;"></div>
<div class="align_center">
<h2 style="font-family:Brushed; color:black;"> SELECT YOUR TIMINGS: </h2>
<select name="timings" style="width:200px;" >
<?php query1() ?>
<?php query2() ?>
  </select><br />
  <input type="submit"  value="Continue" />
</div>
<div class="look3"  ></div>
<div class="go_bottom" style="float:left;">
  <a href="admin.htm" class="dropbtn">ADMINISTRATOR (Click Here)</a>
  </div>
  </form>
  </form>
</body>
</html>