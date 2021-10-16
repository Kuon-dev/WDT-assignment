<!DOCTYPE html>
<html>
<head>  
    <!-- Quantity +1-1 -->
    <!-- border close -->
    <!-- Page Title -->
    <title>Paws Heaven Product Description trial</title>

    <!-- Common Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Import CSS Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="product-description.css" rel="stylesheet">

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

    <table class="product">
        <tr>
            <td class="productNav" colspan="4">
                <button id="returnBtn"> < Back </button>
            </td>
        </tr>
        <tr>
            <td id="productImage" rowspan="6">
                <img src="image/whiskas-adult-ocean-fish.jpg" alt="Product Image">
            </td>
            <td id="productName" colspan="3">
                <b><p>Woof Food</p></b>
            </td>
        </tr>
        <tr>
            <td id="productManufacturer" colspan="3">
                <p>Woof Food SDN. BHD</p>
            </td>
        </tr>
        <tr>
            <td id="productPrice" colspan="3">
                <b><p>RM 10 . 00</p></b> / unit
            </td>
        </tr>
        <tr>
            <td id="productDescription" colspan="3">
                <p>Meow Food is very good good for your meow.</p>
            </td>
        </tr>
        <tr>
            <td class="quantityBTN">
                <button id="plusBTN">
                    <b>+</b>
                </button>
            </td>
            <td id="productQuantity">
                <b>2</b>
            </td>
            <td class="quantityBTN">
                <button id="minusBTN">
                    <b>-</b>
                </button>
            </td>
        </tr>
        <tr>
            <td id="addtocartContainer" colspan="3">
                <button id="addtocartBTN">
                    <b>ADD TO CART</b>
                </button>
            </td>
        </tr>
        <tr>
            <td id="reviewTitle" colspan="4">
                <h2>Our Customer's Review</h2>
            </td>
        </tr>
        <tr>
            <td class="reviewName firstName" colspan="4">
                First Name
            </td>
        </tr>
        <tr>
            <td class="reviewContainer firstReview" colspan="4">
                Meow is Happy
            </td>
        </tr>
        <tr class="spacing"></tr>
        <tr>
            <td class="reviewName secondName" colspan="4">
                2nd Name
            </td>
        </tr>
        <tr>
            <td class="reviewContainer secondReview" colspan="4">
                Meow is very very very very very very very Happy
            </td>
        </tr>
        <tr class="spacing"></tr>
    </table>

</div>
</body>

<!-- Footer -->
<div id="footer"></div>
</html>