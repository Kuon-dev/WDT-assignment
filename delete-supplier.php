<?php
//connect database
include ("conn.php");
ob_start();
session_start();
//get Product_ID
$Supplier_ID = intval($_GET['$Supplier_ID']);

//delete the data from database
$sql ="DELETE FROM supplier WHERE Supplier_ID='Supplier_ID'";
    if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
    }
    else {
    echo "<script>
            alert('Supplier had been remove from supplier list.');
            window.location.href='manage-supplier.php';
            </script>";
    }

// close database connection
mysqli_close($con);
?>