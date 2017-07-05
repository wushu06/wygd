jQuery(document).ready(function($) {

 	/* Slick */
	$('.carousel').slick({
        nextArrow: '<a type="button" class="custom-next">NEXT</a>',
        prevArrow: '<a type="button" class="custom-prev">PREV</a>',
    });

    /* Mobile Menu */ 
      // Show the mobile menu when open button is clicked
	$('.menu-button').click( function() {
		$(this).toggleClass( 'button-open' );

		$( '.mobile-nav' ).toggleClass( 'menu-active' );
	});
   	


});