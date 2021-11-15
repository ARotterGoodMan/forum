<?php
require "function.php";
$id = $_GET['id'];
$sql = "delete from user_information where user_information.id='$id'";
query($sql);
header('location:../html/brief.php');