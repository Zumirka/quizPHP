<?php
require "conn.php";
$user_name = $_POST["login"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from user where Name like '$user_name' and Password like '$user_pass';"; 
$result = mysqli_query( $conn,$mysql_qry); 
if(mysqli_num_rows($result) > 0)
{
	echo "1";
}
else 
{
	echo "0";
}
$conn->close();
?>
