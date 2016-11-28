<?php
include_once 'main.php';
?>
<head>
    <title>首页</title>
</head>
    <main>
        <!--以下为图片轮播-->
        <div class="container-fluid">
            <div class="row">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                    <!-- Wrapper for slides -->
                    <?php
                        $sql="select * from ad";
                        $result = mysql_query($sql);
                        $data = array();
                        while($row = mysql_fetch_array($result)){
                            $data[]=$row;
                        }
//                    print_r($data);
                    $flag=0;
                        foreach($data as $k => $v){
//                            var_dump($v['url']);
                            if($flag==0){
                                echo <<< img
                        <div class="item active">
                            <img src="{$v['url']}" alt="...">
                        </div>
img;
                            }else{
                                echo <<< img
                        <div class="item">
                            <img src="{$v['url']}" alt="...">
                        </div>
img;
                            }
                            $flag++;
                        }
                    ?>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!--以下为正文部分-->
        <!--以下为正文上部分三个新闻-->
        <div class="container news">
            <div class="row  tag">
                <div class="page-header news-title">
                    <h1><strong>飞鹤资讯</strong></h1>
                </div>
            </div>
            <div class="row">

                <?php
                $flag = 0;
                foreach ($news as $k => $v) {
                    if ($flag < 3) {
                        echo <<<news
                        <div class="col-xs-6 col-md-4 ">
                            <a href="#" class="thumbnail">
                                <img src="{$v['image']}" alt="...">
                                <div class="caption text-center">
        
                                    <h3>{$v['title']}</h3>
                                </div>
                            </a>
                        </div>
news;
                    }
                    $flag++;
                }
                ?>
            </div>
        </div>
        <div class="container pro">
            <div class="row  tag">
                <div class="page-header news-title">
                    <h1><strong>星飞帆</strong><span class="small">超高端奶粉品牌，万千妈妈推荐</span></h1>
                </div>
            </div>
            <div class="row">
                <?php
                $flag = 0;
                foreach ($products as $k => $v) {
                    if ($flag < 3) {
                        echo <<<pro
                        <div class="col-xs-6 col-md-4 ">
                            <a href="#" class="thumbnail">
                                <img src="{$v['image']}" alt="...">
                            </a>
                            <div class="caption text-center ">
                                <h3><a href="">{$v['title']}</a></h3>
                                <span class="pull-left"><a href="">销量{$v['hot']}件</a></span><span class="pull-right price"><a
                                        href="">￥{$v['price']}</a></span>
                            </div>
                        </div>
pro;
                    }
                    $flag++;
                }
                ?>
            </div>
        </div>
        <div class="container pro">
            <div class="row  tag">
                <div class="page-header news-title">
                    <h1><strong>超级飞帆</strong><span class="small">双蛋白创新组合，促进眼脑发育</span></h1>
                </div>
            </div>
            <div class="row">
                <?php
                $flag = 0;
                foreach ($products as $k => $v) {
                    if (2 < $flag && $flag < 6) {
                        echo <<<pro
                        <div class="col-xs-6 col-md-4 ">
                            <a href="#" class="thumbnail">
                                <img src="{$v['image']}" alt="...">
                            </a>
                            <div class="caption text-center ">
                                <h3><a href="">{$v['title']}</a></h3>
                                <span class="pull-left"><a href="">销量{$v['hot']}件</a></span><span class="pull-right price"><a
                                        href="">￥{$v['price']}</a></span>
                            </div>
                        </div>
pro;
                    }
                    $flag++;
                }
                ?>
            </div>
        </div>
        <div class="container pro">
            <div class="row  tag">
                <div class="page-header news-title">
                    <h1><strong>星阶优护</strong><span class="small">科技还原母爱，延续天然乳汁营养</span></h1>
                </div>
            </div>
            <div class="row">
                <?php
                $flag = 0;
                foreach ($products as $k => $v) {
                    if (5 < $flag && $flag < 9) {
                        echo <<<pro
                        <div class="col-xs-6 col-md-4 ">
                            <a href="#" class="thumbnail">
                                <img src="{$v['image']}" alt="...">
                            </a>
                            <div class="caption text-center ">
                                <h3><a href="">{$v['title']}</a></h3>
                                <span class="pull-left"><a href="">销量{$v['hot']}件</a></span><span class="pull-right price"><a
                                        href="">￥{$v['price']}</a></span>
                            </div>
                        </div>
pro;
                    }
                    $flag++;
                }
                ?>
            </div>
        </div>
        <div class="container pro">
            <div class="row  tag">
                <div class="page-header news-title">
                    <h1><strong>飞帆</strong><span class="small">经典成就，卓越品质</span></h1>
                </div>
            </div>
            <div class="row">
                <?php
                $flag = 0;
                foreach ($products as $k => $v) {
                    if (8 < $flag && $flag < 12) {
                        echo <<<pro
                        <div class="col-xs-6 col-md-4 ">
                            <a href="#" class="thumbnail">
                                <img src="{$v['image']}" alt="...">
                            </a>
                            <div class="caption text-center ">
                                <h3><a href="">{$v['title']}</a></h3>
                                <span class="pull-left"><a href="">销量{$v['hot']}件</a></span><span class="pull-right price"><a
                                        href="">￥{$v['price']}</a></span>
                            </div>
                        </div>
pro;
                    }
                    $flag++;
                }
                ?>
            </div>
        </div>

    </main>
<?php
include_once 'footer.php'; ?>