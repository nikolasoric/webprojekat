<?php
    ob_start();
    include('header.php');

?>

        <?php
            include('Template/cart-template.php');
            include('Template/wishlist-template.php');
            include('Template/top-sale.php');
            include('Template/banner-ads.php');
        ?>

<?php
    include('footer.php');
?>