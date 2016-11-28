
<?php
//session_start();
include_once 'data.php';
include_once 'header.php';
if(isset($_GET['id2'])){
    $id2=$_GET['id2'];
    unset($_SESSION['cart'][$id2]);
}

if(isset($_GET['sub'])){
    $sub=$_GET['sub'];
    if($_SESSION['cart'][$sub]['num']>1){
        $_SESSION['cart'][$sub]['num']--;
    }

}

if(isset($_GET['add'])){
    $sub=$_GET['add'];           /* 小雨库存*/
    $_SESSION['cart'][$sub]['num']++;
}
if (isset($_GET['pid'])) {
    $pid = $_GET['pid']-1;
    if (!isset($_SESSION['cart'])) {
        $cart = array();
        $cart[$pid] = array(
            'title' => $products[$pid]['title'],
            'image' => $products[$pid]['image'],
            'price' => $products[$pid]['price'],
            'num' => 1
        );
        $_SESSION['cart'] = $cart;
//        var_dump($cart);
    }else{
        $cart = $_SESSION['cart'];
        if(array_key_exists($pid,$cart)){
            $cart[$pid]['num']++;
            $_SESSION['cart'] = $cart;
//            var_dump($cart);
//            echo $cart[$id]['num'];
        }else{
            $cart[$pid] = array(
                'title' => $products[$pid]['title'],
                'image' => $products[$pid]['image'],
                'price' => $products[$pid]['price'],
                'num' => 1
            );
            $_SESSION['cart'] = $cart;
//            var_dump($cart);
        }
    }
}
?>
<head>
    <title>购物车</title>
</head>
<?php
if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
    ?>

<table border="1" width="100%" align="center" class="text-center">
    <tr >
        <th>商品ID</th>
        <th>商品图片</th>
        <th>商品名称</th>
        <th>商品价格</th>
        <th>商品数量</th>
        <th>小计</th>
        <th>操作</th>
    </tr>
    <?php

    $totals = '';
    foreach($_SESSION['cart'] as $key=>$value){
        $total = $value['num'] * $value['price'];
        $totals += $total;
        echo <<<cart
        <tr>
            <td>{$key}</td>
            <td><img src="{$value['image']}" width="80px"/></td>
            <td>{$value['title']}</td>
            <td>{$value['price']}</td>
            <td><a href=shopcar.php?sub={$key}>-</a>{$value['num']}<a href=shopcar.php?add={$key}>+</a></td>
            <td>{$total}</td>
            <td><a href="shopcar.php?id2={$key}" class="clear">删除</a></td>
        </tr>
cart;

    }
    ?>
</table>

    <?php

    echo '<a href="product.php">继续购物</a>';
    echo "<div class='pull-right'><span>总价：$totals</span><a href=''>结算</a></div>";
} else {
    echo '购物车空，请去购物' . '<a href="product.php">去购物</a>';
}

include_once 'footer.php'; ?>
















