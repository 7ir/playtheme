<?php wp_footer(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="/wp-content/themes/playtheme/owlcarousel/owl.carousel.min.js"></script>
<script>
jQuery(document).ready(function() { // this waits until the document is fully loaded

    /* WPForms toggle form fields */
    var wpf_f_c = jQuery('.wpforms-field-container');
    wpf_f_c.click(function(){
      wpf_f_c.addClass('init-nlform-toggle');
    });


    /* Owl Carousels */
    var owl01 = jQuery('#owl-carousel-01');
    jQuery('#owl-carousel-01').owlCarousel({
        navigation : true,
        autoplay:false,
        smartSpeed:500,
        loop:true,
        margin:10,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        nav:false,
        dots:false,
        mouseDrag:false,
        touchDrag:false,
        pullDrag:false,
        responsive:{
          0:{
              items:1
          },
        },
    })
    setTimeout(function(){
      var intervalID = window.setInterval(myCallback, 5000);
      function myCallback() {
          owl01.trigger( 'next.owl.carousel');
      }
    },1000);


    var owl02 = jQuery('#owl-carousel-02');
    jQuery('#owl-carousel-02').owlCarousel({
        callbacks: true,
        smartSpeed:500,
        loop:true,
        margin:10,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        nav:false,
        dots:false,
        mouseDrag:false,
        touchDrag:false,
        pullDrag:false,
        responsive:{
          0:{
              items:1
          },
        },
    })
    setTimeout(function(){
      var intervalID = window.setInterval(myCallback, 5000);
      function myCallback() {
          owl02.trigger( 'next.owl.carousel');
      }
    },2000);


    var owl03 = jQuery('#owl-carousel-03');
    jQuery('#owl-carousel-03').owlCarousel({
        callbacks: true,
        smartSpeed:500,
        loop:true,
        margin:10,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        nav:false,
        dots:false,
        mouseDrag:false,
        touchDrag:false,
        pullDrag:false,
        responsive:{
          0:{
              items:1
          },
        },
    })
    setTimeout(function(){
      var intervalID = window.setInterval(myCallback, 5000);
      function myCallback() {
          owl03.trigger( 'next.owl.carousel');
      }
    },3000);


    var owl04 = jQuery('#owl-carousel-04');
    jQuery('#owl-carousel-04').owlCarousel({
        callbacks: true,
        smartSpeed:500,
        loop:true,
        margin:10,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        nav:false,
        dots:false,
        mouseDrag:false,
        touchDrag:false,
        pullDrag:false,
        responsive:{
          0:{
              items:1
          },
        },
    })
    setTimeout(function(){
      var intervalID = window.setInterval(myCallback, 5000);
      function myCallback() {
          owl04.trigger( 'next.owl.carousel');
      }
    },4000);


});
    </script>

  </body>
</html>
