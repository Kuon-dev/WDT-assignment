<!DOCTYPE html>
<html>
<head>
    <!-- Page Title -->
    <title>Paws Heaven Cart</title>

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
        .parentbox {
	        height: auto;
        }

        .childbox {
            border: 1px solid red;
            height: 240px;
            margin-bottom: 10px;
        }

        .productImageHolder {
            float: left;
            width: 22%;
            margin-left: 30px;
            padding-right: 35px;
            border-right: 1px solid black;
        }

        .productPurchase {
            float: left;
            width: 50%;
            height: 240px;
            padding: 20px;
        }

        .productName {
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .quantityHolder button {
            border: 2px solid black;
            background-color: white;
            width: 40px;
        }

        .quantityHolder button:hover {
            cursor: pointer;
            box-shadow: 0 5px 10px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        }

        .quantityHolder input {
            border: 2px solid black;
            width: 60px;
            margin: 0px 30px;
        }

        .totalPriceHolder {
            border-left: 1px solid black;
            float: right;
            width: 25%;
            height: 240px;
        }

        #totalPrice {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        #removeBTN {
            border: 2px solid red;
            color: red;
            width: 100px;
        }

        #removeBTN:hover {
            box-shadow: 0 5px 10px 0 rgba(255, 0, 0, 0.671),0 6px 20px 0 rgba(255, 0, 0, 0.19);
        }

        .checkoutPriceHolder {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            height: 50px;
            margin-top: 20px;
        }

        .checkout {
            float: left;
        }

        .checkoutPrice {
            float: right;
            width: 300px;
            margin-right: 20px;
            
        }

        #checkoutBTN {
            float: right;
            margin-top: 30px;
            margin-right: 50px;
            width: 120px;
            height: 40px;
            border: 1px solid black;
            background-color: white;
        }

        #checkoutBTN:hover {
            cursor: pointer;
            box-shadow: 0 5px 10px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        }
    </style>
    
</head>
<body>
<!-- Header -->
<div id="header"></div>

<!-- Main Content Area -->
<div class="content-area">
	<div>
		<h2 class="sora center fs-1 fw-bolder">My Shopping Cart</h2>
	<br>
	<hr>
	<div class="parentbox">
	<?php 
		//connect database
		include ("conn.php"); 
		//get data from database
		$mysql_run = mysqli_query($con, "SELECT * FROM shopping_cart;");
		while ($row = mysqli_fetch_assoc($mysql_run)) {
			$data ='<div class="childbox" onclick="redirect()">
            <!-- Product Image -->
            <div class="productImageHolder">
                <img class="productImage" src="data:image/jpg;base64,'.base64_encode($row['Product_Image']).'" width="200px" height="240px"/>
            </div>
            
            <!-- Product Purchase Info -->
            <div class="productPurchase">
                <!-- product name -->
                <div class="productName">
                    <a href="#">
                        <h3>'.$row['Product_ID'].'</h3>
                    </a>
                </div>
                <!-- product price -->
                <div class="productPrice">
                    <h5>RM </h5><h4>'.$row['Price'].'</h4>
                    <br>
                </div>

                <div class="quantityHolder">
                    <!-- plus button -->
                    <button id="plusBTN">
                        <b>+</b>
                    </button>

                    <!-- quantity -->
                    <input id="productQuantity" type="number" value='.$row['Quantity'].' min="1">

                    <!-- minus button -->
                    <button id="minusBTN">
                        <b>−</b>
                    </button>
                </div>
            </div>

            <!-- Total Price Container-->
            <div class="totalPriceHolder">
                <!-- total price -->
                <div id="totalPrice">
                    RM <h3>200</h3>
                </div>
                <!-- remove button -->
                <button id="removeBTN">
                    <b>Remove</b>
                </button>
            </div>
        </div>
			
		';
		//display data
		echo $data;
		
		} 
		mysqli_close($con);//to close the database connection
    ?>

    <div class="checkoutPriceHolder">
        <div class="checkout">
            <h3>Total : RM</h3>
        </div>
        <div class="checkoutPrice">
            <h3>100</h3>
        </div>
    </div>
    <!-- checkout button -->
    <a href="#">
        <button id="checkoutBTN">
            Check Out
        </button>
    </a>
</div>

<!-- javascript -->
<script>
    // document.querySelectorAll('.productPrice > h4').forEach(productTotalPrice => console.log(productTotalPrice.innerHTML))

    // Product Price Calculation
    let productTotalPrice = document.querySelector('#totalPrice > h3').innerHTML
    let productPriceUnit = document.querySelector('.productPrice > h4').innerHTML
    let produtQuantity = document.querySelector("#productQuantity").value
    
    
    productTotalPrice = (productPriceUnit * produtQuantity)
    document.querySelector('#totalPrice > h3').innerHTML = productTotalPrice

    // CheckOut Price
    let checkoutPrice = document.querySelectorAll('.checkoutPrice > h3')
    console.log(checkoutPrice)


    // Quatity add/minus
    let plusQuantity = document.querySelector("#plusBTN");
    let minusQuantity = document.querySelector("#minusBTN");
    let Quantity = document.querySelector("#productQuantity");

    plusQuantity.addEventListener('click', () => {
        Quantity.value = parseInt(Quantity.value) + 1;
        let productTotalPrice = document.querySelector('#totalPrice > h3').innerHTML;
        let productPriceUnit = document.querySelector('.productPrice > h4').innerHTML;
        let produtQuantity = document.querySelector("#productQuantity").value;
        productTotalPrice = (productPriceUnit * produtQuantity);
        document.querySelector('#totalPrice > h3').innerHTML = productTotalPrice;
    });

    minusQuantity.addEventListener('click', () => {
        if (Quantity.value <= 1) {
            return;
        }
        Quantity.value = parseInt(Quantity.value) - 1;
        let productTotalPrice = document.querySelector('#totalPrice > h3').innerHTML;
        let productPriceUnit = document.querySelector('.productPrice > h4').innerHTML;
        let produtQuantity = document.querySelector("#productQuantity").value;
        productTotalPrice = (productPriceUnit * produtQuantity);
        document.querySelector('#totalPrice > h3').innerHTML = productTotalPrice;
    });

    let RemoveProduct = document.getElementById('removeBTN')
    console.log(RemoveProduct)

</script>

</body>

<!-- Footer -->
<div id="footer"></div>
</html>