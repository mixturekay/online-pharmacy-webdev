<!--- STARTING OF HEADER --- >

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
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Services</a>
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
<!--- ENDING OF HEADER---->

<section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Below are the services rendered by our noble Pharmacy.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-prescription fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Prescriptions</h4>
                        <p class="text-muted">We always ensure that the right prescription is been offered to our clients. We provide you with the best and nothing less</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop-medical fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Medication Customization</h4>
                        <p class="text-muted">Customization of your drugs are our priorty. We ensure you have a good life</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-notes-medical fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Testing & Monitoring</h4>
                        <p class="text-muted">We test you and monitor your diets as well. We are euiped with advanced devices to test and provide an accurate result.</p>
                    </div>
                </div>
                  <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-capsules fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Vaccination</h4>
                        <p class="text-muted">Vaccination is also one of the services being renderd. We are stocked with antibiotics which helps to provide a desired vaccination on our patient.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-people-arrows fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Wellness Consultations</h4>
                        <p class="text-muted">We have a well trained health practioners who provides you with the best consultaton</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-baby fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Family Planning</h4>
                        <p class="text-muted">We help you on how to plan your family for a better well being.</p>
                    </div>
                </div>
            </div>
        </section>

<?php
include 'recent-post.php';
include 'footer.php';
?>