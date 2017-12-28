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
	 $clean = utf8ize($flaga); 
	print (safe_json_encode($clean));
	echo json_last_error();
}
$conn->close();
?>
