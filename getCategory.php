<?php
require "conn.php";
$mysl_qry="select Name from category";
$conn->query($mysql_qry);
$conn->close();
?>
