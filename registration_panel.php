<!DOCTYPE html>
<html lang="en">
<head>
    <!-- common meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-withd, initial-scale=1">

    <!-- import css file -->
    <link rel="stylesheet" href="Registration_panel.css">

    <!-- import javascript file -->

    <!-- website title -->
    <title>Paws Heaven Member Register</title>
</head>

<body>

    <div class="container" id="container">

        <!-- Sign Up Form -->
        <div class="register-form sign-up-area">
            <form action="signup.php" method="POST">
                <h1>Create Account</h1>
                <!-- Request Name -->
                <input type="text" placeholder="Name" name="SignUp_name"  required/>
                <!-- Request Mobile Number -->
                <input type="text" placeholder="Mobile Number" name="SignUp_phoneNum" required/>
                <!-- Request Address -->
                <input type="text" placeholder="Address" name="SignUp_address" required/>
                <!-- Request Email -->
                <input type="email" placeholder="Email" name="SignUp_email" required/>
                <!-- Request Password -->
                <input type="password" placeholder="Password" name="SignUp_password" required/>
                <!-- Submit Button -->
                <button type="submit" name="SignUp_button">Sign Up</button>
            </form>
        </div>

        <!-- Sign In Form -->
        <div class="register-form sign-in-area">
            <form action="login.php" method="POST">
                <h1>Sign in</h1>
                <!-- Request Email -->
                <input type="email" placeholder="Email" name="SignIn_email" required/>
                <!-- Request Password -->
                <input type="password" placeholder="Password" name="SignIn_password" required/>
                <!-- Link for Forgot Password -->
                <a href="#">Forgot your password?</a>
                <!-- Submit Button -->
                <button type="submit" name="SignIn_button">Sign In</button>
            </form>
        </div>

        <!-- Overlay Panel -->
        <div class="overlay-area">
            <div class="overlay">

                <!-- Overlay Left Panel -->
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Login now and keep your fur buddy happy : )</p>
                    <!-- Overlay Transition Button -->
                    <button class="ghost" id="signIn">Sign In</button>
                </div>

                <!-- Overlay Right Panel -->
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Buddy!</h1>
                    <p>Enter your personal details and start journey with us to keep your pet happy!</p>
                    <!-- Overlay Transition Button -->
                    <button class="ghost" id="signUp">Sign Up</button>

                </div>
            </div>
        </div>
    </div>

    <!-- import javascript file -->
    <script src="Registration_Panel.js"></script>

</body>
</html>

<?php 
    if(isset($_POST["SignUp_button"])){
        $SignUp_name=$_POST["SignUp_name"];
		$SignUp_phoneNum=$_POST["SignUp_phoneNum"];
		$SignUp_email=$_POST["SignUp_email"];
		$SignUp_address=$_POST["SignUp_address"];
		$SignUp_password=$_POST["SignUp_password"];
		}
     else if(isset($_POST["SignIn_button"])){
        $SignIn_email=$_POST["SignIn_email"];
        $SignIn_password=$_POST["SignIn_password"];
        }
?>
