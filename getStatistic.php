<?php
require "conn.php";
$user=$_POST["UserName"];
$time1=$POST["time1"];
$time2=$POST["time2"];
$mysql_qry = "select Id from user where Name='$user'";
$result=$conn->query($mysql_qry);
$row = mysqli_fetch_assoc($result);
$user_id=$row["Id"];
$mysql_qry="select* from statistic where UserId=;'$user_id'";
$result=$conn->query($mysql_qry);
$conn->close();
?>
