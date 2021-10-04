<?php
    $item_id = $_GET['product_id'] ?? 1;
    foreach($product->getData() as $item):
        if($item['product_id'] == $item_id): 

?>
<section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image']?>" alt="proxdr" class="img-fluid">
                        <div id="btn" class="form-row pt-4 font-size-16 font-rubik">
                            <div class="col">
                                <button type="submit" class="btn btn-primary form-control">Continue Shopping</button>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-warning form-control">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['model']?></h5>
                        <small><?php echo $item['brand_id']?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span class="fas fa-trophy"></span>
                                <span class="fas fa-trophy"></span>
                                <span class="fas fa-trophy"></span>
                                <span class="fas fa-trophy"></span>
                                <span class="fas fa-trophy"></span>
                            </div>
                            <p href="#" class="px-2 font-rale font-size-14 color-primary">Rated by our Professionals</a>
                        </div>
                        <hr class="m-0">
                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>Price:</td>
                                <td class="font-size-16"><strike><?php echo ($item['price']+100)?>$</strike></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Lowered Price:</td>
                                <td class="font-size-20 text-danger"><?php echo $item['price']?></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>You Save:</td>
                                <td class="font-size-16  text-danger">&nbsp 499$</td>
                            </tr>
                        </table>
                        <div id="policy">
                            <div class="d-flex">
                               <div class="return text-center m-2">
                                   <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-shipping-fast border p-3 rounded-pill"></span>
                                   </div>
                                   <a href="#" class="font-rubik font-size-12">Free Shipping <br> limited to Serbia</a>
                               </div>
                               <div class="return text-center m-2">
                                <div class="font-size-20 my-2 color-second">
                                     <span class="fas fa-file-medical border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-rubik font-size-12">2 Years Warranty<br>2 Years of AppleCare</a>
                                </div>
                                <div class="return text-center m-2">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rubik font-size-12">Return <br>not possible!</a>
                                </div>   
                            </div>
                        </div>
                        <hr>
                        <div id="detalji" class="font-rubik d-flex flex-column">
                            <small class="text-success">Available for order</small>
                            <small>Display Kings</small><br>
                            <small><i class="fas fa-map-marker-alt color-primary">&nbsp&nbspBelgrade, Serbia</i></small><br>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="qty d-flex">
                                    <h6 class="font-rubik">Qty:</h6>
                                    <div class="px-4 d-flex font-rale">
                                        <button class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                        <input type="text" class="qty_input border px-2 w-50 bg-light" disable value=1>
                                        <button class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6"></div>
                        </div>
                </div>
                <div id="product-description" class="col-12">
                    <h6 class="font-rubik">Product Description</h6>
                    <hr>
                    <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                    <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                </div>
            </div>
        </section>

<?php
endif;
endforeach;
?>