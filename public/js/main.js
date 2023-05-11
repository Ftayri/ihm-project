(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: false,
        loop: true,
        nav: true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });

    
})(jQuery);

//==js for login and sign up
var loginLink = $(".loginLink");
var signupLink = $(".signupLink");
var loginct = $( "#login-content" );
var reviewct = $("#review-content");
var signupct= $("#signup-content");
var loginWrap = $(".login-wrapper");
var overlay = $(".overlay");
var btnReview = $("#btnReview");
loginWrap.each( function(){
    $(this).wrap('<div class="overlay"></div>')
});
//pop up for login form
loginLink.on('click', function(event){
    event.preventDefault();
    var overlay = $(".overlay");
    overlay.removeClass("openform");
    loginct.parents(overlay).addClass("openform");
    $(document).on('click', function(e){
    var target = $(e.target);
    if ($(target).hasClass("overlay")){
            $(target).find(loginct).each( function(){
                $(this).removeClass("openform");
            });
            setTimeout( function(){
                $(target).removeClass("openform");
            }, 350);
        }	
    });
});
//pop up for signup form
signupLink.on('click', function(event){
    event.preventDefault();
    var overlay = $(".overlay");
    overlay.removeClass("openform");
    signupct.parents(overlay).addClass("openform");
    $(document).on('click', function(e){
    var target = $(e.target);
    if ($(target).hasClass("overlay")){
            $(target).find(signupct).each( function(){
                $(this).removeClass("openform");
            });
            setTimeout( function(){
                $(target).removeClass("openform");
            }, 350);
        }	
    });
});

