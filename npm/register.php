<?php
include_once "db.php";
include_once "header.php";
if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $userpass=$_POST['password'];
//    echo $userpass;
    $againpass =$_POST['againpass'];
//    echo $againpass;
    $authCode = $_POST['auth-code'];
//    验证用户名 密码 验证码 不能为空
    if($username !== ''&&$userpass !=="" &&$authCode !== '' ){
//        验证 密码 和 确认密码一致
        if($userpass == $againpass){
            $sql= "insert into users VALUES ('','$username','$userpass','','','','','','')";
            $result = mysql_query("$sql");
            echo "<script>alert('注册成功，请前去登录');location.href='login.php'</script>";
        }else{
            echo "<script>alert('注册失败');'</script>";
        }


    }else{
        echo "<script>alert('用户名，密码或者验证码不能为空');'</script>";
    }


}
?>
<head>
    <title>注册</title>
</head>
<main class="register-main">
    <div class="main-content">
        <div class="content-left">

        </div>
        <div class="content-right">
            <form action="register.php" method="post" id="submit">
                <section>
                    <p class="title-p">用户名:</p>
                    <p><input type="text" placeholder="请输入正确的手机号" name="username" id="username"></p>
                    <p id="usermeg"></p>
                </section>
                <section>
                    <p class="title-p">密码:</p>
                    <p><input type="password" placeholder="请输入密码" name="password"></p>
                </section>
                <section>
                    <p class="title-p">确认密码:</p>
                    <p><input type="password" placeholder="请输入密码" name="againpass"></p>
                </section>
                <section>
                    <p class="title-p">验证码:</p>
                    <p class="right-testing">
                        <input type="password" placeholder="4位验证码" name="auth-code"><a href="#"><img src="img/showimg.gif" alt=""></a>

                        <span>换一张</span>
                    </p>
                </section>
                <section class="right-button">
                    <p><button name="submit" class="white font" >立即注册</button></p>
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
                <a href="#">立即登录</a>
            </div>
        </div>

    </div>

</main>
<?php
    include_once "footer.php";
?>
<script>
    $(function () {
        $("#username").on("blur", function () {
            if ($("#username").val() == "") {
                $("#usermeg").html("<p>用户名不能为空</p>")
                $("#username").css('border', '1px solid red')
            } else {
                $.ajax({
                    type: "POST",
                    data: {
                        username: $("#username").val(),
                        flag:1
                    },
                    url: 'data.php',
                    dataType: "",
                    success: function (data) {
                        console.log(data)
                        if (data == 1) {
                            $("#usermeg").html('<p>此用户已存在</p>');
                            $("#username").css('border', '1px solid red')
                            $("#submit").submit(function(){
                                return false;
                            })
                        } else {
                            $("#usermeg").html('<p>此用户不存在，可以创建</p>');
                            $("#username").css('border', '1px solid blue')
                            $("#submit").submit(function(){
                                return true;
                            })
                        }
                    },
                    error: function (data, status) {
                        $("#usermeg").html('数据出错');
                    }
                })
            }

        })
    });
</script>