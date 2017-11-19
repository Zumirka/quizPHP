<?php
$dba_name = "heroku_94287781fba39f4";
$mysql_username = "b4d6043aa104f8";
$mysql_password = "69463135";
$server_name = "eu-cdbr-west-01.cleardb.com";
$conn = mysql_connect($server_name, $mysql_username, $mysql_password);
$selectdb = mysql_select_db($dba_name,$conn);  


?>