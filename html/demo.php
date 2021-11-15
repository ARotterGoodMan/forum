<!DOCTYPE html>
<?php session_start();?>
<html lang="ch">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../img/university.ico" type="image/x-icon">
    <title>登录&注册</title>
    <link rel="stylesheet" type="text/css" href="../SX_css/index.css">
    <link rel="stylesheet" type="text/css" href="../SX_css/lunbo.css">
    <link rel="stylesheet" type="text/css" href="../SX_css/bootstrap/bootstrap.css"/>
    <script src="../SX_js/jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="../SX_js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="../SX_js/index.js" type="text/javascript"></script>
    <script src="../SX_js/demo.js" type="text/javascript"></script>
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
                <a class="nav-link" href="brief.php">浏览信息</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="program.php">添加信息</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="liuyan.php">给我留言</a>
            </li>
        </ul>
    </div>
</nav>
<!--登录模块-->
<article class="container" style="margin-top:220px;width: 85%">
    <div class="mx-auto" id="demomo">
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
                <ul class="nav nav-pills d-flex flex-column mb-2" role="tablist">
                    <li class="nav-item p-1 bg-info mx-auto">
                        <a class="nav-link" data-toggle="pill" href="#menu1" id="hide1" style="display: none">登录</a>
                        <a class="nav-link" data-toggle="pill" href="#menu1" id="show1">登录</a>
                    </li>
                    <li class="nav-item p-1 bg-warning mx-auto">
                        <a class="nav-link" data-toggle="pill" href="#menu2" id="hide2" style="display: none">注册</a>
                        <a class="nav-link" data-toggle="pill" href="#menu2" id="show2">注册</a>
                    </li>
                </ul>
            </div>
            <div id="menu1" class="container tab-pane fade"
                 style="margin-top: -40px;height: 500px;background-color: #FFFFFF;box-shadow:0 3px 15px 4px rgba(0, 0, 0, 0.25);">
                <br>
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#home" id="hide3" style="display: none">&langd;</a>
                        <a class="nav-link" data-toggle="pill" href="#home" id="show3">&langd;</a>
                    </li>
                </ul>
                <h5><b>登录</b></h5>
                <form action="../php/login.php" method="post">
                    <div class="input-group mb-3 mx-auto" style="width: 85%;margin: 30px 0 10px 0;">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="usr">用户名:</label>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" id="usr" name="username" required>
                    </div>
                    <div class="input-group mb-3 mx-auto" style="width: 85%;margin: 30px 0 10px 0;">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="psw">密&nbsp;码:</label>
                        </div>
                        <input type="password" class="form-control" placeholder="password" id="psw" name="password" required>
                    </div>
                    <div class="input-group mb-3 mx-auto" style="width: 85%;margin: 30px 0 10px 0;">
                        <a href="javascript:a()" id="yzma">
                            <img src="../php/Verificatio/Ver_print.php" alt="" class="rounded-left"
                                 style="border: 1px solid #cdcdcd;" id="yzmtp">
                        </a>
                        <label for="yzm"> </label>
                        <input type="text" id="yzm" class="form-control" name="yzm" width="45%" autocomplete="off">
                    </div>
                    <div class="alert alert-info alert-dismissible fade show mx-auto" style="width: 85%;margin: 30px 0 10px 0;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <small>验证码区分大小写，点击图片刷新!</small>
                    </div>
                    <div class="mx-auto" style="width: 85%;margin: 30px 0 40px 0;">
                        <button type="submit" class="btn btn-primary" style="width: 100%;">登录</button>
                    </div>

                </form>

            </div>
            <div id="menu2" class="container tab-pane fade"
                 style="height: 530px;background-color: #FFFFFF;margin-top:-120px;box-shadow:0 3px 15px 4px rgba(0, 0, 0, 0.25);">
                <br>
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#home" id="hide4" style="display: none">&langd;</a>
                        <a class="nav-link" data-toggle="pill" href="#home" id="show4">&langd;</a>
                    </li>
                </ul>
                <h5><b>注册</b></h5>
                <form action="../php/register.php" method="post">
                    <div class="input-group mb-3 mx-auto" style="width: 85%;margin: 40px 0 40px 0;">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="usrz">用 户 名:</label>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" id="usrz" name="username"
                               pattern="[\w\x{4e00}-\x{9fa5}]{2,10}">
                    </div>
                    <div class="input-group mb-3 mx-auto" style="width: 85%;margin: 40px 0 40px 0;">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="pswz">设置密码:</label>
                        </div>
                        <input type="password" class="form-control" placeholder="password" id="pswz" name="password"
                               pattern="\w{6,15}">
                    </div>
                    <div class="input-group mb-3 mx-auto" style="width: 85%;margin: 40px 0 40px 0;">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="dppsw">确认密码:</label>
                        </div>
                        <input type="password" class="form-control" placeholder="password" id="dppsw" name="dppsw"
                               pattern="\w{6,15}">
                    </div>
                    <div class="input-group mb-3 mx-auto" style="width: 85%;margin: 40px 0 40px 0;">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="@">个人邮箱:</label>
                        </div>
                        <input type="email" class="form-control" placeholder="@email" id="@" name="email">
                    </div>
                    <div class="mx-auto" style="width: 85%;margin: 40px 0 40px 0;">
                        <button type="submit" class="btn btn-primary" style="width: 100%;">注册</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</article>

<footer class="container-fluid fixed-bottom">

    <div class="row">
        <div class="col">
                <span class="col text-center" style="font-size: 12px">
                    我o(^▽^)o已运行：
                    <span id="span_website_time"></span>
                </span>
        </div>
        <div class="col">
            J1801719李府刚
            J1801737邵潇遥
        </div>
        <div class="col">
            <span class="col text-center" style="font-size: 12px">
                鲁ICP备20024020号
            </span>
        </div>
    </div>

    <!--调用时间函数-->
    <script type="text/javascript">
        // 建站时间实现
        function show_date_time() {
            window.setTimeout("show_date_time()", 1e3);
            const BirthDay = new Date("2020/06/19"),			//时间设定
                today = new Date,
                timeold = today.getTime() - BirthDay.getTime(),
                msPerDay = 864e5,
                e_daysold = timeold / msPerDay,
                daysold = Math.floor(e_daysold),
                e_hrsold = 24 * (e_daysold - daysold),
                hrsold = Math.floor(e_hrsold),
                e_minsold = 60 * (e_hrsold - hrsold),
                minsold = Math.floor(60 * (e_hrsold - hrsold)),
                seconds = Math.floor(60 * (e_minsold - minsold));
            document.getElementById('span_website_time').innerHTML = daysold + "天" + hrsold + "小时" + minsold + "分" + seconds + "秒";
        }

        show_date_time();
    </script>
</footer>
</body>
</html>