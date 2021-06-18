
<?php
// request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['product_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
//Get item variables with their ids
$item_id = $_GET['item_id']??'1';
foreach ($product->getData() as $item) :
if ($item['item_id'] == $item_id) :

?>
<!-- product description starting -->
   <section class="py-3" id="product-des">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="<?php echo $item['item_image']??"assets/img/pain/pain5.png" ;?>" class="img-fluid">
            <div class="form-row pt-4 font-size-16">
              <div class="col">
                
                <button type="submit" class="form-control btn btn-danger">Procced to Buy</button>
              </div>
              <div class="col">
                       <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php
                            if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">Added to Cart</button>';
                            }else{
                                echo '<button type="submit" name="product_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                            }
                            ?>

                        </form>
                    </div>
            </div>
          </div>
          <div class="col-sm-6 py-5">
            <h5><?php echo $item['item_name']??"Unknown";  ?></h5>
            <small><?php echo $item['item_brand']??"brand";  ?></small>
            <div class="d-flex text-warning">
               <span><i class="fas fa-star"></i></span>
               <span><i class="fas fa-star"></i></span>
               <span><i class="fas fa-star"></i></span>
               <span><i class="fas fa-star"></i></span>
               <span><i class="far fa-star"></i></span>
            </div>
            <hr class="m-0">
            <!-- price & description------>
            <table class="my-3">
              <tr class="font-size-14">
                <td>Was:</td>
                <td><strike>&#8373;5.00</strike></td>
              </tr>
              <tr>
                <td>Now:</td>
                <td class="font-size-20 text-success">&#8373;<?php echo $item['item_price']??"0";  ?></td>
              </tr>
            </table>
            <!-- price & and description ---->
            <!-- policy---->
            <div id="policy">
              <div class="d-flex">
                <div lass="return mr-5 text-center">
                  <div class="font-size-20 my-2">
                    <span><i class="fas fa-retweet fa-2x border rounded-pill text-info"></i></span>
                  </div>
                  <a href="#" class="font-size-12">7 Days <br> Return</a>
                </div>
                <div lass="return mr-5 text-center">
                  <div class="font-size-20 my-2">
                    <span><i class="fas fa-truck border rounded-pill text-info"></i></span>
                  </div>
                  <a href="#" class="font-size-12">Free <br> Delivery</a>
                </div>
                <div lass="return mr-5 text-center">
                  <div class="font-size-20 my-2">
                    <span><i class="fas fa-check-double border rounded-pill text-info"></i></span>
                  </div>
                  <a href="#" class="font-size-12">used items<br> Can't be Replaced</a>
                </div>
              </div>
            </div>
            <!-- policy--->
            <hr>
            <!--oredr details --->
            <div id="oredr-details" class="d-flex flex-column text-dark">
              <small>Delivered by: March-27 - April 1</small>
              <small><i class="fas fa-map-marker"></i>&nbsp;&nbsp; Delivered to customer - 4745</small>
            </div>
        <!--- order details---->
           <div class="row">
             <div class="col-6">
                <div class="qty d-flex">
                  <h6>Quantity</h6>
             <button class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
            <input type="number" class="qty_input border px-2 w-50 bg-light"
             disabled value='1' placeholder="1">
            <button class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                   </div>
                </div>
             </div>
             <div class="col-6"></div>
           </div>
          </div>
          <div class="col-12">
            <h6>Product Description</h6>
             <hr>
             <p><?php echo $item['description']??"brand";  ?></p>
          </div>
        </div>
      </div>
    </section>
  <!-- product description ending-->

<?php 
endif;
endforeach; 

?>

  <?php 
  include 'recent-post.php';
  include 'footer.php';
  ?>