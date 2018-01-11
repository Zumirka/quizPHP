<?php
require "conn.php";

$sqlQuery="INSERT INTO question(CategoryId,Content,Difficult) 
    VALUES(31,'test1',2)";
    $result=mysql_query($sqlQuery);

    $id = mysql_insert_id();

$sqlQuery = "INSERT INTO answears(QuestionId,Content,IsTrue) VALUES (' $id ','test2',1)";
$result=mysql_query($sqlQuery);
$conn->close();
?>