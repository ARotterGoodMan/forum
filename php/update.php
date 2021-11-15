<?php

if (!empty($_POST)) {
    $all = array();
    $all[] = "XH='$_POST[stu_id]'";
    $all[] = "Name='$_POST[name]'";
    $all[] = "Sex='$_POST[sex]'";
    $all[] = "Birthday='$_POST[bri]'";
    $all[] = "Class='$_POST[class]'";
    $all[] = "Major='$_POST[major]'";
    $all[] = "Specialty='".implode("、",$_POST['specialty'])."'";
    $all[] = "Brief='$_POST[brief]'";
    $all = implode(',', $all);
    $sql = "update user_information set $all  where id='$_POST[ID]'";
    echo $sql;
    if ($a = query($sql)) {
        header('location:../html/brief.php');
        die;
    } else {
        header("location:../html/error.php?error=7&id=$_POST[ID]");
    }
} else {
    $id = $_GET['id'];
    $sql = "select * from user_information where id='$id'";
    $a = fetch($sql);
}


