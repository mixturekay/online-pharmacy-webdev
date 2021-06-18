$(document).ready(function() {
    //banner-owl-carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items:1,
        loop: true,
        autoplay: true,
        autoplaySpeed:1000,
        smartSpeed:1500,
        autoplayHoverPause:true
    });
    // recent-post carousel
    $("#recent-post .owl-carousel").owlCarousel({
        loop:true,
        nav: true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }

    });


//customer testimonials
$('#testi-monial .owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    dots:true,
    center:true,
    nav:false,
    autoplay: true,
    autoplayTimeout:8500,
    smartSpeed:450,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});


    // isotope filters //

var $grid = $(".grid").isotope({
    itemSelector:'.grid-item',
    layoutMood:'fitRows'
});
// filter items when clicked//
$(".button-group").on("click","button" ,function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({filter:filterValue});
})


});



$(document).ready(function() {
    $("form").submit(function(event) {
        event.preventDefault();
        var name  = $("#register-name").val();
        var email  = $("#register-email").val();
        var pass = $("#register-pass").val();
        var cpass  = $("#register-cpass").val();
        var submit  = $("#register-submit").val();
        $(".form-message").load("register.php",{
            name:name,
            email:email,
            pass :pass,
            cpass: cpass,
            submit:submit

        });
    });
});














