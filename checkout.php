<?php
include ("conn.php");
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Paws Heaven</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script>
            $(function(){ 
                $("#header").load("common/header.php");
                $("#footer").load("common/footer.php");
            });

        </script>
        <style>
        .container-fluid {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        }

        .row-checkout {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        margin: 0 -16px;
        }

        .col-25 {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
        }

        .col-50 {
        -ms-flex: 50%; /* IE10 */
        flex: 50%;
        }

        .col-75 {
        -ms-flex: 35%; /* IE10 */
        flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
        padding: 0 16px;
        }

        .container-checkout {
        background-color: #f2f2f2;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 3px;
        }

        input[type=text] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
        }

        label {
        display: block;
		float: left;
        }

        .icon-container {
        float:left;
        font-size: 24px;
        }

        .card-checkout-btn {
        background-color: #4CAF50;
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
        }

        .onl-checkout-btn {
        background-color: #4CAF50;
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
        }

        .card-checkout-btn:hover {
        background-color: #45a049;
        }

        .onl-checkout-btn:hover {
        background-color: #45a049;
        }

        hr {
        border: 1px solid lightgrey;
        }

        span.price {
        float: right;
        color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
        .row-checkout {
            flex-direction: column-reverse;
        }
        .col-25 {
            margin-bottom: 20px;
        }
        }
        </style>
    </head>
    <body>
    <!-- Header -->
    <div id="header"></div>
    <!-- Checkout Form -->
    <div class="content-area">
        <div class="container-fluid">
            <div class="row-checkout">
            <?php
            $payment_select=$_POST["payment_select"];
            //if the payment is using card then display the form
            if($payment_select=="debit"||$payment_select=="credit"){
                if(isset($_SESSION["user_email"])){
                    $sql = "SELECT * FROM member WHERE Email='$_SESSION[user_email]'";
                    $query = mysqli_query($con,$sql);
                    $row=mysqli_fetch_array($query);
            echo'
            <div class="col-75">
				<div class="container-checkout">
				<form id="checkout_form" action="card-checkout-process.php"" method="POST" class="was-validated">

					<div class="row-checkout">
					
					<div class="col-50">
					<h3>Shipping Address</h3>
					<label for="name">Full Name</label>
					<input type="text" id="name" class="form-control" name="name" value="'.$_SESSION["user_name"].'" required>
					<label for="email">Email</label>
					<input type="text" id="email" class="form-control" name="email" value="'.$_SESSION["user_email"].'" required>
					<label for="address">Address</label>
					<input type="text" id="adr" class="form-control" name="address" value="'.$_SESSION["user_add"].'" required>
				</div>
				
					<div class="col-50">
						<h3>Payment</h3>
						<label for="fname">Accepted Cards</label>
                        <br>
						<div class="icon-container">
                            <img class="fa fa-cc-visa" src="image/visa.png">
                            <img class="fa fa-cc-mastercard" src="image/mastercard.png" width="45px">
                        </div>
						<br><br>
						<label for="cname">Name on Card</label>
						<input type="text" id="cname" name="cardname" class="form-control" required>
						
						<div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
                    </div>
						<label for="expdate">Exp Date</label>
						<input type="text" id="expdate" name="expdate" class="form-control" placeholder="12/22"required>
						

						<div class="row">
						
						<div class="col-50">
							<div class="form-group CVV">
								<label for="cvv">CVV</label>
								<input type="text" class="form-control" name="cvv" id="cvv" required>
						</div>
						</div>
					</div>
                    <input type="submit" name="card-checkout-btn" id="submit" value="Continue to checkout" class="card-checkout-btn">
                    </form>
					</div>
					</div>
				</div>
			</div>';
                }
                else{
                    echo"<script>window.location.href = 'cart.php'</script>";
                }

            }
            //if the payment is online banking then display the form
            else if($payment_select=="online"){
                if(isset($_SESSION["user_email"])){
                    $sql = "SELECT * FROM member WHERE Email='$_SESSION[user_email]'";
                    $query = mysqli_query($con,$sql);
                    $row=mysqli_fetch_array($query);
                echo'
                <div class="col-75">
                    <div class="container-checkout">
                    <form id="checkout_form" action="online-checkout-process.php" method="POST" class="was-validated">
    
                        <div class="row-checkout">
                        
                        <div class="col-50">
                        <h3>Shipping Address</h3>
                        <label for="name">Full Name</label>
                        <input type="text" id="name" class="form-control" name="name" value="'.$_SESSION["user_name"].'" required>
                        <label for="email">Email</label>
                        <input type="text" id="email" class="form-control" name="email" value="'.$_SESSION["user_email"].'" required>
                        <label for="address">Address</label>
                        <input type="text" id="adr" class="form-control" name="address" value="'.$_SESSION["user_add"].'" required>
                    </div>
                        
                        
                        <div class="col-50">
                            <h3>Payment</h3>
                            <p>Please transer to Maybank 1522918271890 reference with your account name.</p>
                            
                            <label for="bname">Bank Name</label>
                            <input type="text" id="bname" name="bankname" class="form-control" required>
                            
                            <label for="account">Bank Account Owner Name</label>
                            <input type="text" class="form-control" id="account" name="account" required>
                        
                            <label for="ref">Receipt Code</label>
                            <input type="text" id="ref" name="ref" class="form-control" required>
                        
                        </div>
                        </div>
                        <input type="submit" id="submit" value="Continue to checkout" class="onl-checkout-btn" name="onl-checkout-btn">
                        </form>
                        </div>
                        </div>
				</div>
			</div>';}  
                        else{
                            echo"<script>window.location.href = 'cart.php'</script>";
                        }    
                    }  
                    
		?>
            <!-- List of product buy -->
			<div class="col-25">
				<div class="container-checkout">
				<?php
                //get the data from database and display
				if (isset($_SESSION["user_email"])) {
                    $Email=$_SESSION["user_email"];
					$run=mysqli_query($con, "SELECT Email, SUM(Price*Quantity) As Total_Payment FROM shopping_cart HAVING SUM(Price*Quantity)=(SELECT MAX(Total_Payment) FROM (SELECT SUM(Price*Quantity) As Total_Payment FROM shopping_cart WHERE Email='$Email') AS Total_Payment)");
                    while ($row=mysqli_fetch_assoc($run)) {
                        $Total_Payment=$row['Total_Payment'];  
                    $mysql_run = mysqli_query($con, "SELECT * FROM shopping_cart WHERE Email='$Email'");
                    while ($row=mysqli_fetch_assoc($mysql_run)) {
                        $Product_ID = $row["Product_ID"];
                        $Quantity = $row["Quantity"];
                        $Price = $row["Price"];
                        $amount=($Price * $Quantity);
                        $sql_run = mysqli_query($con, "SELECT * FROM product WHERE Product_ID = '$Product_ID'");
                        while ($row = mysqli_fetch_assoc($sql_run)) {
                            $Product_Name=$row['Product_Name'];
                    echo'
                    <table class="table table-condensed">
					<thead><tr>
					<th >Product title</th>
					<th >	Qty	</th>
					<th >	Amount</th></tr>
					</thead>
					<tbody>
                    <tr><td><p>'.$Product_Name.'</p></td><td ><p>'.$Quantity.'</p></td><td ><p>'.$amount.'</p></td></tr>
				</tbody>
				</table>
				<hr>
				<h3>total<span class="price" style="color:black"><b> RM '.round($Total_Payment, 2).'</b></span></h3>
				';
                        }
                    }
                    }
                }
				?>
				</div>
			</div>
		</div>
	</div>

    </div>
    </body>
    <!-- Footer -->
    <div id="footer"></div>
</html>

<?php 
    if(isset($_POST["card-checkout-btn"])){
        $name=$_POST["name"];
		$Email=$_SESSION["user_email"];
		$address=$_POST["address"];
        $cardNumber=$_POST["cardNumber"];
	    }
    else if(isset($_POST["onl-checkout-btn"])){
        $name=$_POST["name"];
		$Email=$_SESSION["user_email"];
		$address=$_POST["address"];
        $ref=$_POST["ref"];
    }
?>
