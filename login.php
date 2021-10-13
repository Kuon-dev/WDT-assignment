<?PHP 
    include('conn.php');
    $SignIn_email="";
    $SignIn_password="";
    $result=mysqli_query($con,"SELECT * FROM member WHERE Email='$SignIn_email' AND Password='$SignIn_password' limit 1");

    //L6:semakan jika data yang dicari wujud
    if(mysqli_num_rows($result)==1)
    {
        //i.Mengambil data dari jadual
        $data=mysqli_fetch_array($result);

        //ii.Umpukkan kepada nilai session
        $_SESSION['SignIn_email']=$data['Email'];
        $_SESSION['SignIn_password']=$data['Password'];

        //iii.gerak ke menu utama
        echo"<script>window.location.href='index.php';</script>";
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