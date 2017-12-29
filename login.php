<?php
require "conn.php";
$user_name = $_POST[admin];
$user_pass = $_POST[admin];
$mysql_qry = "select * from user where Name like '$user_name' and Password like '$user_pass';"; 
$result = mysqli_query( $conn,$mysql_qry); 
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
