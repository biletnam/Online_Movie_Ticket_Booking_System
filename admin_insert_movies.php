<?php

//$book_id is a php variable to store values from html elements using POST method
		$i_mid = $_POST['id'];
		$i_mname = $_POST['name'];
		$i_mrating = $_POST['rating'];

$host = "localhost";
$username="root";
$password="mysql2016";
$database="mini-project";

//mysql database connection function in php mysql_connect
		mysql_connect($host,$username,$password); 

//library databse selection with @mysql_select_db
		@mysql_select_db($database) or die("Unable to select database");

//$query is a php variable for holding database commands
		$query="insert into movies values('$i_mid','$i_mname','$i_mrating')";

//mysql_query to execute  database query
		if(mysql_query($query))
		{
            echo "<h3>Successfully Added New Movie </h3></br>";
		}else{
			echo "Unable To Add Movie </br>";
		}
//another php variable
			$query1="SELECT * FROM movies";
			       //retrive / fetch rows from database
			       $result=mysql_query($query1);

             //count number of records available with mysql_numrows
			       $num=mysql_numrows($result);
             echo"<b>Showing Table:</b>";
             print "<table border size=2>
                      <tr><th>Movie-ID</th>
                      <th>Movie-Name</th>
                      <th>Movie-Rating/Buzz</th>";
             //counter
             $i=0;
			       while($i<$num) {
			               //mysql_result fetch each tuple particular column value
			               $m_id2=mysql_result($result,$i,"m_id");
			               $m_name2=mysql_result($result,$i,"m_name");
			               $m_rating2=mysql_result($result,$i,"m_rating");
			               
						   //dispaly table rows to browser
			       echo "<tr><td>$m_id2</td>
                       <td>$m_name2</td>
                       <td>$m_rating2</td>";
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