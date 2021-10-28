<?php
include("conn.php"); 
// ref = https://www.w3schools.com/php/php_mysql_select.asp
// ref 2 = https://www.youtube.com/watch?v=gCo6JqGMi30&ab_channel=DaniKrossing
ob_start();
session_start();

		$Product_ID = $_GET["Product_ID"];

        $Price = "SELECT Price FROM product WHERE Product_ID = '$Product_ID'";

		if(isset($_SESSION["user_email"])){

            $email = $_SESSION["user_email"];
        
            $sql = "SELECT * FROM shopping_cart WHERE Product_ID = '$Product_ID' AND Email = '$email'";
            $run_query = mysqli_query($con,$sql);
            $count = mysqli_num_rows($run_query);
            if($count > 0){
                echo "<script>
                alert('Product is already in the cart.');
                window.history.back();
                </script>";
            } else {
                $sql = "INSERT INTO shopping_cart
                (Cart_ID, Email,Product_ID, Quantity, Price) 
                VALUES ('','$email','$Product_ID','1','$Price')";
                if(mysqli_query($con,$sql)){
                    echo "<script>
                        alert('Product is added in the cart.');
                        window.history.back();
                        </script>";
                    exit();
                }
            }		
		}
        else {
            echo"<script>
                alert('You need to sign in first to access this page.');
                window.location.href='registration_panel.php';
                </script>";
        };
?>	