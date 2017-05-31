<?php

//$book_id is a php variable to store values from html elements using POST method
		$i_tid = $_POST['id'];
		$i_tname = $_POST['name'];
		$i_ttiming1 = $_POST['timing'];
		$i_ttiming2 = $_POST['timing2'];
		$i_tscreen1 = $_POST['screen1'];
		$i_tscreen2 = $_POST['screen2'];
		$i_tscreen3 = $_POST['screen3'];
		$i_tprice1 = $_POST['price'];
		$i_tprice2 = $_POST['price2'];

$host = "localhost";
$username="root";
$password="mysql2016";
$database="mini-project";

//mysql database connection function in php mysql_connect
		mysql_connect($host,$username,$password); 

//library databse selection with @mysql_select_db
		@mysql_select_db($database) or die("Unable to select database");

//$query is a php variable for holding database commands
		$query="insert into theatres values('$i_tid','$i_tname','$i_ttiming1','$i_ttiming2','$i_tprice1','$i_tprice2','$i_tscreen1','$i_tscreen2','$i_tscreen3')";

//mysql_query to execute  database query
		if(mysql_query($query))
		{
            echo "<h3>Successfully Added New Movie </h3></br>";
		}else{
			echo "Unable To Add Movie </br>";
		}
//another php variable
			$query1="SELECT * FROM theatres";
			       //retrive / fetch rows from database
			       $result=mysql_query($query1);

             //count number of records available with mysql_numrows
			       $num=mysql_numrows($result);
             echo"<b>Showing Table:</b>";
             print "<table border size=2>
                      <tr><th>Theatre-ID</th>
                      <th>Theatre-Name</th>
                      <th>Theatre-Time1</th>
					  <th>Theatre-Time2</th>
					  <th>Theatre-Screen1</th>
					  <th>Theatre-Screen2</th>
					  <th>Theatre-Screen3</th>
					  <th>Theatre-Price1</th>
					  <th>Theatre-Price2</th></tr>";
             //counter
             $i=0;
			       while($i<$num) {
			               //mysql_result fetch each tuple particular column value
			               $t_id2=mysql_result($result,$i,"t_id");
			               $t_name2=mysql_result($result,$i,"t_name");
			               $t_timing1=mysql_result($result,$i,"t_time");
						   $t_timing2=mysql_result($result,$i,"t_time2");
						   $t_screen1=mysql_result($result,$i,"screen1");
						   $t_screen2=mysql_result($result,$i,"screen2");
						   $t_screen3=mysql_result($result,$i,"screen3");
						   $t_price1=mysql_result($result,$i,"t_price");
						   $t_price2=mysql_result($result,$i,"t_price2");
			               
						   //dispaly table rows to browser
			       echo "<tr><td>$t_id2</td>
                       <td>$t_name2</td>
                       <td>$t_timing1</td>
					   <td>$t_timing2</td>
					   <td>$t_screen1</td>
					   <td>$t_screen2</td>
					   <td>$t_screen3</td>
					   <td>$t_price1</td>
					   <td>$t_price2</td>";
			       $i++;
			       }
			       print "</table>";
				   
echo "<a href='admin2.htm'>Go Back </a><br />";
echo "<br/>";echo "<br/>";
echo "<a href='movie.php'>Home </a><br />";
?>
<!doctype html?
<html>
<head>
<style>
table,body{
	color:white
}
</style>
</head>
<body background="admin-pic.jpg" link="white" vlink="orange">
</body>
</html>