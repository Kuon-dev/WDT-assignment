<?PHP 
    include('conn.php');
    $SignIn_email=$_POST["SignIn_email"];
    $SignIn_password=$_POST["SignIn_password"];
    $sql=mysqli_query($con,"select Email, Password FROM member WHERE Email='$SignIn_email' AND Password='$SignIn_password' limit 1");

    //L6:semakan jika data yang dicari wujud
    if(mysqli_num_rows($sql)==1)
    {
        //i.Mengambil data dari jadual
        $data=mysqli_fetch_array($sql);

        //ii.Umpukkan kepada nilai session
        $_SESSION['SignIn_email']=$data['Email'];
        $_SESSION['SignIn_password']=$data['Password'];

        //iii.gerak ke menu utama
        session_start();
        $_SESSION["user_email"] = $data['Email'];
        header("location: index.php");
        exit();
    }
    else
    {
        //i.gerak ke previous page
        echo"<script>
            alert('Failed to login.');
            window.history.back();
            </script>";
    }
?>
