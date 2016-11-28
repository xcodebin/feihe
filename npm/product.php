<?php
include_once 'main.php';
?>
<head>
    <title>产品</title>
</head>
    <main>
        <nav class="float-nav">
            <ul class="clearfix">
                <li><a href="seen.php">已浏览的商品</a></li>
            </ul>
        </nav>
        <div class="container news">
            <div class="row">
                <?php
                $flag = 0;
                foreach ($products as $k => $v) {
                    if ($flag < 20) {
                        if(isset($type)){
                            if($v['content'] == $type){
                                echo <<< html
                        <div class="col-xs-6 col-md-4 ">
                            <a href="#" class="thumbnail">
                                <img src="{$v['image']}" alt="...">
                            </a>
                            <div class="caption text-center ">
                                <h3><a href="">{$v['title']}</a></h3>
                                <span ><a href="">销量{$v['hot']}件</a></span><span class="pull-right price"><a href="">￥{$v['price']}</a></span>
                                <b><a href="details.php?pid={$v['pid']}">详细</a></b>
                                <button class=btn><a href="shopcar.php?pid={$v['pid']}">加入购物车</a></button>
                            </div>
                        </div>
html;
                            }
                        }else{
                            echo <<<product
                        <div class="col-xs-6 col-md-4 ">
                            <a href="#" class="thumbnail">
                                <img src="{$v['image']}" alt="...">
                            </a>
                            <div class="caption text-center ">
                                <h3><a href="">{$v['title']}</a></h3>
                                <span ><a href="">销量{$v['hot']}件</a></span><span class="pull-right price"><a href="">￥{$v['price']}</a></span>
                                <b><a href="details.php?pid={$v['pid']}">详细</a></b>
                                <button class=btn><a href="shopcar.php?pid={$v['pid']}">加入购物车</a></button>
                            </div>

                        </div>
product;
                        }

                    }
                    $flag++;
                }
                ?>
            </div>
        </div>
    </main>

<?php
include_once 'footer.php'; ?>