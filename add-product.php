<?php
    include("conn.php");
    $product_name = $_POST['Product_Name'];
    $brand = $_POST['Brand'];
    $typeOfAnimal = $_POST['Type_of_Animal'];
    $category = $_POST['Category'];
    $description = $_POST['Description'];
    $price = $_POST['Price'];
    $quantity = $_POST['Quantity'];
    $supplierID = $_POST['Supplier_ID'];
    $staffID = $_SESSION['Staff_ID'];
    //check is the data available in database
    $result=mysqli_query($con,"SELECT * FROM product WHERE Product_Name ='$product_name' limit 1");
    //if the data available then display account exist alert
    if(mysqli_num_rows($result)==1){
        echo "<script>
        alert('Product exists.');
        window.location.href = 'registration_panel.php';
        </script>";
        //close connection
        mysqli_close($con);
    }
    else{
    //if the data not exist then add the data into database
        $sql="INSERT INTO product (Product_Name, Brand, Type of Animal, Category, Description, Price, Quantity, Supplier_ID, Staff_ID, Product_Image)
        VALUES
        ('$_POST[Product_Name]','$_POST[Brand]','$_POST[Type_of_Animal]','$_POST[Category]','$_POST[Description]','$_POST[Price]','$_POST[Quantity]','$_POST[Supplier_ID]','$_POST[Staff_ID]','$_POST[IMG]')";
        if (!mysqli_query($con,$sql)) {
            die('Error: ' . mysqli_error($con));
            }
            else {
            session_start();
            echo '<script>
            alert('Product had been added.');
            window.location.href='';
            </script>';
            }
        }
        //close connection
        mysqli_close($con);
?>