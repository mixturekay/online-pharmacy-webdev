<?php
include_once 'database/new_database.php';
if(isset($_POST['submit']))
{  
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];
   $sql = "INSERT INTO contact (name,email,phone_number,message)
   VALUES ('$name','$email','$phone','$message')";
   if (mysqli_query($con, $sql)) {
    echo "<script>alert('Thanks! Message sent successfully')</script>";
   } else {
     echo "<script>alert('whoops! message failed.')</script>";
   }
   
}
?>

<!-- STARTING OF HEADER ---->
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
        <style>
          #error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
} 
        </style>
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
       <li class="nav-item">
        <a class="nav-link " href="doctors.php">Doctors</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link " href="#">Contact</a>
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

<!-- ENDING OF HEADER----->

<!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading ">Use our Contact form for a request on a drug and consultation.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate" action="" method="POST">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" name="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" name="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-danger  btn-xl text-uppercase mb-4" id="sendMessageButton" type="submit" name="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section><br><br>



<?php
include 'recent-post.php';
include 'footer.php';
?>