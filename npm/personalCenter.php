<?php
include_once 'main.php';
?>
<head>
    <title>个人中心</title>
</head>
<main class="personalCenter-main container">
    <div class="main-list">
        <ul class="list-content">
            <li>
                <p>个人中心</p>
                <ul>
                    <?php
                    $sql = "select * from users where uid='" . $_SESSION['uid'] . "'";
                    $result = mysql_query($sql);
                    $data = mysql_fetch_assoc($result);
                    echo <<< portrait
                        <li id="img"><a ><div class="headPortrait" ><img  src="{$data['avatar']}" alt="点击更改头像"></div></a></li>
portrait;
                    ?>
                    <li id="alterData"><a>修改个人资料</a></li>
                    <li id="alterPass"><a>修改密码</a></li>
                    <li id="track"><a >足迹</a></li>
                </ul>
            </li>
            <li>
                <p>我的交易</p>
                <ul>
                    <li id="indent"><a href="#">我的订单</a></li>
                    <li><a href="#">我的退货</a></li>
                </ul>
            </li>
            <li>
                <p>我的钱包</p>
                <ul>
                    <li><a href="#">余额管理</a></li>
                    <li><a href="#">银行卡管理</a></li>
                    <li><a href="#">我的优惠卷</a></li>
                </ul>
            </li>
            <li>
                <p>退出登录</p>
                <?php
                if (isset($_GET['exit'])) {
                    unset($_SESSION['username']);
                }
                ?>
                <ul>
                    <li><a href="index.php?exit=2">退出登录</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="main-centerContent">
        <span id="tip">暂无订单数据</span>

        <div id="content"></div>
    </div>
</main>
<?php include_once "footer.php" ?>
<script>
    $(function () {
        //修改头像
        $('#img').on('click', function () {
//            alert(1);
            $("#content").empty();
            $("#tip").empty();
            $("#tip").append("<h3>修改头像</h3>");
            $('#content').append("<table ><tr>" +
                "<?php
                    foreach ($productw as $v) {
                        echo <<<img
            <td class='td'><img src='{$v['img']}' alt=''></td>
img;
                    }
                    ?>" +
                " </tr></table>")
            $('#content').append("<table>" +
                "<tr>" +
                "<td><a href='#' class='btn btn-danger'id='submit'>选好头像，提交</a></td>" +
                "</tr>" +
                "</table>")
            var new_img = '';
            $(".td").on('click', function () {

                $(".td").attr('flag', '').css("border", 'none');
                $(this).attr('flag', '1').css("border", '1px solid #ff6a16');
                new_img = $(this).find('img').attr('src')
//                console.log(new_img)
            });
            $("#submit").on('click', function () {
                $(".td").each(
                    function () {
                        if ($(this).attr("flag") == "1") {
                            $.ajax({
                                type: "POST",
                                data: {
                                    new_img: new_img
                                },
                                url: 'data.php',
                                dataType: "",
                                success: function (data) {
                                    alert(data)
                                },
                                error: function (data) {
                                    alert('数据传输失败')
                                    console.log(data)
                                }
                            })
                        }
                    }
                )
                location.href = "personalCenter.php"
            })


        })
        //修改个人资料
        $('#alterData').on('click', function () {
            $("#content").empty();
            $("#tip").empty();
            $("#tip").append("<h3>修改个人资料</h3>");
            $('#content').append("<table>" +
                "<tr>" +
                "<td>昵称</td><td><input type='text'class='form-control' id='new_name'/></td>" +
                "</tr>" +
                "<tr>" +
                "<td><a href='#' class='btn btn-danger'id='submit'>提交</a></td>" +
                "</tr>" +
                "</table>")

            $("#submit").on('click', function () {
                $.ajax({
                    type: "POST",
                    data: {
                        new_name: $("#new_name").val()
                    },
                    url: 'data.php',
                    dataType: "",
                    success: function (data, status) {
                        alert(data)
                    },
                    error: function (data, status) {
                        alert('数据传输失败')
                        console.log(data)
                    }
                })
                location.href = "personalCenter.php"
            })
        })
        //修改密码
        $("#alterPass").on("click", function () {
            $("#content").empty();
            $("#tip").empty();
            $("#tip").append("<h3>修改密码</h3>");
            $("#content").append("<div id='tips'></div>"+
                "<table>" +
                "<tr>" +
                "<td>请输入密码</td><td><input type='password' class='form-control' id='old_pass'/></td>" +
                "</tr>" +

                "<tr>" +
                "<td>请输入新密码</td><td><input type='password' class='form-control' id='new_pass'></td>" +
                "</tr>" +
                "<tr>" +
                "<td><a class='btn btn-danger' id='submit'>提交</a></td></tr>" +
                "</table>").css('padding-bottom', '20px');


            $("#submit").on('click', function () {
                /*判断旧密码正确*/
//                alert(1)
                $.ajax({
                    type: "POST",
                    data: {
                        old_pass: $("#old_pass").val()
                    },
                    url: 'data.php',
                    dataType: "",
                    success: function (data, status) {
                        if(data=='旧密码正确'){
                            $.ajax({
                                type: "POST",
                                data: {
                                    new_pass: $("#new_pass").val()
                                },
                                url: 'data.php',
                                dataType: "",
                                success: function (data, status) {
                                    alert(data)
                                },
                                error: function (data, status) {
                                    alert('数据传输失败')
                                    console.log(data)
                                }
                            })
                        }else{
//                            alert(data);
                            $("#tips").append(data)
                        }
                    },
                    error: function (data, status) {
                        alert('数据传输失败')
                        console.log(data)
                    }
                })
            })
 
        })
        //足迹
        $('#track').on('click', function () {
            $('#content').empty();
            $('#tip').empty();
            $("#tip").load("gone.php",function () {

            })
        })
        //我的订单
        $("#indent").on('click', function () {
            $("#content").empty();
        })
    })
</script>

