<?php
    include("conn.php");
    ob_start();
    session_start();

    $Supplier_ID = $_POST['Supplier_ID'];
    $Supplier_Name = $_POST['Supplier_Name'];
    $Supplier_Contact = $_POST['Supplier_Contact'];
    $Street = $_POST['Street'];
    $City = $_POST['City'];
    $Zipcode = $_POST['Zipcode'];
    $State = $_POST['State'];

    // check is the data available in database
    $result=mysqli_query($con,"SELECT * FROM supplier WHERE Supplier_ID ='$Supplier_ID' limit 1");

    // if the data available then display account exist alert
    if(mysqli_num_rows($result)==1){
        echo "<script>
        alert('Supplier exists.');
        window.location.href = 'manage-supplier.php';
        </script>";
        // close connection
        mysqli_close($con);
    }
    else{
    // if the data not exist then add the data into database
    $sql="INSERT INTO supplier (Supplier_ID, Supplier_Name, Street, City, Zipcode, State)
    VALUES
    ('$_POST[Supplier_ID]','$_POST[Supplier_Name]','$_POST[Street]','$_POST[City]','$_POST[Zipcode]','$_POST[State]')";

    AND

    $sql="INSERT INTO supplier_contact (Supplier_ID, Supplier_Contact)
    VALUES
    ('$_POST[Supplier_ID]','$_POST[Supplier_Contact]')";
    if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
        }
        else {
        session_start();
        echo '<script>
        window.location.href = "dumbass_page.php";
        </script>';
        }
    }
    
        //close connection  
        mysqli_close($con);
?>