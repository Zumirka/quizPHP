<?php
require "conn.php";
$user_name = $_POST['q'];
$user_pass = $_POST['q'];
$mysql_qry = "select * from user where Name like q and Password like q;"; 
$result = mysqli_query( $conn,$mysql_qry); 
if(mysqli_num_rows($result) > 0)
{
	$row=mysqli_fetch_assoc($result);
	$name=$row["Name"];
	echo " \n Logowanie powiodło się. Witaj ".$name ;
}
else 
{
	echo " \n Logowanie nie powiodło się.";
}
?>
