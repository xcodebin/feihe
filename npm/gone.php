<?php
//session_start();
include_once 'data.php';
?>
<section>
    <aside>
        <h2>足迹</h2>
        <?php
        if (isset($_COOKIE['products'])) {
            $visited_product = $_COOKIE['products'];
            $arr = explode('+', $visited_product);
            // var_dump($arr);
            foreach ($arr as $k => $v) {
                $att = unserialize($v);       /*$products[$id]*/
                // print_r($att);
                echo <<<ddd
                <div class='text-center'>
                    <img src="{$att['image']}" alt="">
                   <ul>
                       <li>{$att['title']}</li>
                       <li>{$att['price']}元</li>
                   </ul>
                </div>
ddd;
            };
        };
        ?>
    </aside>
</section>
