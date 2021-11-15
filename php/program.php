<?php
    require 'function.php';
    $sql = "select * from user_information";
    $b = fetchAll($sql);
    $num = count($b) - 1;
    $id = $b[$num]['id'] + 1;
    if (!empty($_POST)) {
        $date = array();
        foreach ($_POST as $key => $value) {
            if ($key === "specialty") {
                $date[] = "'" . implode("、", $value) . "'";
            } else {
                $date[] = "'$value'";
            }
            
        }
        $date = implode(",", $date);
        $sql = "insert into user_information  values ($date)";
        if ($a = query($sql)) {
            header('location:../html/brief.php');
            die;
        } else {
            header('location:../html/error.php?error=6');
        }
    }