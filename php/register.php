<?php
if (empty($_POST)){header('location:../html/demo.php');die;}
require "function.php";
$newuser = trim($_POST['username']);
$newpassword = $_POST['password'];
$dppsw = $_POST['dppsw'];
$newemail = trim($_POST['email']);
$salt = md5(substr(uniqid(), -6));
if ($newpassword !== $dppsw) {
    header('location:../html/error.php?error=5');
    die;
} else {
    $sql = "select * from userplay where UserName = '$newuser'";
    $rea = fetch($sql);
    if (!empty($rea)) {
        header('location:../html/error.php?error=4');
        die;
    } else {
        $newpassword = md5($_POST['password']);
        $newpassword = md5($newpassword . $salt);
        $sql = "insert into userplay (UserName,UserPsw,Email,Salt) values ('$newuser','$newpassword','$newemail','$salt')";
        $re = query($sql);
        header("Refresh:2;url=../html/demo.php");
    }
}




