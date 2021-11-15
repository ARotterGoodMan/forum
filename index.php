<!DOCTYPE html>
<?php session_start(); ?>
<html lang="ch">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/university.ico" type="image/x-icon">
    <title>J18017论坛网</title>
    <link rel="stylesheet" type="text/css" href="SX_css/index.css"/>
    <link rel="stylesheet" type="text/css" href="SX_css/music.css"/>
    <link rel="stylesheet" type="text/css" href="SX_css/bootstrap/bootstrap.min.css"/>
    <script src="SX_js/jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="SX_js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="SX_js/index.js" type="text/javascript"></script>
    <script src="SX_js/music.js" type="text/javascript"></script>
    <script src="SX_js/demo.js" type="text/javascript"></script>
</head>
<body>

<!-- 加载动画 -->
<div class="spinner" id="loadingBar"></div>

<!-- 主题标题区块 -->
<header class="header_nav">
    <nav class="">
        <div id="demo" class="carousel slide mx-auto" data-ride="carousel">

            <!-- 指示符 -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- 轮播图片 -->
            <div class="carousel-inner mw-100">
                <div class="carousel-item active">
                    <img class=" img-fluid" alt="university." src="img/bglunb/zylunb_1.jpg">
                    <div class="carousel-caption" style="color: #e1fa00">
                        <h1>大学</h1>
                        <p>university.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class=" img-fluid" alt="lives." src="img/bglunb/zylunb_2.jpg">
                    <div class="carousel-caption" style="color: #00fa8e">
                        <h1>生活</h1>
                        <p>lives.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class=" img-fluid" alt="future." src="img/bglunb/zylunb_3.jpg">
                    <div class="carousel-caption" style="color: #ff7fe7">
                        <h1>未来</h1>
                        <p>future.</p>
                    </div>
                </div>
            </div>

            <!-- 左右切换按钮 -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </nav>
