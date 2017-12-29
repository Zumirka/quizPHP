<?php
require "conn.php";
$mysql_qry="select Id from category;";

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
