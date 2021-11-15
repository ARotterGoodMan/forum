<?php
if (empty($_POST)){header('location:../html/demo.php');}
session_start();
require "function.php";
$user = $_POST['username'];
$password = $_POST['password'];
$yzm = $_POST['yzm'];
if ($yzm !== implode($_SESSION['fun']['Ver'])){
    header('location:../html/error.php?error=3');
    die;
}

$sql = "select * from userplay where UserName = '$user'";
if ($reg = fetch($sql)) {
    $password = md5(md5($password).$reg['Salt']);
    if (empty($reg)) {
        header('location:../html/error.php?error=1');
        die;
    } elseif ($user === $reg['UserName'] && $password === $reg['UserPsw']) {
        $users['id'] = $reg['id'];
        $users['user'] = $reg['UserName'];
        $users['password'] = $reg['UserPsw'];
        $users['email'] = $reg['Email'];
        $users['jur'] = $reg['jur'];
        $_SESSION['user'] = $users;
        header('location:../index.php');
        die;
    } elseif ($password !== $reg['UserPsw']) {
        header('location:../html/error.php?error=2');
        die;
    }
} else {
    header('location:../html/error.php?error=1');
}