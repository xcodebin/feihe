<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/public.css">
</head>
<body>
<header>
    <!--以下为导航-->
    <div class="container-fluid ">
        <!--首页进入隐藏的图片-->
        <div class="row title"><img src="img/title.jpg" alt="title"></div>
        <div class="row navbar-h">
            <div class="navbar-header col-xs-4">
                <a href="index.php"><img src="img/feiheLogo.jpg" alt=""></a>
            </div>
            <div class=" col-xs-5">
                <a href="#"><img src="img/feiheSelling.jpg" alt=""></a>
            </div>
            <ul class="nav navbar-nav col-xs-3 navbar-rightt">
                <?php
                if(isset($_GET['exit'])){
                    unset($_SESSION['nickname']);
                    unset($_SESSION['username']);
                }
                    if(isset($_SESSION['nickname'])&&$_SESSION['nickname']!==""){

                        echo <<< html
                        <li><a href="personalCenter.php">{$_SESSION['nickname']} 您好！</a></li>
                        <li><a href="index.php?exit=1">退出</a></li>

html;

                    }elseif (isset($_SESSION['username'])){
                        echo <<< html
                        <li><a href="personalCenter.php">{$_SESSION['username']} 您好！</a></li>
                        <li><a href="index.php?exit=1">退出</a></li>

html;
                    }
                    else{
                        echo <<< title
                  <li><a href="login.php">登录</a></li>
                  <li><a>|</a></li>
                  <li><a href="register.php">注册</a></li>
title;
                    }
                ?>

                <li><a href="shopcar.php" class="nav-img"><img src="img/font-365.png" alt="">购物车 <strong>
                            <?php
                            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                                $sum = 0;
                                foreach ($_SESSION['cart'] as $k => $v) {
                                    $sum += $v['num'];
                                }
                                echo $sum;
                            } else {
                                echo 0;
                            }
                            ?>
                        </strong></a>
                </li>
            </ul>

        </div>
    </div>
    <!--以下为导航条-->
    <div class="container-fluid">

        <div class="row background-blue">
            <div class="col-xs-11 col-xs-offset-1 navbar-f ">

                <ul class="nav text-center nav-tabs ">
                    <li class="navlist-first"><a href="product.php?id=星飞帆">星飞帆</a></li>
                    <li class="navlist-normal"><a href="product.php?id=超级飞帆">超级飞帆</a></li>
                    <li class="navlist-normal"><a href="product.php?id=星阶优护">星阶优护</a></li>
                    <li class="navlist-normal"><a href="product.php?id=飞帆">飞帆</a></li>
                    <li class="navlist-normal"><a href="product.php?id=舒贝诺">舒贝诺</a></li>
                    <?php
                    require_once 'fns.php';
                    if(isset($_GET['id'])){
                        $type=$_GET['id'];
                    }
                    ?>
                    <li class="navlist-normal"><a id="dropdownMenu2" data-toggle="dropdown">产品查询</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><a href="product.php">全产业链</a></li>
                            <li><a href="product.php">产品追溯</a></li>
                        </ul>
                    </li>
                    <li class="navlist-last"><a href="newCenter.php">新闻中心</a></li>
                </ul>
            </div>

        </div>
    </div>
</header>


