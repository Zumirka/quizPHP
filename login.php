<?php
require "conn.php";
$user_name = $_POST["login"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from users where Login like '$user_name' and Password like '$user_pass';"; 
$result = mysqli_query( $conn,$mysql_qry); 
if(mysqli_num_rows($result) > 0)
{
	$row=mysql_fetch_assoc($result);
	$name=$row["login"];
	echo " \n Loading succes! Welcome ".$name ;
}
else 
{
	echo " \n Login not success";
}
?>
