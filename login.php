<?php
require "conn.php";
$user_name = $_POST["login"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from user where Name like '$user_name' and Password like '$user_pass';"; 
$result = mysqli_query( $conn,$mysql_qry); 
if(mysqli_num_rows($result) > 0)
{
	$row=mysqli_fetch_assoc($result);
	$name=$row["Name"];
if($row["Name"]==$user_name&&$row["Password"]==$user_pass)
{ 
	echo " \n Logowanie powiodło się. Witaj ".$name ;
}
else if($row["Name"]!=$user_name)
{
	echo " \n Logowanie nie powiodło się zły login";
}
else if($row["Password"]!=$user_pass)

	echo " \n Logowanie nie powiodło się złe hasło";
}
else 
{
	echo " \n Logowanie nie powiodło się.";
}
?>
