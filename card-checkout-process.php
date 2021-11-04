<?php 
include("conn.php");
ob_start();
session_start();
if(isset($_SESSION["user_email"])){
    $Email = $_SESSION["user_email"];
    $address=$_POST["address"];
    if(($_POST['address'] == '')) {
        $address = $_SESSION["user_add"];
    }
    $cardNumber=$_POST["cardNumber"];
    $sql0="SELECT Order_ID from orders";
    $runquery=mysqli_query($con,$sql0);
    if (mysqli_num_rows($runquery) == 0) {
        echo( mysqli_error($con));
        $order_id=1;
    }else if (mysqli_num_rows($runquery) > 0) {
        $sql2="SELECT MAX(Order_ID) AS max_val from orders";
        $runquery1=mysqli_query($con,$sql2);
        $row = mysqli_fetch_array($runquery1);
        $order_id= $row["max_val"];
        $order_id=$order_id+1;
        echo(mysqli_error($con));
    }
    $date = date('Y-m-d H:i:s');
    $mysql_run = mysqli_query($con, "SELECT * FROM shopping_cart WHERE Email='$Email'");
    while ($row=mysqli_fetch_assoc($mysql_run)) {
    $Product_ID = $row["Product_ID"];
    $Quantity = $row["Quantity"];
    $Price = $row["Price"];
    $sql = "INSERT INTO orders (Order_ID,Email,Product_ID,Quantity,Price,Purchase_Date,Shipping_Address,Card_Number)
    VALUES ('$order_id','$Email','$Product_ID','$Quantity','$Price','$date','$address','$cardNumber')";
    if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
        }
        else {
        $delete = mysqli_query($con,"DELETE FROM shopping_cart WHERE Email='$Email'");
        $row = mysqli_fetch_assoc($delete);
        echo '<script>
        alert("Product had been checkout. You could view the order in Purchase History. Tracking number will be sent to your email.");
        window.location.href = "index.php";
        </script>';
        }
    }
    mysqli_close($con);
    }
?>
