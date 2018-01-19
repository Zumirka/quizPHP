<?php
require "conn.php";
$id = $_POST["id"];
$diff = $_POST["diff"];

$mysql_qry="SELECT count(*)  FROM question q where q.CategoryId='$id' and q.Difficult='$diff';";
$result=$conn->query($mysql_qry);
$d = mysqli_fetch_row($result);
$rand = mt_rand(0,$d[0] - 1);

$mysql_qry = "SELECT q.Difficult,q.Content as Question,a.Content as Answear,a.IsTrue FROM (question q inner join answears a on a.QuestionId=q.Id) INNER JOIN(  
SELECT DISTINCT q.Id FROM question q where q.CategoryId='$id' and q.Difficult='$diff' limit $rand,10) as q2 ON q2.Id=q.Id;"; 
$result=$conn->query($mysql_qry);
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

