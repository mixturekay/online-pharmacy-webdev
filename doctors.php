<!-- STARTING OF HEADER--->
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
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</span></a>
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
       <li class="nav-item active">
        <a class="nav-link " href="#">Doctors</a>
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

<!-- ENDING OF HEADER--->

 <!-- Team-->
        <section class="page-section bg-light" id="doctors">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase pt-3">Our Amazing Health Workers </h2>
                    <h3 class="section-subheading text-muted">Below are our certified health practioners.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" />
                            <h4>Brakay</h4>
                            <p class="text-muted">Doctor</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="" />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Nurse</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="" />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Counseller</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-danger">Contact any of our Health workers via their social media links Above.</p></div>
                </div>
            </div>
        </section><br>




<?php
include 'footer.php';
?>