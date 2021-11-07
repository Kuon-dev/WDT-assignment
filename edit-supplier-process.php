<?php
ob_start();
session_start();
include "conn.php";
if (isset($_POST["submitBtn"])) {
    $Supplier_ID = $_POST['Supplier_ID'];
    $Supplier_Name = $_POST["supplierName"];
    $Street = $_POST["street"];
    $City = $_POST["city"];
    $Zipcode = $_POST["zipcode"];
    $State = $_POST["state"];

    $mysql_run= mysqli_query($con,"UPDATE supplier SET
    Supplier_Name = '$Supplier_Name',
    Street = '$Street',
    City = '$City',
    Zipcode = '$Zipcode',
    State = '$State'
    WHERE Supplier_ID = '$Supplier_ID'");
    // if succesful
    
    print "<script>alert('Supplier Information Updated!'); 
    window.location.href='manage-supplier.php';
    </script>";
    
}
?>