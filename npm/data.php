<?php
session_start();
include_once 'db.php';
$pro = "SELECT * FROM products";
$result = mysql_query($pro);
$products = array();
while ($row = mysql_fetch_assoc($result)) {
    $products[] = $row;
}

$new = "SELECT * FROM news";
$return = mysql_query($new);
$news = array();
while ($row = mysql_fetch_assoc($return)) {
    $news[] = $row;
}

/*用户数据库*/


if (isset($_POST['username']) && !isset($_POST['submit']) && isset($_POST['flag'])) {
    $user = "SELECT * FROM users where username = '{$_POST['username']}'";
    $user_return = mysql_query($user);
    $row = mysql_fetch_assoc($user_return);
    if ($row) {
        echo "1";
    } else {
        echo "2";
    }
}

//修改头像
$pros = "SELECT * FROM img";
$resultw = mysql_query($pros);
$productw = array();
while ($roww = mysql_fetch_assoc($resultw)) {
    $productw[] = $roww;
}
//var_dump($productw);
if (isset($_POST['new_img'])) {
    $new_img = "update users set avatar='{$_POST['new_img']}' where uid = '{$_SESSION['uid']}'";
    $new_img_return = mysql_query($new_img);
    if ($new_img_return) {
        echo "头像修改成功";
    } else {
        echo "头像修改失败";
    }
}


//修改昵称
if (isset($_POST['new_name'])) {
    $new_name = "update users set nickname='{$_POST['new_name']}' where uid = '{$_SESSION['uid']}'";
    $new_name_return = mysql_query($new_name);
    if ($new_name_return) {
        $_SESSION['username'] = $_POST['new_name'];
        echo "昵称修改成功";
    } else {
        echo "昵称修改失败";
    }
}


/*验证旧密码*/
if (isset($_POST['old_pass'])) {
    $userpass = "SELECT userpass FROM users where username = '{$_SESSION['username']}'";
    $userpass_return = mysql_query($userpass);
    $userpassrow = mysql_fetch_assoc($userpass_return);
//    var_dump($userpassrow);
    if ($userpassrow['userpass'] == $_POST['old_pass']) {
        echo "旧密码正确";
    } else {
        echo "旧密码不正确";
    }
}


//修改密码
if (isset($_POST['new_pass'])) {
    $new_pass = "UPDATE users SET userpass='{$_POST['new_pass']}' where username = '{$_SESSION['username']}'";
    $new_pass_return = mysql_query($new_pass);
    if ($new_pass_return) {
        echo "密码修改成功";
    } else {
        echo "密码修改失败";
    }
}


//拉取新闻
if (isset($_POST['news'])) {
    $news = "select * from newCenter";
    $news_return = mysql_query($news);
    $news_data = array();
    while ($row = mysql_fetch_assoc($news_return)) {
        $news_data[] = $row;
    }
    foreach ($news_data as $k => $v) {
        foreach ($v as $k => $v) {
            if ($v != "") {
                if ($k == $_POST['news']) {
                    echo "<li><div class='aa'></div><a>" . $v . "</a><li>";
                }
            }


        }
    }
}





