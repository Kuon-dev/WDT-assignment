<?php
    include('conn.php');
    $Staff_ID=$_POST["Staff_ID"];
    $SignIn_password=$_POST["SignIn_password"];
    $sql=mysqli_query($con,"SELECT Staff_ID, Password FROM staff WHERE Staff_ID='$Staff_ID' AND Password='$SignIn_password' limit 1");

    //Check is the data available in database
    if(mysqli_num_rows($sql)==1)
    {
        //retrieve data from database
        $data=mysqli_fetch_array($sql);

        //ii.Umpukkan kepada nilai session
        $user=$data['Staff_ID'];

        //iii.gerak ke menu utama
        session_start();
        $user_data_result = mysqli_query($con, "SELECT * FROM staff WHERE Staff_ID='$user' limit 1");
        $user_data = mysqli_fetch_array($user_data_result);
        $_SESSION["user_email"] = $user_data['Staff_ID'];
        $_SESSION["user_name"] = $user_data['Staff_Name'];
        $_SESSION["user_pw"] = $user_data['Password'];
        $_SESSION["user_position"] = $user_data['Position'];
        $_SESSION["user_phnum"] = $user_data['Contact_Number'];     

        header("location: index.php");
        exit();
    }
    else
    {
        //i.gerak ke previous page
        // echo"<script>
        //     alert('Failed to login.');
        //     window.location.href='admin-login.php';
        //     </script>";
    }
?>