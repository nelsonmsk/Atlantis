

/*============================================== /*
		PreLoader
/*============================================== */

$(window).load(function() {
	'use strict';
	$('.loading-icon').delay(500).fadeOut();
	$('#preloader').delay(800).fadeOut('slow');
	
});

/* Change navbar class on scroll */
$(".wrapper").waypoint(function() {
    $(".navbar").toggleClass("js-navbar-top");
    $(".navbar.navbar-expand-lg").toggleClass("navbar-transparent navbar-bg");
    return false;
}, { offset: "-20px" });



/*--------------------------------------
    Testimonial Carousel
--------------------------------------*/
$("#testimonial-carousel").owlCarousel({
    singleItem: false,
    slideSpeed: 200,
    autoPlay: 3000,
	items : 2,	
        itemsDesktop : [1199,2],		
        itemsDesktopSmall : [979,2],
		itemsTablet :	[768,1],	
    stopOnHover: true,
    navigation: true,
    navigationText: ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
    pagination: false
 });
 

/* ==============================================
Resize Function For Full width image text column
=============================================== */
var resizeBackground = function() {

			$( ' .two-cols-description-image > img' ).each(function( i, el ) {

				var $el       = $( el ),
					$section  = $el.parent(),
					min_w     = 350,
					el_w      = el.tagName == 'VIDEO' ? el.videoWidth : el.naturalWidth,
					el_h      = el.tagName == 'VIDEO' ? el.videoHeight : el.naturalHeight,
					section_w = $section.outerWidth(),
					section_h = $section.outerHeight(),
					scale_w   = section_w / el_w,
					scale_h   = section_h / el_h,
					scale     = scale_w > scale_h ? scale_w : scale_h,
					new_el_w, new_el_h, offet_top, offet_left;

				if ( scale * el_w < min_w ) {
					scale = min_w / el_w;
				}

				new_el_w = scale * el_w;
				new_el_h = scale * el_h;
				offet_left = ( new_el_w - section_w ) / 2 * -1;
				offet_top  = ( new_el_h - section_h ) / 2 * -1;

				$el.css( 'width', new_el_w );
				$el.css( 'height', new_el_h );
				$el.css( 'marginTop', offet_top );
				$el.css( 'marginLeft', offet_left );
			});

		};

		$(document).ready(function() {
			resizeBackground();
		});
		
        $(window).load(function() {
           resizeBackground();
        });
        
        $( window ).resize(function() {
          resizeBackground();
       });


/*==============================================/*
		 Video popup, Gallery
/*==============================================*/

//For video Section
$('.video-pop-up').magnificPopup({	
    type: 'iframe',
  });


/* ==============================================
        Owl Carousel
=============================================== */

		 $("#carousel-our-clients").owlCarousel({
		stopOnHover: true,
        navigation: false,
		pagination:false,
        paginationSpeed: 1000,
        goToFirstSpeed: 3500,
		slideSpeed : 800,
        autoPlay: 3000,
        items : 5,
        itemsDesktop : [1199,5],
        itemsDesktopSmall : [979,3],
		itemsTablet :	[768,3],
		itemsMobile :	[479,2],

    });	
		
/* ====================================================================== */
/*	//Parallax using Stellar
/* ====================================================================== */	

  $(window).stellar({
        horizontalScrolling: false,
        responsive: true,
        scrollProperty: 'scroll',
        parallaxElements: false,
        horizontalOffset: 0,
        verticalOffset: 0
      });			
			

/* ==============================================
        Facts and figures Counters
=============================================== */
		
jQuery(document).ready(function($) {	
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
});


/*==============================================/*
    Slider
/*============================================== */
$(document).ready(function() {
	'use strict';
	  new Swiper('.project-details-slider', {
		speed: 400,
		loop: true,
		autoplay: {
		  delay: 5000,
		  disableOnInteraction: false
		},
		pagination: {
		  el: '.swiper-pagination',
		  type: 'bullets',
		  clickable: true
		}
	  });
});


	/* ==============================================
	A JQuery plugin for fluid width video embeds
	=============================================== */

   $('body').fitVids();

        /* ---------------------------------------------- /*
        * FULL SCREEN DIVS
        /* ---------------------------------------------- */
        
       $(document).ready(function() {
			$(".fl_scrn").css("width", $(window).width());
           $(".fl_scrn").css("height", $(window).height());
		});
        
         $( window ).resize(function() {
          $(".fl_scrn").css("width", $(window).width());
           $(".fl_scrn").css("height", $(window).height());
       });
	   
 		/* ---------------------------------------------- /*
		 * WOW ANIMATION
		/* ---------------------------------------------- */        
		var wow = new WOW({
			mobile: false
		});
		wow.init();
		  
		  
 		/* ---------------------------------------------- /*
		 * CONTACT MAP
		/* ---------------------------------------------- */  	
		
		// Initialize and add the map
		function initMap() {
		  // The location of Uluru
		  const uluru = { lat: -25.344, lng: 131.031 };
		  // The map, centered at Uluru
		  const map = new google.maps.Map(document.getElementById("map"), {
			zoom: 4,
			center: uluru,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		  });
		  // The marker, positioned at Uluru
		  const marker = new google.maps.Marker({
			position: uluru,
			map: map,
			title: 'click me'
		  });
		}

		$(window).initMap = initMap;		  
		  
		  
		/* ---------------------------------------------- /*
		 * Scroll top
		/* ---------------------------------------------- */

		$(window).scroll(function() {
			if ($(this).scrollTop() > 300) {
				$('.scroll-up').addClass('scroll-top-show');
			} else {
				$('.scroll-up').removeClass('scroll-top-show');
			}
		});

		$('a[href="#totop"]').on('click', function() {
			$('html, body').animate({ scrollTop: 0 }, 'slow');
			return false;
		});

/*==============================================/*
    Portfolio & Gallery isotope and filter
/*============================================== */ 

	/**
	* Easy selector helper function
	*/	
	const select = (el, all = false) => {
		el = el.trim()
		if (all) {
		  return [...document.querySelectorAll(el)]
		} else {
		  return document.querySelector(el)
		}
	}	
	/**
	* Easy event listener function
	*/
	const on = (type, el, listener, all = false) => {
		if (all) {
		  select(el, all).forEach(e => e.addEventListener(type, listener))
		} else {
		  select(el, all).addEventListener(type, listener)
		}
	}    
  
	let portfolioContainer = select('.portfolio-container');
	let galleryContainer = select('.gallery-container');
	
	if (portfolioContainer) {
		  let portfolioIsotope = new Isotope(portfolioContainer, {
			itemSelector: '.portfolio-item',
			layoutMode: 'fitRows'
		  });

		  let portfolioFilters = select('.button-group .button', true);

		  on('click', '.button-group .button', function(e) {
			e.preventDefault();
			portfolioFilters.forEach(function(el) {
			  el.classList.remove('is-checked');
			});
			this.classList.add('is-checked');

			portfolioIsotope.arrange({
			  filter: this.getAttribute('data-filter')
			});
		  }, true);
	  
	} else {
		
		  let galleryIsotope = new Isotope(galleryContainer, {
			itemSelector: '.gallery-item',
			layoutMode: 'fitRows'
		  });

		  let galleryFilters = select('.button-group .button', true);

		  on('click', '.button-group .button', function(e) {
			e.preventDefault();
			galleryFilters.forEach(function(el) {
			  el.classList.remove('is-checked');
			});
			this.classList.add('is-checked');

			galleryIsotope.arrange({
			  filter: this.getAttribute('data-filter')
			});
		  }, true);		
		
	}
 
  
