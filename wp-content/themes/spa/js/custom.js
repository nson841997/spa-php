$(function() {
	$('.doctor-carousel').owlCarousel({
	    rtl:true,
	    loop:true,
	    margin:10,
	    nav:false,
	    dot: false,
	    mouseDrag: true,
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
	})
	});