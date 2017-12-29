<?php
require "conn.php";
$user_name =  $_POST["login"];
$user_pass = $_POST["password"];
$mysql_qry = "insert into user (Name, Password) values ('$user_name','$user_pass')"; 
if($conn->query($mysql_qry) === TRUE)
{
	echo  "Rejestracja pomyślna. Możesz sie zalogować " ;
	
}
else 
{
	echo  "Błąd. Wpisz inny login lub hasło."; 
}
$conn->close();
?>
