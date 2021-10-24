<?PHP 
    //connect to database
    include('conn.php');
    $SignIn_email=$_POST["SignIn_email"];
    $SignIn_password=$_POST["SignIn_password"];
    $sql=mysqli_query($con,"select Email, Password FROM member WHERE Email='$SignIn_email' AND Password='$SignIn_password' limit 1");

    //Check is the data available in database
    if(mysqli_num_rows($sql)==1)
    {
        //retrieve data from database
        $data=mysqli_fetch_array($sql);

        //ii.Umpukkan kepada nilai session
        $_SESSION['SignIn_email']=$data['Email'];
        $_SESSION['SignIn_password']=$data['Password'];

        //iii.gerak ke menu utama
        session_start();
        $user_data_result = mysqli_query($con, "select * FROM member");
        $user_data = mysqli_fetch_array($user_data_result);
        $_SESSION["user_email"] = $user_data['Email'];
        $_SESSION["user_name"] = $user_data['Member_Name'];
        $_SESSION["user_pw"] = $user_data['Password'];
        $_SESSION["user_phnum"] = $user_data['Contact_Number'];
        $_SESSION["user_add"] = $user_data['Address'];

        header("location: index.php");
        exit();
    }
    else
    {
        //i.gerak ke previous page
        echo"<script>
            alert('Failed to login.');
            window.location.href='registration_panel.php';
            </script>";
    }
?>
