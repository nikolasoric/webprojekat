<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['delete-card-submit'])){
            $deletedrecord = $Cart->deleteCart($_POST['product_id']);
        }

        // // wishlist dugme
         if (isset($_POST['wishlist-submit'])){
             $Cart->saveForLater($_POST['product_id']);
         }
    }
?>

<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-9">
                <?php
                    foreach ($product->getData('card') as $item) :
                        $cart = $product->getProduct($item['product_id']);
                        $subTotal[] = array_map(function ($item){
                ?>
                <!-- cart item -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['item_image'] ?? "./assets/ProArt.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
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
                            <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                        </div>
                        <!--  !product rating-->

                        <!-- product qty -->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light" data-id="<?php echo $item['product_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $item['product_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="<?php echo $item['product_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>

                            <form method="post">
                                <input type="hidden" value="<?php echo $item['product_id'] ?? 0; ?>" name="product_id">
                                <button type="submit" name="delete-card-submit" class="btn font-rubik text-danger px-3 border-right">Delete</button>
                            </form>

                            <form method="post">
                                <input type="hidden" value="<?php echo $item['product_id'] ?? 0; ?>" name="product_id">
                                <button type="submit" name="wishlist-submit" class="btn font-rubik text-danger">Save for Later</button>
                            </form>


                        </div>
                        <!-- !product qty -->

                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-rubik">
                            <span class="product_price"><?php echo $item["price"]?>$</span>
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
            <!-- subtotal section-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rubik text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                    <div class="border-top py-4">
                        <h5 class="font-rubik font-size-20">Subtotal ( <? echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
                        <button onclick="window.location.href='winner.php'" class="btn btn-warning mt-3">Proceed to Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>