<!--- STARTING OF HEADER--->
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
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Products</a>
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
<!-- ENDING OF HEADER - ---->

<?php 
include 'product-category.php';
include 'recent-post.php';
?>
<!-- banner adds----->
        <section id="banner-add">
          <div class="container py-5 text-center">
            <img src="assets/img/adds/add1.jpg" class="img-fluid">
            <img src="assets/img/adds/add3.jpg" style="width: 280px;" class="img-fluid">
            <img src="assets/img/adds/add2.jpg" style="width: 280px;" class="img-fluid">
          </div>
        </section>
<?php
include 'footer.php';
?>