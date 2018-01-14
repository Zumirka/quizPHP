<?php
require "conn.php";
$user=$_POST["UserName"];
$id_cat = $_POST["CategoryId"];
$diff =  $_POST["Difficulty"];
$time = $_POST["Time"];
$points =  $_POST["Points"];
$mysql_qry = "select Id from user where Name='$user'";
$user_id=$conn->query($mysql_qry);
$mysql_qry = "insert into statistic (UserId,CategoryId,Difficulty,Time,Points,Date) values ('$user_id','$id_cat','$diff','$time','$points',now())";
	$result = mysqli_query( $conn,$mysql_qry);

 echo mysqli_error($conn);

$conn->close();
?>