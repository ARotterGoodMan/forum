<!DOCTYPE html>
<?php require "../php/function.php";
$a = array();
$id = "";
require "../php/update.php";
session_start();
if (!empty($_GET)) {
    $id = $_GET['id'];
} ?>
<html lang="ch">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../img/university.ico" type="image/x-icon">
    <title>修改信息</title>
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
    <a class="navbar-brand" href="demo.php">导航</a>
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
                                    <a href='php/exit.php' style='color: #000000' class='dropdown-item'>退出登录</a>
                            </div>
                             " :
                        "<a class='nav-link' href='#demo2' data-toggle='dropdown'>欢迎 <b>$username</b></a>
                             <div id='demo2' class='dropdown-menu'>
                                   <a href='javascript:a()' style='color: #000000' class='dropdown-item'>个人中心</a>
                                    <a href='php/exit.php' style='color: #000000' class='dropdown-item'>退出登录</a>
                            </div> " :
                    "<a class='nav-link' href='demo.php'>用户登录</a>";
                ?>
            </li>
        </ul>
    </div>
</nav>
<!--视频主体模块-->
<article class="container-fluid" style="margin-top:30px;width: 85%">
    <h2 class="display-4 text-center" style="display: block;margin-top: 60px">修改信息</h2>
    <div style="width: 95%;height: 5px;background-color: #17a2b8;border-radius: 5px" class="mx-auto"></div>
    <form action="" method="post" class="container mx-auto" id="formtj">
        <div class="input-group mb-3" style="margin-top: 20px">
            <div class="input-group-prepend">
                <label for="ID" class="input-group-text">&nbsp;I D :</label>
            </div>
            <input type="text" name="ID" id="ID" class="form-control" value="<?php echo $id; ?>" readonly>
        </div>

        <div class="input-group mb-3" style="margin-top: 20px">
            <div class="input-group-prepend">
                <label for="stu_id" class="input-group-text"> 学 号 :</label>
            </div>
            <input type="text" name="stu_id" id="stu_id" class="form-control" value="<?php echo $a['XH']; ?>">
        </div>
        <div class="input-group mb-3" style="margin-top: 20px">
            <div class="input-group-prepend">
                <label for="name" class="input-group-text"> 姓 名 :</label>
            </div>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $a['Name']; ?>">
        </div>

        <div style="margin-top: 10px;height: 40px" class="card bg-light text-dark">
            <label for="sex" class="radio-inline card-body" style="height: 40px;padding:8px 0 8px 20px!important;">
                性 别 :
                <input type="radio" name="sex" id="sex" style="margin-left: 80px"
                       value="男" <?php if ($a['Sex'] == '男') echo "checked"; ?>>男
                <input type="radio" name="sex" id="sex" style="margin-left: 50px"
                       value="女" <?php if ($a['Sex'] == '女') echo "checked"; ?>>女
            </label>
        </div>
        <div class="input-group mb-3" style="margin-top: 20px">
            <div class="input-group-prepend">
                <label for="bri" class="input-group-text"> 生 日 :</label>
            </div>
            <input type="date" id="bri" name="bri" class="form-control" value="<?php echo $a['Birthday']; ?>">
        </div>

        <div class="input-group mb-3" style="margin-top: 20px">
            <div class="input-group-prepend">
                <label for="class" class="input-group-text"> 班 级 :</label>
            </div>
            <input type="text" name="class" id="class" class="form-control" value="<?php echo $a['Class']; ?>">
        </div>

        <div class="input-group mb-3" style="margin-top: 20px">
            <div class="input-group-prepend">
                <label for="major" class="input-group-text"> 专 业 :</label>
            </div>
            <select name="major" id="major" class="form-control">
                <option value="计算机应用技术" <?php if ($a['Major'] == '计算机应用技术') echo "selected"; ?>>计算机应用技术</option>
                <option value="计算机网络技术"<?php if ($a['Major'] == '计算机网络技术') echo "selected"; ?>>计算机网络技术</option>
                <option value="软件技术"<?php if ($a['Major'] == '软件技术') echo "selected"; ?>>软件技术</option>
                <option value="大数据运维"<?php if ($a['Major'] == '大数据运维') echo "selected"; ?>>大数据运维</option>
            </select>
        </div>

        <div style="margin-top: 10px;height: 40px" class="card bg-light text-dark">
            <label for="specialty" class="radio-inline card-body"
                   style="height: 40px;padding:8px 0 8px 20px!important;">
                爱 好 :
                <input type="checkbox" name="specialty[]" id="specialty" value="学习" style="margin-left: 20px"
                    <?php if (strpos($a['Specialty'], "学习") !== false) {
                        echo "checked";
                    } ?>>学习
                <input type="checkbox" name="specialty[]" id="specialty" value="唱"
                    <?php if (strpos($a['Specialty'], "唱") !== false) {
                        echo "checked";
                    } ?>>唱
                <input type="checkbox" name="specialty[]" id="specialty" value="跳"
                    <?php if (strpos($a['Specialty'], "跳") !== false) {
                        echo "checked";
                    } ?>>跳
                <input type="checkbox" name="specialty[]" id="specialty" value="打篮球"
                    <?php if (strpos($a['Specialty'], "打篮球") !== false) {
                        echo "checked";
                    } ?>>打篮球
            </label>
        </div>

        <div class="input-group mb-3" style="margin-top: 20px">
            <div class="input-group-prepend">
                <label for="brief" class="input-group-text"> 简 介 :</label>
            </div>
            <textarea name="brief" id="brief" class="form-control"><?php echo $a['Brief']; ?></textarea>
        </div>

        <div class="container mx-auto">
            <input type="submit" class="btn btn-primary" style="margin-left: 10%;width:30%" value="确认修改">
            <input type="reset" class="btn btn-primary" style="margin-left: 20%;width:30%" value="重新填写">
        </div>
    </form>
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