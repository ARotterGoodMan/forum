<!DOCTYPE html>
<?php $errors = "";
require "../php/error.php" ?>
<html lang="ch">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../img/university.ico" type="image/x-icon">
    <title>啊，这</title>
    <link rel="stylesheet" type="text/css" href="../SX_css/index.css">
    <link rel="stylesheet" type="text/css" href="../SX_css/bootstrap/bootstrap.css"/>
    <script src="../SX_js/jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="../SX_js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <style type="text/css">
        #uner {
            background: rgba(253, 252, 252, 0.8);
            padding: 66px 0 66px 0;
            margin: 8% auto;
        }

        @media (min-width: 800px) {
            img {
                width: 250px;
            }

            #warning {
                height: 44px;
                font-size: 33px;
                text-align: center;
                margin: 0 auto 8% auto;
            }
        }

        @media (max-width: 800px) {
            img {
                width: 30%;
            }

            #warning {
                height: 44px;
                font-size: 22px;
                text-align: center;
                margin: 0 auto 8% auto;
            }
        }
    </style>
</head>
<body>
<div id="uner">
    <div id="warning">
        出现了一个错误 <br> <?php echo $errors ?>
    </div>
    <div style="text-align: center">
        <div>
            <img src="../img/jz_1.jpg"
                 alt="warning"><img src="../img/jz_2.jpg"
                                    alt="warning"><img src="../img/jz_1.jpg"
                                                       alt="warning">
        </div>
    </div>
</div>

</body>
</html>