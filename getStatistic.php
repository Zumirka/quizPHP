<?php
require "conn.php";
$user=$_POST["UserName"];
$time1=$_POST["time1"];
$time2=$_POST["time2"];
$mysql_qry = "select Id from user where Name='$user'";
$result=$conn->query($mysql_qry);
$row = mysqli_fetch_assoc($result);
$user_id=$row["Id"];
$mysql_qry="select* from statistic where UserId='$user_id';";
$result=$conn->query($mysql_qry);
if($result)
{
	while($row=mysqli_fetch_array($result))
	{
		$flaga[]=$row;
	}
	print(json_encode($flaga));
	echo json_last_error();
}
$conn->close();
?>
