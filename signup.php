<?php
    include("conn.php");
    $SignUp_name=$_POST["SignUp_name"];
    $SignUp_phoneNum=$_POST["SignUp_phoneNum"];
    $SignUp_email=$_POST["SignUp_email"];
    $SignUp_address=$_POST["SignUp_address"];
    $SignUp_password=$_POST["SignUp_password"];

    $result=mysqli_query($con,"SELECT * FROM member WHERE Email='$SignUp_email' limit 1");

    if(mysqli_num_rows($result)==1){
        echo "<script>
        alert('Account exists.');
        window.location.href = 'registration_panel.php';
        </script>";
        mysqli_close($con);
    }
    else{
        $sql="INSERT INTO member (Email, Member_Name, Contact_Number, Address,Password)
        VALUES
        ('$_POST[SignUp_email]','$_POST[SignUp_name]','$_POST[SignUp_phoneNum]','$_POST[SignUp_address]','$_POST[SignUp_password]')";
        if (!mysqli_query($con,$sql)) {
            die('Error: ' . mysqli_error($con));
            }
            else {
            session_start();
            echo '<script>
            window.location.href = "dumbass_page.php";
            </script>';
            }
        }
        mysqli_close($con);
?>