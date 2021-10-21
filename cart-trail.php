<!-- <?php
	include("session.php");
?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
	<link rel="stylesheet" type="text/css" href="cart-trail.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
</script>
<!-- function to run header and footer -->
<script> 
$(function(){
  $("#header").load("header.php"); 
  $("#footer").load("footer.php"); 
});
</script> 
</head>
<body>
<div id="header"></div>
<br><br><br><br><br>
<div class="container">
	<h1>Shopping Cart</h1>
	<div class="cart">
		<!-- product view -->
		<div class="products">
			<!-- single product -->
			<div class="product">
                <img src = "images/dog/dryfood/1.png" alt = "product image">
				<div class="product-info">
					<h3 class="product-name">New Shoes</h3>
					<h4 class="product-price">₹ 1,000</h4>
					<h4 class="product-offer">50%</h4>
					<p class="product-quantity">Qnt: <input value="1" name="">
					<p class="product-remove">
						<i class="fa fa-trash" aria-hidden="true"></i>
						<span class="remove">Remove</span>
					</p>
				</div>
			</div>
			<!-- end of single product -->
			<!-- single product -->
			<div class="product">
                <img src = "images/dog/dryfood/2.png" alt = "product image">
				<div class="product-info">
					<h3 class="product-name">New Bag</h3>
					<h4 class="product-price">₹ 2,000</h4>
					<h4 class="product-offer">40%</h4>
					<p class="product-quantity">Qnt: <input value="1" name="">
					<p class="product-remove">
						<i class="fa fa-trash" aria-hidden="true"></i>
						<span class="remove">Remove</span>
					</p>
				</div>
			</div>
			<!-- end of single product -->
			<!-- single product -->
            <div class="product">
                <img src = "images/dog/dryfood/3.png" alt = "product image">
				<div class="product-info">
					<h3 class="product-name">New Bag</h3>
					<h4 class="product-price">₹ 2,000</h4>
					<h4 class="product-offer">40%</h4>
					<p class="product-quantity">Qnt: <input value="1" name="">
					<p class="product-remove">
						<i class="fa fa-trash" aria-hidden="true"></i>
						<span class="remove">Remove</span>
					</p>
				</div>
			</div>
			<!-- end of single product -->
				<!-- single product -->
				<div class="product">
                <img src = "images/cat/dryfood/1.png" alt = "product image">
				<div class="product-info">
					<h3 class="product-name">New Bag</h3>
					<h4 class="product-price">₹ 2,000</h4>
					<h4 class="product-offer">40%</h4>
					<p class="product-quantity">Qnt: <input value="1" name="">
					<p class="product-remove">
						<i class="fa fa-trash" aria-hidden="true"></i>
						<span class="remove">Remove</span>
					</p>
				</div>
			</div>
			<!-- end of single product -->
				<!-- single product -->
				<div class="product">
                <img src = "images/cat/dryfood/2.png" alt = "product image">
				<div class="product-info">
					<h3 class="product-name">New Bag</h3>
					<h4 class="product-price">₹ 2,000</h4>
					<h4 class="product-offer">40%</h4>
					<p class="product-quantity">Qnt: <input value="1" name="">
					<p class="product-remove">
						<i class="fa fa-trash" aria-hidden="true"></i>
						<span class="remove">Remove</span>
					</p>
				</div>
			</div>
			<!-- end of single product -->
				<!-- single product -->
				<div class="product">
                <img src = "images/cat/dryfood/3.png" alt = "product image">
				<div class="product-info">
					<h3 class="product-name">New Bag</h3>
					<h4 class="product-price">₹ 2,000</h4>
					<h4 class="product-offer">40%</h4>
					<p class="product-quantity">Qnt: <input value="1" name="">
					<p class="product-remove">
						<i class="fa fa-trash" aria-hidden="true"></i>
						<span class="remove">Remove</span>
					</p>
				</div>
			</div>
			<!-- end of single product -->
		</div>
		<!-- end of products view -->
		<div class="cart-total">
			<p>
				<span>Total Price</span>
				<span>₹ 3,000</span>
			</p>
			<p>
				<span>Number of Items</span>
				<span>2</span>
			</p>
			<p>
				<span>You Save</span>
				<span>₹ 1,000</span>
			</p>
			<a href="#">Proceed to Checkout</a>
		</div>
	</div>
</div>
<br><br><br><br><br>
<div id="footer"></div>
</body>
</html>

