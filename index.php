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
        .banner-area {
            width: 100%;
            height: 450px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4)), url(image/about-us.jpg);
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center center;
            padding-bottom: 10px;
            margin-top: 110px;
            background-color: black;
        }
        .banner-area h2 {
            padding-top: 8%;
            font-size: 70px;
            filter: brightness(2000%);
            color: white;
        }
        </style>

    </head>
    <body>
    <div id="header"></div>
    <div class="banner-area">
        <h2 class="poppins fw-bolder">Welcome to PawsHeaven</h2>
        <h3 class="poppins fs-2 fw-bolder text-white" stlye="color: white;">Largest Online Pet Store in Malaysia</h3>
    </div>
    <div class="a-divider"></div>
    <div class="content-area" style="margin-top: -300px; padding: 250px; padding-bottom: 10px">
          <div>
            <h2 class="sora center fs-1 fw-bolder">Popular Products</h2>
            <br>
            <hr>
            <table class="productContainer">
            <!-- 1st Row -->
                <tr>
                    <td>
                        <div class="imgContainer">
                            <a href="https://playvalorant.com/en-us/">
                                <img  class="IMG" src="image/whiskas-adult-ocean-fish.jpg">
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="imgContainer">
                            <a href="https://playvalorant.com/en-us/">
                                <img  class="IMG" src="image/whiskas-adult-ocean-fish.jpg">
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="imgContainer">
                            <a href="https://playvalorant.com/en-us/">
                                <img  class="IMG" src="image/whiskas-adult-ocean-fish.jpg">
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="imgContainer">
                            <a href="https://playvalorant.com/en-us/">
                                <img  class="IMG" src="image/whiskas-adult-ocean-fish.jpg">
                            </a>
                        </div>
                    </td>
                </tr>
                <!-- 2nd Row -->
                <tr>
                    <td class="productName">
                        Product 1
                    </td>
                    <td class="productName">
                        Product 2
                    </td>
                    <td class="productName">
                        Product 3
                    </td>
                    <td class="productName">
                        Product 4
                    </td>
                </tr>
                <!-- 3rd Row -->
                <tr>
                    <td class="productPrice">
                        (RM10.00)
                    </td>
                    <td class="productPrice">
                        (RM20.00)
                    </td>
                    <td class="productPrice">
                        (RM30.00)
                    </td>
                    <td class="productPrice">
                        (RM40.00)
                    </td>
                </tr>
            </table>
            <br>
            <hr>
            <table class="productContainer">
                <!-- 5th Row -->
                <tr>
                    <td>
                        <div class="imgContainer">
                            <a href="https://playvalorant.com/en-us/">
                                <img class="IMG" src="image/whiskas-adult-ocean-fish.jpg">
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="imgContainer">
                            <a href="https://playvalorant.com/en-us/">
                                <img class="IMG" src="image/whiskas-adult-ocean-fish.jpg">
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="imgContainer">
                            <a href="https://playvalorant.com/en-us/">
                                <img class="IMG" src="image/whiskas-adult-ocean-fish.jpg">
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="imgContainer">
                            <a href="https://playvalorant.com/en-us/">
                                <img class="IMG" src="image/whiskas-adult-ocean-fish.jpg">
                            </a>
                        </div>
                    </td>
                </tr>
                <!-- 6th Row -->
                <tr>
                    <td class="productName">
                        Product 5
                    </td>
                    <td class="productName">
                        Product 6
                    </td>
                    <td class="productName">
                        Product 7
                    </td>
                    <td class="productName">
                        Product 8
                    </td>
                </tr>
                <!-- 7th Row -->
                <tr>
                    <td class="productPrice">
                        (RM50.00)
                    </td>
                    <td class="productPrice">
                        (RM60.00)
                    </td>
                    <td class="productPrice">
                        (RM70.00)
                    </td>
                    <td class="productPrice">
                        (RM80.00)
                    </td>
                </tr>
            </table>
        
        </div>
        </div>
    </div>
    </body>
    <div id="footer"></div>
</html>