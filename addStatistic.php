<?php
require "conn.php";
$id_user =  $_POST["UserId"];
$_id_cat = $_POST["CategoryId"];
$diff =  $_POST["Difficulty"];
$time = $_POST["Time"];
$points =  $_POST["Points"];
	
$mysql_qry = "insert into statistic (UserId,CategoryId,Difficulty,Time,Points,Date) values ('$id_user','$id_cat','$diff','$time','$points',now())";
	$result = mysqli_query( $conn,$mysql_qry);
	

$conn->close();
?>