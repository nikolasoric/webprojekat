<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-card-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['product_id']);
    }

    if(isset($_POST['card-submit'])){
        $Cart->saveForLater($_POST['product_id'], 'card', 'wishlist');
    }
}
?>

<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-rubik font-size-20">Wishlist</h5>

        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-9">
                <?php
                foreach ($product->getData('wishlist') as $item) :
                    $cart = $product->getProduct($item['product_id']);
                    $subTotal[] = array_map(function ($item){
                        ?>
                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-rubik font-size-20"><?php echo $item['model'] ?? "Unknown"; ?></h5>
                                <small>by <?php echo $item['brand_id'] ?? "Brand"; ?></small>
                                <!-- product rating -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rubik font-size-14">20,534 ratings</a>
                                </div>
                                <!--  !product rating-->

                                <!-- product qty -->
                                <div class="qty d-flex pt-2">

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['product_id'] ?? 0; ?>" name="product_id">
                                        <button type="submit" name="delete-card-submit" class="btn font-rubik text-danger pl-0 pr-3 border-right">Delete</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['product_id'] ?? 0; ?>" name="product_id">
                                        <button type="submit" name="card-submit" class="btn font-rubik text-danger">Add to Cart</button>
                                    </form>


                                </div>
                                <!-- !product qty -->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-rubik">
                                    $<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['price'] ?? 0; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- !cart item -->
                        <?php
                        return $item['price'];
                    }, $cart); 
                endforeach;
                ?>
            </div>
        </div>
        <!--  !shopping cart items   -->
    </div>
</section>