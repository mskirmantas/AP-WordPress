"use strict";


$('[data-fancybox="gallery"]').fancybox({
	// Options will go here
	    loop: true

});


$(function(){
    $('.navigation').navpoints({
        speed: 1000

    });
});


$(document).ready(function(){
  $(".owl-carousel").owlCarousel({

        loop:true,
        items:1,
        responsiveClass:true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause:true,
    
        responsive:{
        0:{
            items:1,
            
        },
        600:{
            items:1,
            
        },
        1000:{
            items:1,
            loop:true
        }
        
    }});
});  


jQuery('document').ready( function($) {
    $('.gallery-filter li').on('click', function() {
        $('.gallery-filter li').removeClass('active');
        $(this).addClass('active');
        filter = $(this).attr('gallery-filter');

        $('.img-block').each( function() {
            if (filter == 'all') {
                $(this).fadeIn(); 
            } else {
                $(this).hide();
                if ($(this).attr('filter-category') == filter) {
                    $(this).fadeIn();
                }
            }
        });
    });
});
