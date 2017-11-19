<?php
require "conn.php";
$user_name = $_POST["Username"];
$user_pass = $_POST["Password"];
$mysql_qry = "select * from users where Login like '$user_name' and Password like '$user_pass';"; 
$result = mysql_query( $mysql_qry,$conn); 
if(mysql_num_rows($result) > 0)
{
	echo " \n Loading succes! Welcome" ;
}
else 
{
	echo " \n Login not success";
}
?>


