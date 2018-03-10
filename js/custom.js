$(function () {
        $("#banner_slider").owlCarousel({       
	    navigation : false, // Show next and prev buttons
	    slideSpeed : 300,
	    paginationSpeed : 400,
	    singleItem:true,
	    autoPlay: true,
	    pagination: true
       
	});
	
	$("#clients_slider").owlCarousel({
	    autoPlay: 3000, //Set AutoPlay to 3 seconds
	    pagination: false,	    
	    loop:true,
	    items : 4,
	    itemsDesktop : [1199,3],
	    itemsDesktopSmall : [979,3],
	    itemsMobile: [479,1]
	   
	});
	
	new WOW().init();




});