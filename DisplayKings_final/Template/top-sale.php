<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
     if (isset($_POST['top_sale_submit'])){
         // call method addToCart
         $Cart->addToCart($_POST['user_id'], $_POST['product_id']);
     }
}
 ?>

<section id="top-sale">
            <div class="container py-5">
                <h4 class="font-rubik font-size-20">Flagship Models</h4>
                <hr>
                <!--Owl Carousel-->
                <div class="owl-carousel owl-theme">
                    <?php foreach($product_shuffle as $item) { ?>
                    <div class="item py-2">
                        <div class="product font-rubik">
                        <a href="<?php printf('%s?product_id=%s', 'product.php', $item['product_id']) ?>"><img src="<?php echo $item['item_image']?>" alt="product1" width="200" class="ml-lg-5 order-1 order-lg-2"></a>
                            <div class="text-center">
                                <h6><?php echo $item['model']?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span class="fas fa-trophy"></span>
                                    <span class="fas fa-trophy"></span>
                                    <span class="fas fa-trophy"></span>
                                    <span class="fas fa-trophy"></span>
                                    <span class="fas fa-trophy"></span>
                                </div>
                                <div class="price py-2">
                                <span><?php echo $item['price'] ?? '0';?></span>
                                </div>
                                <form method="post">
                                <input type="hidden" name="product_id" value="<?php echo $item['product_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to cart!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>