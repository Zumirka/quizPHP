<?php
require "conn.php";
$mysql_qry="select Name from category;";
$result=$conn->query($mysql_qry);
if($result)
{
	while($row=mysqli_fetch_array($result))
	{
		$flaga[]=$row;
	}
	print(json_encode($flaga));
}
$conn->close();
?>
