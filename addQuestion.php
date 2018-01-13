<?php
require "conn.php";
$id_cat =  $_POST["idCategory"];
$diff = $_POST["diff"];
$question =  $_POST["question"];
$answ1 = $_POST["answ1"];
$answ2 =  $_POST["answ2"];
$answ3 = $_POST["answ3"];

	
$mysql_qry = "insert into question (CategoryId,Content,Difficult) values ('$id_cat','$question','$diff')";
	$result = mysqli_query( $conn,$mysql_qry);
	// Pobiera id ostatnio dodanego pytania
	$id_quest=mysqli_insert_id($conn);
$mysql_qry = "insert into answears (QuestionId,Content,IsTrue) values('$id_quest','$answ1',1)";
	$result = mysqli_query( $conn,$mysql_qry);
$mysql_qry = "insert into answears (QuestionId,Content,IsTrue) values('$id_quest','$answ2',0)";
	$result = mysqli_query( $conn,$mysql_qry);
$mysql_qry = "insert into answears (QuestionId,Content,IsTrue) values('$id_quest','$answ3',0)";
	$result = mysqli_query( $conn,$mysql_qry);
	
$conn->close();
?>