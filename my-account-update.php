<?php
ob_start();
session_start();
include "conn.php";

if(isset($_POST['save-profile-btn'])) {
    $id = $_SESSION['user_email'];

    $u_name = $_POST['u_name'];
    if(($_POST['u_name'] == '')) {
        $u_name = $_SESSION["user_name"];
    }
    $u_email = $_POST['u_email'];
    if(($_POST['u_email'] == '')) {
        $u_email = $_SESSION["user_email"];
    }
    $u_add = $_POST['u_add'];
    if(($_POST['u_add'] == '')) {
        $u_add = $_SESSION["user_add"];
    }
    $u_phnum = $_POST['u_phnum'];
    if(($_POST['u_phnum'] == '')) {
        $u_phnum = $_SESSION["user_phnum"];
    }
    $u_pw = $_POST['u_pw'];
    if(($_POST['u_pw'] == '')) {
        $u_pw = $_SESSION["user_pw"];
    }

    $select= "SELECT * FROM member WHERE Email='$id'";
    $sql = mysqli_query($con, $select);
    $row = mysqli_fetch_assoc($sql);
    $update_profile = "UPDATE member SET Email='$u_email', Member_Name='$u_name', Address='$u_add', Contact_Number='$u_phnum', Password='$u_pw' WHERE Email='$id'";
    $_SESSION['user_email'] = $u_name;
    $_SESSION["user_name"] = $u_email;
    $_SESSION["user_add"] = $u_add ;
    $_SESSION["user_phnum"] = $u_phnum ;
    $_SESSION["user_pw"] = $u_pw;
    $sql2 = mysqli_query($con, $update_profile);
    if(isset($sql2))
        { 
            /*Successful*/
            echo"<script>alert('Update successful!');</script>";
            header('location:my-account.php');
        }
        else
        {
            /*sorry your profile is not update*/
            echo "<script>alert('Update unsuccessful');</script>";
            header('location:my-account.php');
        }
    }
    else
        {
            /*sorry your id is not match*/
            echo"<script>alert('Update unsuccessful');</script>";
        }

?>