/* =====================================
	Elena Jquery Activation
========================================*/  
(function ($) {
	"use strict";
    $(document).ready(function(){
		
		// Sticky JS
		jQuery(window).on('scroll', function() {
			if ($(this).scrollTop() > 1) {
				$('.header').addClass("sticky");
			} else {
				$('.header').removeClass("sticky");
			}
		});
			
		// 	Mobile Menu JS
		$('.menu').slicknav({
			prependTo:".mobile-nav",
			label:"Menu"
		});
		
		// 	Search JS
		$('.search-area a').on( "click", function(){
			$('.search-form, .search-area').toggleClass('active');
		});		
		
		// 	Nice Select JS
		$('select').niceSelect();
		
		// 	CounterUP JS
		$('.count').counterUp({
			time: 1000
		});
		
		// Hero Carousel JS
		$(".hero-slider").owlCarousel({
			loop:true,
			autoplay:true,
			smartSpeed: 500,
			autoplayTimeout:3000,
			margin:0,
			nav:false,
			dots:true,
			items: 1,
		});		
		
		// Testimonial Carousel JS
		$(".testimonial-carousel").owlCarousel({
			loop:true,
			autoplay:true,
			smartSpeed: 600,
			autoplayTimeout:3500,
			margin:0,
			nav:true,
			dots:false,
			items: 1,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		});		
		
		// Portfolio Slider JS	
		$(".portfolio-slider").owlCarousel({
			loop:true,
			autoplay:true,
			smartSpeed: 600,
			autoplayTimeout:3500,
			margin:30,
			nav:true,
			dots:false,
			items: 5,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					items:1,
				},
				480: {
					items:2,
				},
				768: {
					items:3,
				},
				1170: {
					items:5,
				},
			}
		});		
		
		// Portfolio Slider JS	
		$(".portfolio-gallery").owlCarousel({
			loop:true,
			autoplay:false,
			smartSpeed: 600,
			margin:0,
			nav:true,
			dots:false,
			items:1,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		});		
		
		// Portfolio Slider JS	
		$(".service-gallery").owlCarousel({
			loop:true,
			autoplay:false,
			smartSpeed: 600,
			margin:0,
			nav:true,
			dots:false,
			items: 1,
			navText: ['<i class="fa fa-angle-up" aria-hidden="true"></i>', '<i class="fa fa-angle-down" aria-hidden="true"></i>'],
		});		
		
		// Clients JS
		$(".clients-slider").owlCarousel({
			loop:true,
			autoplay:true,
			smartSpeed: 600,
			autoplayTimeout:2500,
			nav:false,
			dots:false,
			items: 6,
			margin:30,
			responsive:{
				300: {
					items:2,
				},
				480: {
					items:2,
				},
				768: {
					items:4,
				},
				1170: {
					items:6,
				},
			}
		});	
		
		/* Project Slider Grid */
		$('#portfolio-grid').cubeportfolio({
			filters: '#portfolio-nav',
			defaultFilter: '*',
			layoutMode: 'grid',
			animationType: 'quicksand',
			gridAdjustment: 'responsive',
			gapHorizontal: 30,
			gapVertical: 30,
			mediaQueries: [{
				width: 1100,
				cols: 3,
			},{
				width: 768,
				cols: 2,
			}, {
				width: 480,
				cols: 2,
			},{
				width: 0,
				cols: 1,
			}],
			caption: 'overlayBottomPush',
			displayType: 'sequentially',
			displayTypeSpeed: 80,

		});
		
		// Video Popup JS
		$('.video-popup').magnificPopup({
			type: 'iframe',
			removalDelay: 300,
			mainClass: 'mfp-fade'
		});
	
		
		// Parallax JS
		 $(window).stellar({
            responsive: true,
            positionProperty: 'position',
            horizontalScrolling: false
        });
		
		// Wow JS	
		var window_width = $(window).width();   
			if(window_width > 767){
            new WOW().init();
		}
    });
		/*====================================
			Scrool Up JS
		======================================*/ 	
		$.scrollUp({
			scrollName: 'scrollUp',      // Element ID
			scrollDistance: 300,         // Distance from top/bottom before showing element (px)
			scrollFrom: 'top',           // 'top' or 'bottom'
			scrollSpeed: 1000,            // Speed back to top (ms)
			animationSpeed: 200,         // Animation speed (ms)
			scrollTrigger: false,        // Set a custom triggering element. Can be an HTML string or jQuery object
			scrollTarget: false,         // Set a custom target element for scrolling to. Can be element or number
			scrollText: ["<i class='fa fa-rocket'></i>"], // Text for element, can contain HTML
			scrollTitle: false,          // Set a custom <a> title if required.
			scrollImg: false,            // Set true to use image
			activeOverlay: false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
			zIndex: 2147483647           // Z-Index for the overlay
		});
		
		// Preloader JS
		$(window).on('load', function() {
				$('.preloader').fadeOut('slow', function(){
				$(this).remove();
			});
		});
})(jQuery);	