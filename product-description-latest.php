<!DOCTYPE html>
<html>
<head>
    <!-- Page Title -->
    <title>Paws Heaven Product Description Latest</title>

    <!-- Common Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Import CSS Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="product-description-latest.css" rel="stylesheet">

    <!-- Import jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Display Header & Footer -->
    <script>
        $(function(){ 
            $("#header").load("common/header.php");
            $("#footer").load("common/footer.php");
        });
    </script>

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
                    Woof Food
                </div>
                <!-- product manufacturer -->
                <div class="productManufacturer">
                    Woof Food SDN. BHD
                </div>
                <!-- product price -->
                <div class="productPrice">
                    <p>RM </p>
                    10 . 00
                    <p> / unit</p>
                </div>
                <!-- product description -->
                <div class="productDescription">
                    Meow Food is very good good for your meow.
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
                    <a href="#">
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
                Our Customer's Review
            </div>
            <!-- reviews -->
            <div class="reviewHolder">
                <div class="firstName Names">
                    First Name
                </div>

                <div class="firstReview Reviews">
                    Meow is Happy
                </div>
                <hr>
                <div class="secondName Names">
                    2nd Name
                </div>

                <div class="secondReview Reviews">
                    Meow is very very very very very very very Happy
                </div>
            </div>
        </div>
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