<?php
require "conn.php";
$user=$_POST["UserName"];
$id_cat = $_POST["CategoryId"];
$diff =  $_POST["Difficulty"];
$time = $_POST["Time"];
$points =  $_POST["Points"];
$mysql_qry = "select Id from user where Name='$user'";
$result=$conn->query($mysql_qry);
$row = mysqli_fetch_assoc($result);
$user_id=$row["Id"];
$mysql_qry = "insert into statistic (UserId,CategoryId,Difficulty,Time,Points,Date) values ('$user_id','$id_cat','$diff','$time','$points',now())";
mysqli_query( $conn,$mysql_qry);
echo $user_id;
echo      ;
echo $mysql_qry;
 echo      ;
 echo mysqli_error($conn);

$conn->close();
?>