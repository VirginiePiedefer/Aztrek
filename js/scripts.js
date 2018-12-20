$(document).ready(function () {


// ===========MENU BURGER=========

	$(".nav-toggle")
		.sidr({
			source: ".menu-1",
			displace: false,
		})

	$('body').click(function () {
		$.sidr('close', 'sidr');

	});


	// ===========SLIDER=========

    $('.owl-carousel-1').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		autoplay:true,
		autoplayTimeout:5000,
		items: 1,
	
	})

	$('.owl-carousel-2').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		autoplay:true,
		autoplayTimeout:5000,
		items: 2,

		
	
	})

	



});
 

		