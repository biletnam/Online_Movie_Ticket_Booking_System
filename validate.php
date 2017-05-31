<!DOCTYPE HTML>
<html>
<head>
<style>
body{
	color:white;
}

</style>
</head>
<body background="admin-pic.jpg" link="white" vlink="orange">
<?php
//store database related information

//$book_id is a php variable to store values from html elements using POST method
$host = "localhost";
$username = "root";
$password = "mysql2016";
$database = "mini-project";

		$admin_id = $_POST['id'];
		$admin_pass = $_POST['pass'];
		$x=10;
		
		
$link = mysql_connect($host, $username, $password)
    or die('Could not connect: ' . mysql_error());
mysql_select_db($database) or die('Could not select database');

$query = "SELECT a_id,a_pass FROM admin WHERE a_id='$admin_id'";
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

if (mysql_num_rows($result) > 0) {
    // Printing results in HTML
    echo "<table>\n";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
			if($col_value == $admin_id || $col_value == $admin_pass){
			$x+=$x;}
			else{
				$x-=$x;
			}
            /*echo "\t\t<td>$col_value</td>\n";*/
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";
}
// Free resultset
mysql_free_result($result);

if($x>=20)
{
	echo "Log In Successful";
	echo "<br>";
        echo "<a href='admin2.htm'> Continue </a>";
}
else
{
	echo "Error!! Wrong Username or Password";
	echo "<br>";
        echo "<a href='admin.htm'> Try Again </a>";
}
// Closing connection
mysql_close($link);

?>
</body>
</html>