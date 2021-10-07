<?php
    include("conn.php");
    $sql="INSERT INTO member (Email, Member_Name, Contact_Number, Address,Password)
    VALUES
    ('$_POST[SignUp_email]','$_POST[SignUp_name]','$_POST[SignUp_phoneNum]','$_POST[SignUp_address]','$_POST[SignUp_password]')";
    if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
    }
    else {
    echo '<script>
    window.location.href = "Loading_screen.html";
    </script>';
    }
    mysqli_close($con);
?>