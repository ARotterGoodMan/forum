<!DOCTYPE html>
<?php require "../php/function.php";
$all = array();
require "../php/liuyan_r.php";
session_start() ?>
<html lang="ch">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../img/university.ico" type="image/x-icon">
    <title>留言板</title>
    <link rel="stylesheet" type="text/css" href="../SX_css/index.css">
    <link rel="stylesheet" type="text/css" href="../SX_css/lunbo.css">
    <link rel="stylesheet" type="text/css" href="../SX_css/bootstrap/bootstrap.css"/>
    <script src="../SX_js/jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="../SX_js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="../SX_js/index.js" type="text/javascript"></script>
</head>
<body>
<!-- 主题标题区块 -->
<header class="header_nav container " style="text-align: center">
</header>
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
                <a class="nav-link" href="brief.php">浏览信息</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="program.php">添加信息</a>
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
                             style='width: 23px;!important;height: 23px;!important;
                             line-height: 18px;!important;'>
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
<article class="container" style="margin-top:55px;background: rgba(255,255,255,0.66)">
    <h2 class="display-4 text-center" style="display: block;margin-top: 55px">留言板</h2>
    <div style="width: 85%;height: 5px;background-color: #17a2b8;border-radius: 5px" class="mx-auto"></div>
    <div class="container mx-auto" style="width: 83%;padding: 20px 0 20px 0">
        <?php
        foreach ($all as $value) {
            echo "<div class='media border p-3 mx-auto' id='yhly'>
                    <img src=\"../img/wink.gif\" alt=\"tx\" class=\"align-self-start mr-3\" style=\"width:30px;\">
                    <div class='media-body'>
                        
                     <h6>$value[author]</h6>
                        <p>$value[content]</p>
                    </div>
                  </div>";
        }
        ?>
    </div>
</article>

<aside class="container fixed-bottom rounded-top">
    <label class="pl_label" for="content" data-toggle="collapse"
        <?php if (!isset($_SESSION['user']['user'])) {
            echo "onclick=alert('您还没有登录无法留言请先登录')";
        } else {
            echo " data-target='#pinglun'";
        } ?>>发送 评论</label>
    <div id="pinglun" class="collapse">
        <form class="row" method="post" action="../php/liuyan_w.php">
            <textarea name="content" class="form-control offset-1 col-7" rows="2" id="content" required></textarea>
            <button type="submit" class="btn btn-primary offset-1 col-2">发送</button>
        </form>
    </div>
</aside>
</body>
</html>