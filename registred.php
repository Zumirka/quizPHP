<?php
require "conn.php";
$user_name =  $_POST["login"];
$user_pass = $_POST["password"];
$mysql_qry = "insert into users (Login, Password) values ('$user_name','$user_pass')"; 
if($conn->query($mysql_qry) === TRUE)
{
	echo  "Insert Successful " ;
	
}
else 
{
	echo  "Error: ".$mysql_qury . "<br>".$conn->error; 
}
echo mysql_qry;
$conn->close();
?>
