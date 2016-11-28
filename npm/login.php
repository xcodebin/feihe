<?php
session_start();
include_once "db.php";
include_once "header.php";
if(isset($_POST['button'])){
    $username = $_POST['username'];
    $userpass = $_POST['password'];
    $sql = "select * from users where username='$username' and userpass='$userpass'";
    $result =mysql_query("$sql");
    $row=mysql_fetch_assoc($result);
    if($row){
        $_SESSION['username'] = $username;
        $_SESSION['uid'] = $row['uid'];
        $_SESSION['nickname']=$row['nickname'];
        echo "<script>alert('登录成功');location.href='personalCenter.php'</script>";

    }else{
        echo "<script>alert('用户名或密码不正确');</script>";
    }
}
?>
<head>
    <title>登录</title>
</head>
<main class="register-main">
    <div class="main-content">
        <div class="content-left">
        </div>
        <div class="content-right">
            <form action="login.php" method="post">
                <section><h3>欢迎登录</h3></section>
                <section>
                    <p class="title-p">用户名:</p>
                    <p><input type="text" placeholder="请输入正确的手机号" name="username"></p>
                </section>
                <section>
                    <p class="title-p">密码:</p>
                    <p><input type="password" placeholder="请输入密码" name="password"></p>
                </section>
                <section class="form-check">
                    <p><input type="checkbox" checked>记住密码</p>
                </section>
                <section class="right-button">
                    <p><button name="button" class="white font">立即登录</button></p>
                </section>
                <section class="button-check title-p">
                    <p><input type="checkbox" checked>我已阅读并同意《飞鹤用户注册协议》</p>
                </section>
            </form>
            <p class="title-p"><a href="#">新用户注册送40元红包</a></p>
            <div class="title-p login">
                <span>第三方登录</span>
                <span class="login-list">
                    <a href="#">
                        <img src="img/alipayLogin.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="img/qqLogin.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="img/weixinLogin.jpg" alt="">
                    </a>
                </span>

            </div>
            <div class="title-p title-bottom">
                <span>已经是会员</span>
                <a href="#" class="red">免费注册</a>
                <span class="bottom-right"><a href="#" class="gray">忘记密码?</a></span>
            </div>

        </div>

    </div>

</main>
<?php
include_once "footer.php";
?>