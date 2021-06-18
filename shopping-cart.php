<!--STARTING OF HEADER--->

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" /> 
    <title>Mixtures Online pharmacy</title>
     <!-- Font Awesome icons (free version)-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!--- bootstrap cdn ------------------->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

     <!-- owl caurosel cdn ----------->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
       <!--- custom  css file------->
        <link href="css/style.css" rel="stylesheet"/>
        <?php
        require_once ('functions.php');
        ?>
</head>
<body id="page-top">
<!-- header starting---------------->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-size-15 text-black-50 m-0">Mixture's Development p.o.box 19 Juapong volta-Ho (0201234928)</p>
        <div class="font-size-14">
            <a href="#" class="px-3 border-right border-left text-dark">Login</a>
            <a href="wishlist.php" class="px-3 border-right text-dark">Whishlist(0)</a>
        </div>
    </div>
    <!--- primary navigation starting --->
         <nav class="navbar navbar-expand-lg  navbar-light bg-warning">
  <a class="navbar-brand" href="#">Mixture' Pharmacy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav m-auto font-Roboto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="_product.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="about.php">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="doctors.php">Doctors</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact</a>
      </li>
    </ul>
    <form action="#" class="font-size-14">
        <a href="shopping-cart.php" class="py-2 rounded-pill bg-dark">
        <span class="font-size-15 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
        <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart'));?></span>
    </a>
    </form>
  </div>
</nav>
    <!--- primary navigation Ending --->
</header>
<!--- header ending ------>

<!--- main page staring ---->
 <main id="main-site">

<!--- ENDING OF HEADER--->

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['delete-cart-submit'])){
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);
        }

        // save for later
        if (isset($_POST['wishlist-submit'])){
            $Cart->saveForLater($_POST['item_id']);
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
                    foreach ($product->getData('cart') as $item) :
                        $cart = $product->getProduct($item['item_id']);
                        $subTotal[] = array_map(function ($item){
                ?>
                <!-- cart item -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                        <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                        <!-- product rating -->
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            
                        </div>
                        <!--  !product rating-->

                        <!-- product qty -->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>

                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                            </form>

                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" name="wishlist-submit" class="btn font-baloo text-danger">Save for Later</button>
                            </form>


                        </div>
                        <!-- !product qty -->

                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            &#8373;<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                        </div>
                    </div>
                </div>
                <!-- !cart item -->
                <?php
                            return $item['item_price'];
                        }, $cart); // closing array_map function
                    endforeach;
                ?>
            </div>
            <!-- subtotal section-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">&#8373;<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>
            </div>
            <!-- !subtotal section-->
        </div>
        <!--  !shopping cart items   -->
    </div>
</section>
<!-- !Shopping cart section  -->
<?php
include "recent-post.php";
include "footer.php";
?>