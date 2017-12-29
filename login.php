<?php
require "conn.php";
$user_name = $_POST['q'];
$user_pass = $_POST['q'];
$mysql_qry = "select * from user where Name like '$user_name' and Password like '$user_pass';"; 
$result = mysqli_query( $conn,$mysql_qry); 
if(mysqli_num_rows($result) >= 1)
{
	$row=mysqli_fetch_assoc($result);
	$name=$row["Name"];
	print(json_encode($flaga));
	print(json_encode($name));
	echo " \n Logowanie powiodło się. Witaj ".$name ;
}
else 
{
	echo " \n Logowanie nie powiodło się.";
}
?>
