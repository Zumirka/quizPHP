<?php
require "conn.php";
$user_name = $_POST["login"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from user where Name like '$user_name' and Password like '$user_pass';"; 
$result = mysqli_query( $conn,$mysql_qry); 
if(mysqli_num_rows($result) > 0)
{
	$row=mysqli_fetch_assoc($result);
	$name=$row["Login"];
	echo " \n Loading succes! Welcome ".$name ;
}
else 
{
	echo " \n Login not success";
}
?>
