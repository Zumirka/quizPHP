<?php
require "conn.php";

if(isset($_POST['id_kat']))
		$id_kat=$_POST['id_kat'];
	else
		header("Location: question.php?err=no_id_kat&id=".$id_kat);
	if(isset($_POST['odp1']))
		$odp1=$_POST['odp1'];
	else
		header("Location: question.php?err=no_odp_1&id=".$id_kat);
	if(isset($_POST['odp2']))
		$odp2=$_POST['odp2'];
	else
		header("Location: question.php?err=no_odp_2&id=".$id_kat);
	if(isset($_POST['odp3']))
		$odp3=$_POST['odp3'];
	else
		header("Location: question.php?err=no_odp_3&id=".$id_kat);
	if(isset($_POST['popr1']))
		$popr1=$_POST['popr1'];
		else
		header("Location: question.php?err=no_popr1&id=".$id_kat);
	if(isset($_POST['popr2']))
		$popr2=$_POST['popr2'];
		else
		header("Location: question.php?err=no_popr2&id=".$id_kat);
	if(isset($_POST['popr3']))
		$popr3=$_POST['popr3'];
		else
		header("Location: question.php?err=no_popr3");
	if(isset($_POST['pkt']))
		$pkt=$_POST['pkt'];
		else
		header("Location: question.php?err=no_pkt&id=".$id_kat);
	if(isset($_POST['pyt']))
		$pyt=$_POST['pyt'];
		else
		header("Location: question.php?err=no_pyt&id=".$id_kat);
	
	
	$mysql_qry = "insert into question values('','$id_kat','$pyt','$pkt')";
	$result = mysqli_query( $conn,$mysql_qry);
	// Pobiera id ostatnio dodanego pytania
	$id_quest=mysqli_insert_id($conn);
	
	
	$mysql_qry = "insert into answears values('','$id_quest','$odp1','$popr1')";
	$result = mysqli_query( $conn,$mysql_qry);
	$mysql_qry = "insert into answears values('','$id_quest','$odp2','$popr2')";
	$result = mysqli_query( $conn,$mysql_qry);
	$mysql_qry = "insert into answears values('','$id_quest','$odp3','$popr3')";
	$result = mysqli_query( $conn,$mysql_qry);
	

	
$conn->close();
?>