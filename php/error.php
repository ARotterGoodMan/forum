<?php
$error = $_GET['error'];
switch ($error) {
    case 1:
        $errors = "没有该用户";
        header("Refresh:2;url=../html/demo.php");
        break;
    case 2:
        $errors = "密码错误";
        header("Refresh:2;url=../html/demo.php");
        break;
    case 3:
        $errors = "验证码错误";
        header("Refresh:2;url=../html/demo.php");
        break;
    case 4:
        $errors = "该用户以被注册";
        header("Refresh:2;url=../html/demo.php");
        break;
    case 5:
        $errors = "密码也确认密码不相同";
        header("Refresh:2;url=../html/demo.php");
        break;
    case 6:
        $errors = "添加失败请重新添加";
        header('Refresh:2;url=../html/program.php');
        break;
    case 7:
        $errors = "修改失败";
        header("Refresh:2;url=../html/update.php?id=$_GET[id]");
}