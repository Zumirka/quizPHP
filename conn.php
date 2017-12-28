<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$dba_name = substr($url["path"], 1);
$mysql_username = $url["user"];
$mysql_password = $url["pass"];
$server_name = $url["host"];
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $dba_name); 
mysqli_set_charset($con, "utf8");
?>