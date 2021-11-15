<?php
require "function.php";
session_start();
$author = $_SESSION['user']['user'];
$content = $_POST['content'];
$sql = "insert into massage (author,content) values ('$author','$content')";
query($sql);
header("location:../html/liuyan.php");