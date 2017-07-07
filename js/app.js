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

  /* Show the survey form */

    var btn = $('#btn-survey');
    var form = $('#survey-form');
    var formTwo = $('#survey-form-two');
    var close = $('#close, #closeTwo');
    var next = $('#next-form');

    btn.on('click', function(){
      form.fadeIn();
      close.on('click', function(){
      form.fadeOut();
      formTwo.hide();
    })
    });
  
    next.on('click', function(){
      form.fadeOut();
      formTwo.fadeIn();
    });
    ;

  

  /* Book free survey date picker */


  $('#available').on('click', function(e){

       var next =$('#next-form'),
           date = $('#input_6_9'),
           time = $('#pickTime'),
           select = $('.select-date'),
           selectTime = $('.select-time');

           

      if(date.val() == '' || time.val() == ''){
        
         select.show();

           date.addClass('select-field');
           time.addClass('select-field');
      }else if(time.val() == ''){
        
      
       
      }else {
        //next.prop('disabled', false).attr('value', 'Next').css('background', '#d2eaea');
        $('#available').hide();
         select.hide();
         selectTime.hide();
         next.fadeIn();


      
        
      }
    

  });
  $('#pickTime').timepicker({ 'scrollDefault': 'now' });

                       



});
