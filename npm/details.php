<?php
include_once 'header.php';
include_once 'data.php';
if (isset($_GET['pid'])) {
    $pid = $_GET['pid']-1;
    if (isset($_COOKIE['products'])) {
        $new = $_COOKIE['products'] . '+' . serialize($products[$pid]);
//        echo $new;
        setcookie('products', $new, time() + 60 * 60 * 24);
    } else {
        setcookie('products', serialize($products[$pid]), time() + 60 * 60 * 24);
    }
}
?>
<main>
    <div class="jumbotron text-center">
        <h2><?php echo $products[$pid]['title']; ?></h2>
        <img src="<?php echo $products[$pid]['image'] ?>" alt="">
        <br>
        <span>单价：<?php echo $products[$pid]['price']; ?></span>
    </div>
</main>
<?php
include_once 'footer.php'; ?>