<?php
require "conn.php";

$sqlQuery="INSERT INTO question(CategoryId,Content,Difficult) 
    VALUES(31,'test1',2)";
    $result=mysql_query($sqlQuery);

    $id = mysql_insert_id();

$sqlQuery = "INSERT INTO answears(QuestionId,Content,IsTrue) VALUES (' $id ','test2',1)";
$result=$conn->query($sqlQuery);

if($result)
{
	while($row=mysqli_fetch_array($result))
	{
		$flaga[]=$row;
	}
	print(json_encode($flaga));
	echo json_encode($flaga);
	
}
$conn->close();
?>