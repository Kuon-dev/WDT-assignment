<?php

include ("conn.php");

$mysql_run = mysqli_query($con, "SELECT * FROM shopping_cart;");
$id = $_GET['Email'];

$result = mysqli_query($con,"DELETE FROM shopping_cart WHERE Email=$id");

mysqli_close($con);

?>