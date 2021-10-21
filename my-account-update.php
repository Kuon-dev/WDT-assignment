<?php
ob_start();
session_start();
include "conn.php";

if(isset($_POST['save-profile-btn'])) {
    $id = $_SESSION['Email'];

    $u_name = $_POST['u_name'];
    $u_email=$_POST['u_email'];
    $u_add=$_POST['u_add'];
    $u_phnum=$_POST['u_phnum'];
    $u_pw=$_POST['u_pw'];

    $select= "SELECT * FROM member WHERE Email='$id'";
    $sql = mysqli_query($con, $select);
    $row = mysqli_fetch_assoc($sql);

    $res= $row['Email'];
    if($res === $id) {
       $update = "UPDATE member set Email='$u_email', Member_Name='$u_name',u_add='$Address', u_phnum='$Contact_Number', u_pw='$Passsword' WHERE Email='$id'";
       $sql2 =mysqli_query($con, $update);
        if($sql2)
            { 
                /*Successful*/
                echo"<script>alert('Update successful!');</script>";
                header('location:my-account.php');
            }
            else
            {
                /*sorry your profile is not update*/
                header('location:my-account.php');
            }
        }
        else
            {
                /*sorry your id is not match*/
                echo"<script>alert('Update successful!');</script>";
            }
}
?>