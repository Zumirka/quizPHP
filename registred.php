<?php
require "conn.php";
$user_name =  $_POST["login"];
$user_pass = $_POST["password"];
$mysql_qry = "insert into user (Name, Password) values ('$user_name','$user_pass')"; 
if($conn->query($mysql_qry) === TRUE)
{
	echo  "1" ;
	
}
else 
{
	echo  "0"; 
}
$conn->close();
?>
