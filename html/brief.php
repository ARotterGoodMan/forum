<!DOCTYPE html>
<html lang="ch">
<?php $b = array();
require "../php/function.php";
require "../php/brief.php";
session_start(); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../img/university.ico" type="image/x-icon">
    <title>浏览信息</title>
    <link rel="stylesheet" type="text/css" href="../SX_css/index.css">
    <link rel="stylesheet" type="text/css" href="../SX_css/lunbo.css">
    <link rel="stylesheet" type="text/css" href="../SX_css/bootstrap/bootstrap.css"/>
    <script src="../SX_js/jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="../SX_js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="../SX_js/index.js" type="text/javascript"></script>
</head>
<body>

<!--网站导航-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="">导航</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">返回主页</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="program.php">添加信息</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="liuyan.php">给我留言</a>
            </li>
            <li class="nav-item">
                <?php
                if (isset($_SESSION['user']['user'])) {
                    $username = $_SESSION['user']['user'];
                }
                echo isset($username) ?
                    $_SESSION['user']['jur'] === "1" ?
                        "<a class='nav-link' href='#demo2' data-toggle='dropdown'>
                                <span class='badge badge-danger rounded-circle'
                             style='width: 23px;!important;height: 23px;!important;line-height: 18px;!important;'>
                             管</span><b>$username</b>
                             </a>
                             <div id='demo2' class='dropdown-menu'>
                                   <a href='javascript:a()' style='color: #000000' class='dropdown-item'>个人中心</a>
                                    <a href='../php/exit.php' style='color: #000000' class='dropdown-item'>退出登录</a>
                            </div>
                             " :
                        "<a class='nav-link' href='#demo2' data-toggle='dropdown'>欢迎 <b>$username</b></a>
                             <div id='demo2' class='dropdown-menu'>
                                   <a href='javascript:a()' style='color: #000000' class='dropdown-item'>个人中心</a>
                                    <a href='../php/exit.php' style='color: #000000' class='dropdown-item'>退出登录</a>
                            </div> " :
                    "<a class='nav-link' href='demo.php'>用户登录</a>";
                ?>
            </li>
        </ul>
    </div>
</nav>
<!--视频主体模块-->
<article class="container-fluid" style="margin-top:60px;width: 85%">
    <table class="table table-hover mx-auto" style="background: rgba(255,255,255,0.75)">
        <tr class="table-info">
            <th>ID</th>
            <th>学号</th>
            <th>姓名</th>
            <th>性别</th>
            <th>出生年月</th>
            <th>班级</th>
            <th>专业</th>
            <th>爱好</th>
            <th>简介</th>
            <?php isset($_SESSION['user']['jur']) ? $jur = $_SESSION['user']['jur'] : $jur = "";
            if ($jur === "1") {
                echo "<th>操作</th>";
            }
            ?>
        </tr>
        <?php
        isset($_SESSION['user']['jur']) ? $jur = $_SESSION['user']['jur'] : $jur = "";
        if ($jur === "1") {
            foreach ($b as $value) {
                echo "<tr>";
                foreach ($value as $v) {
                    echo "<td>$v</td>";
                }
                echo "<td><a href='./update.php?id=$value[id]'>修改</a>&nbsp<a href='../php/delete.php?id=$value[id]'>删除</a></td></tr>";
            }
        } else {
            foreach ($b as $value) {
                echo "<tr>";
                foreach ($value as $v) {
                    echo "<td>$v</td>";
                }
            }
        }

        ?>
    </table>
</article>
<aside class="container fixed-bottom rounded-top">
    <label class="pl_label" for="comment" data-toggle="collapse" data-target="#pinglun">查询</label>
    <div id="pinglun" class="collapse">
        <form class="row" method="post" action="">
            <input name="key" class="form-control offset-1 col-7" id="comment">
            <button type="submit" class="btn btn-primary offset-1 col-2">查询</button>
        </form>
    </div>
</aside>

</body>
</html>