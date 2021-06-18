<?php
//include header file 
include ('header.php'); 
 /*  include cart items if it is not empty */
     count($product->getData('cart')) ? include ('shopping-cart.php') :  include ('not_Found/cart_notfound.php');
    /*  include cart items if it is not empty */

//include whishlist 
include ('whishlist.php');

// include recent post
include ('recent-post.php');

//include the footer file
include ('footer.php');
?>