</header>
<!-- 主题内容区块 -->
<article>
    <!--全站导航-->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark mx-auto" id="allnav">
        <a class="navbar-brand" href="">全站导航</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleALL">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleALL">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <?php
                    if (isset($_SESSION['user']['user'])) {
                        $username = $_SESSION['user']['user'];
                    }
                    echo isset($username) ?
                        $_SESSION['user']['jur'] === '1' ?
                            "<a class='nav-link' href='#demo2' data-toggle='dropdown'>
                                <span class='badge badge-danger rounded-circle'
                             style='width: 23px;!important;height: 23px;!important;line-height: 18px;!important;'>
                             管</span><b>$username</b>
                             </a>
                             <div id='demo2' class='dropdown-menu'>
                                   <a href='javascript:a()' style='color: #000000' class='dropdown-item'>个人中心</a>
                                    <a href='php/exit.php' style='color: #000000' class='dropdown-item'>退出登录</a>
                            </div>
                             " :
                            "<a class='nav-link' href='#demo2' data-toggle='dropdown'>欢迎 <b>$username</b></a>
                             <div id='demo2' class='dropdown-menu'>
                                   <a href='javascript:a()' style='color: #000000' class='dropdown-item'>个人中心</a>
                                    <a href='php/exit.php' style='color: #000000' class='dropdown-item'>退出登录</a>
                            </div> ":
                        "<a class='nav-link' href='html/demo.php'>用户登录</a>";
                    ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="html/brief.php">浏览信息</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="html/program.php">添加信息</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="html/liuyan.php">给我留言</a>
                </li>
            </ul>
        </div>
    </nav>
    

    <div class="container_art mx-auto">

        <div id="section1" class="row">
            <!--个人信息-->
            <div class="col-xl-4 headdemo1">
                <div class="card" style="width:100%">
                    <div style="padding: 10px 0 0 10px">
                        <?php
                        if (isset($_SESSION['user']['user'])) {
                            $username = $_SESSION['user']['user'];
                        }
                        echo isset($username) ?
                            $_SESSION['user']['jur'] === "管理员" ?
                            "<h4><a class='nav-link card-title' href='html/demo.php'>
                             <span class='badge badge-danger rounded-circle'
                             style='width: 33px;!important;height: 33px;!important;line-height: 24px;!important;'>管</span><b>$username</b></a>" :
                        "<a class='nav-link card-title' href='html/demo.php'>欢迎 <b>$username</b></a></h4>" :
                            "<h4><a class='nav-link card-title' id='catoon' href='html/demo.php'>请先登录</a></h4>";
                        ?>
                    </div>
                </div>
                <div class="list-group" id="accordion_1">
                    <a href="html/brief.php" class="list-group-item list-group-item-action"
                       style="color: #0e6eff !important;">浏览信息</a>
                    <a href="html/program.php" class="list-group-item list-group-item-action"
                       style="color: #0e6eff !important;">添加信息</a>
                    <a href="html/liuyan.php" class="list-group-item list-group-item-action"
                       style="color: #0e6eff !important;">给我留言</a>
                </div>

            </div>

            <!--介绍-->
            <div class="col-xl-6 headdemo2 mx-auto">
                <div class="media">
                    <img src="img/wink.gif" class="align-self-start mr-3" style="width:80px;border-radius:12px"
                         alt="wink~">
                    <div class="media-body">
                        <p style="font-size: 40px">J18017——萌娃们的班级</p>
                        <p>计算机应用技术，啥都得学</p>
                        <p>班里都是各路大佬，神仙云集</p>
                        <p>制作：J1801719李府刚 J1801737邵潇遥</p>
                    </div>
                </div>
            </div>
        </div>
        <!--下拉折叠2音乐盒-->
        <div id="section2">
            <!--下拉折叠2音乐盒-->
            <div class="headdemo1">
                <div id="accordion_2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-link">
                                音乐盒
                            </h4>
                        </div>
                        <!--下拉折叠效果collapse-->
                        <div class="card-header" data-toggle="collapse" href="#collapse2One">
                            <a class="card-link">
                                正在播放
                            </a>
                        </div>
                        <div id="collapse2One" class="collapse show" data-parent="#accordion_2">
                            <div class="card-body">
                                <div class="playDiv">
                                    <div class="currentMusic">
                                        <span class="currentSpan">
                                            当前正在播放：
                                            <span id="playMsg"></span>
                                        </span>
                                    </div>
                                    <div>
                                        <audio id="musicBox" controls onended="myMusic.nextMusic()"
                                               style="width:99%;padding-left:2px;">
                                            无法播放音乐咯。
                                        </audio>
                                    </div>
                                    <div class="currentBtns">
                                        <div id="lastMusic" class="lastMusic">
                                            <img title="第一首歌曲" alt="第一首歌曲" src="img/music/first.png"
                                                 onclick="myMusic.fristMusic()"/>
                                            <img title="上一首歌曲" alt="上一首歌曲" src="img/music/last.png"
                                                 onclick="myMusic.lastMusic()"/>
                                            <img title="点击暂停" alt="点击暂停" id="pop" src="img/music/pause.png"
                                                 onclick="myMusic.playOrPause()"/>
                                            <img title="下一首歌曲" alt="下一首歌曲" src="img/music/next.png"
                                                 onclick="myMusic.nextMusic()"/>
                                            <img title="最后一首歌曲" alt="最后一首歌曲" src="img/music/end.png"
                                                 onclick="myMusic.end()"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" href="#collapse2Two">
                            <a class="collapsed card-link">
                                歌曲列表
                            </a>
                        </div>
                        <div id="collapse2Two" class="collapse" data-parent="#accordion_2">
                            <div class="card-body d-flex align-items-start">
                                <div class="songStyle float_l">
                                    <div class="float_r">
                                            <span class="playMode">
                                                <b>你 的 音 乐 ：</b>
                                                <label for="playMode"></label>
                                                <select id="playMode">
                                                    <option value="1">全部循环</option>
                                                    <option value="2">单曲循环</option>
                                                    <option value="3">随机播放</option>
                                                </select>
                                            </span>
                                    </div>
                                    <div id="songs">
                                        <ul id="musicList">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" href="#collapse2Three">
                            <a class="collapsed card-link">
                                歌曲信息
                            </a>
                        </div>
                        <div id="collapse2Three" class="collapse" data-parent="#accordion_2">
                            <div class="card-body">
                                <div class="infoStyle float_l">
                                    <div id="infos">
                                        <div class="info float_l">
                                            <div><strong><span>歌名:</span><span id="name"></span></strong></div>
                                            <div><strong><span>歌手:</span><span id="author"></span></strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</article>

<!-- 尾部信息栏区块 -->
<footer>
    <div class="container-fluid">
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
    </div>

    <!--调用时间函数-->
    <script type="text/javascript">
        // 建站时间实现
        function show_date_time() {
            window.setTimeout("show_date_time()", 1e3);
            const BirthDay = new Date("2020/06/06"),			//时间设定
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
