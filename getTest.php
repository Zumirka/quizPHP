<?php
require "conn.php";
$id = $_POST["id"];
$diff = $_POST["diff"];
$mysql_qry = "SELECT q.Difficult,q.Content as Question,a.Content as Answer,a.IsTrue FROM (question q inner join answers a on a.QuestionId=q.Id) INNER JOIN(  
SELECT q.Id FROM question q where q.CategoryId='$id' and q.Difficult='$diff' order by rand() limit 5) as q2 ON q2.Id=q.Id;"; 
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