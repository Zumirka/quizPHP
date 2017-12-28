<?php
require "conn.php";
$mysql_qry="select Name from category;";
$conn->set_charset("utf8");
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
