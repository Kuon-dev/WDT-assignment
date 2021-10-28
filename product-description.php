<!DOCTYPE html>
<html>
<head>
    <!-- Page Title -->
    <title>Paws Heaven</title>

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
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,300,500,700);

        .productContainer {
            margin: auto;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
            transition: all 0.3s;
            width: 75%;
            font-family: "Raleway";
        }

        .productContainer:hover {
            box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        }

        .productNavContainer {
            border-bottom: 1px solid grey;
            width: 100%;
            height: 40px;
        }

        #returnBtn {
            font-size: large;
            margin-left: 10px;
            margin-top: 5px;
            float: left;
            border: none;
            background-color: white;
        }

        #returnBtn:hover {
            cursor: pointer;
        }

        .productDescriptionContainer {
            display: flex;
            height: 450px;
            border-bottom: 1px solid grey;
        }

        .productImageContainer {
            width: 600px;
            height: 450px;
            border-right: 1px solid grey;
            float: left;
        }

        .productImageContainer img {
            margin: 50px 30px 30px 30px;
            width: 250px;
            height: 350px;
        }

        .productInfo {
            float: right;
            width: 100%;
        }

        .productName { 
            height: 80px;
            text-align: left;
            padding: 20px;
            font-weight: bold;
            font-size: 40pt;
        }

        .productManufacturer {
            padding-left: 20px;
            padding-bottom: 20px;
            text-align: left;
            font-size: 16pt;
            border-bottom: 1px solid grey;;
        }

        .productPrice {
            font-size: 35pt;
            font-weight: bold;
            padding: 20px;
            text-align: left;
            border-bottom: 1px solid grey;
        }

        .productPrice p:first-child {
            float: left;
            font-size: 16pt;
            font-weight: normal;
            padding-right: 20px;
        }

        .productPrice p:last-child {
            float: right;
            padding-right: 50%;
            font-size: 16pt;
            font-weight: normal;
        }

        .productDescription {
            text-align: left;
            padding: 20px;
            height: 100px;
            border-bottom: 1px solid grey;
        }

        .productQuantity {
            padding-top: 30px;
            padding-bottom: 20px;
        }

        .productQuantity button{
            border: 2px solid black;
            background-color: white;
            width: 40px;
            font-weight: bold;
            font-size: 20pt;
        }

        .productQuantity button:hover {
            cursor: pointer;
            box-shadow: 0 5px 10px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        }

        #productQuantity {
            transform: translateY(-3px);
            border: 2px solid black;
            width: 150px;
            margin: 0px 30px;
        }

        #addtocartBTN {
            border: 2px solid black;
            background-color: white;
            width: 150px;
        }

        #addtocartBTN:hover {
            cursor: pointer;
            box-shadow: 0 5px 10px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        }

        .reviewTitle {
            padding: 20px;
            font-size: 30pt;
            font-weight: bold;
        }

        .reviewHolder {
            padding: 30px;
            text-align: left;
        }

        .Names {
            padding-bottom: 10px;
        }

        .Reviews {
            height: 70px;
            border: 1px solid black
        }
    </style>
</head>
<body>

<!-- Header -->
<div id="header"></div>

<!-- Main Content Area -->
<div class="content-area">

    <!-- Card -->
    <div class="productContainer">
        <!-- Navigational Bar -->
        <div class="productNavContainer">
            <a href="index.php">
                <button id="returnBtn"> < Back </button>
            </a>
        </div>
        <!-- //Navigational Bar -->
        <?php 
            //connect database
            include ("conn.php");
            $product_id=$_GET['Product_ID'];
            //get data from database
            $sql = "SELECT * FROM product WHERE Product_ID=$product_id";
            $sql = "SELECT * FROM product, supplier, feedback, member WHERE Product_ID=$product_id, product.Supplier_Id=supplier.Supplier_Id, product.Product_ID=feedback.Product_ID, feedback.Email=member.Email ";
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) 
            {
                while($row = mysqli_fetch_assoc($result)) 
                {
                    echo '
        <!-- Product Description -->
        <div class="productDescriptionContainer">
            <!-- product image -->
            <div class="productImageContainer">
                <img src="image/whiskas-adult-ocean-fish.jpg" alt="Product Image" >
            </div>

            <!-- product info -->
            <div class="productInfo">
                <!-- product name -->
                <div class="productName">
                    $'.$row["Product_Name"].'
                </div>
                <!-- product manufacturer -->
                <div class="productManufacturer">
                    $'.$row["Supplier_Name"].' 
                </div>
                <!-- product price -->
                <div class="productPrice">
                    <p>RM </p>
                    $'.$row["Price"].' 
                    <p> / unit</p>
                </div>
                <!-- product description -->
                <div class="productDescription">
                    $'.$row["Description"].' 
                </div>
                <!-- product quantity -->
                <div class="productQuantity">

                    <button id="plusBTN">
                        +
                    </button>

                    <input id="productQuantity" type="number" value="0" min="0">

                    <button id="minusBTN">
                        −
                    </button>
                </div>
                <!-- add to cart button -->
                <div class="addtocartContainer">
                    <a href="cart.php">
                        <button id="addtocartBTN">
                            ADD TO CART
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <!-- //Product Description -->

        <!-- Customer Review -->
        <div class="cusReviewContainer">
            <!-- review title -->
            <div class="reviewTitle">
                Review
            </div>
            <!-- reviews -->
            <div class="reviewHolder">
                <div class="firstName Names">
                    $'.$row["Member_Name"].' 
                    <div class="firstReview Reviews">
                        $'.$row["Review"].' 
                    </div>
                </div>
                <hr>
                <div class="secondName Names">
                    $'.$row["Member_Name"].' 
                <div class="secondReview Reviews">
                    $'.$row["Review"].' 
                </div>
            </div>
        </div>
        ';
        $_SESSION['product_id'] = $row['Product_Id'];
    }
} 
?>	
        <!-- //Customer Review -->

    <!-- //Card -->


</div>
<!-- //Main Content Area -->

<!-- Javascript -->
<script>

    // Quatity add/minus
    let plusQuantity = document.querySelector("#plusBTN");
    let minusQuantity = document.querySelector("#minusBTN");
    let Quantity = document.querySelector("#productQuantity");

    plusQuantity.addEventListener('click', () => {
        Quantity.value = parseInt(Quantity.value) + 1;
    });

    minusQuantity.addEventListener('click', () => {
        if (Quantity.value == 0) {
            return;
        }
        Quantity.value = parseInt(Quantity.value) - 1;
    });

</script>

</body>

<!-- Footer -->
<div id="footer"></div>
</html>