<?php
ob_start();
session_start();
include "conn.php";
?>

<!-- 1:42:53-1    0:6:00-2 -->

<!DOCTYPE html>
<html>
<head>
    <!-- Page Title -->
    <title>Paws Heaven Add New Product</title>

    <!-- Common Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Import CSS Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Import jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Display Header & Footer -->
    <script>
        $(function(){ 
            $("#header").load("common/header.php");
            $("#footer").load("common/footer.php");
        });

    </script>
    
    <style>
        .section {
        margin-bottom: 15px;
        width:100%;
        }

        .label {
        text-align: left;
        margin-right: 10px;
        }

        .field {
        width:100%;
        }

        * {
        box-sizing: border-box;
        }

        #container {
        padding: 16px;
        background-color: lightgrey;
        width:800px;
        margin:0 auto;
        }

        input[type=text], input[type=file], input[type=password], input[type=date], input[type=email], input[type=tel], textarea, select {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        font-size:15pt;
        }

        input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
        }

        input[type='radio'] { 
        transform: scale(2); 
        }

        .btn {
        background-color: #555555;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 49%;
        opacity: 0.9;
        display: inline;
        }

        .btn:hover {
        opacity: 1;
        }

        .button {
            background-color: #e7e7e7;
            color: black;
            border: 2px solid #e7e7e7;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius:7px;
        }

        .button:hover {
            background-color: white;
        }
    </style>

</head>
<body>

<!-- Header -->
<div id="header"></div>

<!-- Main Content Area -->
<div class="content-area">
<?php 
    if (isset($_SESSION["$Staff_ID"])) {
        print '
        <!-- form -->
        <form action="#" method="post" enctype="multipart/form-data" >
    
            <div id="container">
            <h2>Add New Product</h2>
                <div class="section">
                    <div class="label">
                        Product Name
                    </div>
                    <div class="field">
                        <input type="text" name="Product_Name" required>
                    </div>
                </div>
                <div class="section">
                    <div class="label">
                        Brand
                    </div>
                    <div class="field">
                        <input type="text" name="Brand" required>
                    </div>
                </div>
                <div class="section">
                    <div class="label">
                        Type of Animal
                    </div>
                    <div class="field" style="padding-top:10px;">
                        <input type="radio" name="Type_of_Animal" value="Dog" required> &nbsp;&nbsp;Dog &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="Type_of_Animal" value="Cat" required> &nbsp;&nbsp;Cat 
                    </div>
                </div>
                <div class="section">
                    <div class="label">
                        Category
                    </div>
                    <div class="field">
                        <select name="Category" required>
                            <option value="">Please select</option>
                            <option value="Food">Food</option>
                            <option value="Toy">Toy</option>
                            <option value="Hygiene">Hygiene</option>
                            <option value="Vitamin">Vitamin</option>
                            <option value="Discount">Discount</option>
                            <option value="Package">Package</option>
                            </select>
                        </div>
                </div>
                <div class="section">
                    <div class="label">
                        Description
                    </div>
                    <div class="field" style="padding-top:10px;">
                        <textarea name="Description" id="" cols="30" rows="3" placeholder="Type here...." required></textarea>
                    </div>
                </div>
                <div class="section" style="padding-top:15px;">
                    <div class="label">
                        Price
                    </div>
                    <div class="field">
                        <input type="number" name="Price" required>
                    </div>
                </div>
                <div class="section">
                    <div class="label">
                        Quantity
                    </div>
                    <div class="field">
                        <input type="number" name="Quantity" required>
                    </div>
                </div>
                <div class="section">
                    <div class="label">
                        Supplier ID
                    </div>
                    <div class="field">
                        <input type="text" name="Supplier_ID" required>
                    </div>
                </div>
                <div class="section">
                    <div class="label">
                        Staff ID
                    </div>
                    <div class="field">
                        <input type="text" name="Staff_ID" required value'.$_SESSION["Staff_ID"].'>
                    </div>
                </div>
                <div class="section">
                    <div class="label">
                        Upload image
                    </div>
                    <div class="field">
                        <input type="file" name="contact_pic">
                    </div>
                </div>
                <div class="section">
                    <div class="label">
                        &nbsp;
                    </div>
                    <div class="field">
                        <button type="submit" class="btn" name="submitBtn">Submit</button>
                        <button type="reset" class="btn">Reset</button>
                    </div>
                </div>
            </div>
        </form>
        ';
    }

    else {
        echo"<script>
            alert('You need to sign in first to access this page.');
            window.location.href='registration_panel.php';
            </script>";
    };

?>


</div>

</body>
<!-- Footer -->
<div id="footer"></div>
</html>

<?php

    if(isset($_POST['submitBtn'])) {
        
        //INSERT INTO product()

        $product_name = $_POST['Product_Name'];
        $brand = $_POST['Brand'];
        $typeOfAnimal = $_POST['Type_of_Animal'];
        $category = $_POST['Category'];
        $description = $_POST['Description'];
        $price = $_POST['Price'];
        $quantity = $_POST['Quantity'];
        $supplierID = $_POST['Supplier_ID'];
        $staffID = $_POST['Staff_ID'];

        print_r($_SESSION);
        print $product_name;
        print $brand;
        print $typeOfAnimal;
        print $category;
        print $description;
        print $price;
        print $quantity;
        print $supplierID;
        print $staffID;
    }

?>