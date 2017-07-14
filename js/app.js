jQuery(document).ready(function($) {

  /* trigger flowType */ 
 //$("body").fitText(1.2, { minFontSize: '12px', maxFontSize: '24px' });
 	/* Slick */
	/*$('.carousel').slick({
        nextArrow: '<a type="button" class="custom-next">NEXT</a>',
        prevArrow: '<a type="button" class="custom-prev">PREV</a>'
    });*/

    /* Mobile Menu */ 
      // Show the mobile menu when open button is clicked
	$('.menu-button').click( function() {
		$(this).toggleClass( 'button-open' );

		$( '.mobile-nav' ).toggleClass( 'menu-active' );
	});

    /* center element */
    $.fn.centerMe = function ($position) {
      
        $(this).css({
            'position' : $position,
            'left' : ($(window).width() - $(this).width()) / 2
            //'top':  ($(window).height() - $(this).height()) / 2
        });

    };
    
    $(window).on('load resize', function(){
      $('.button-call').centerMe('fixed');

    });
    /* element takes window height */
    /*$.fn.fullHeight = function () {
        $(this).height($(window).height());

    };
    $('.block').fullHeight();*/

    /* */

    var $grid = $( '.js-masonry' ).imagesLoaded( function() {
        // init Isotope after all images have loaded
        $grid.isotope({
            itemSelector: '.columns',
            masonry: {
                columnWidth: '.columns--sizer'
            }
        });
    });

    /* Show the survey form */

    var btn = $('#btn-survey');
    var form = $('#survey-form');
    var formTwo = $('#survey-form-two');
    var close = $('#close, #closeTwo, #closeThree');
    var next = $('#next-form');

    btn.on('click', function(){
      form.fadeIn();

      close.on('click', function(){
      form.fadeOut();
      formTwo.hide();
      alert('click');
      //$('.form-survey-two').css('display', 'none');

    })
    });
  
    next.on('click', function(){
      form.fadeOut();
      formTwo.fadeIn();
    });
    

  

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
  
  $(window).on('load' , function () {

   /* var newdate = $('#newDate');
    // newdate.attr('placeholder',$.cookie('name'));
    newdate.attr('placeholder', $.cookie('name')) ;*/

    //console.log(newdate);
    $('#newDate').on('keyup', function () {
        var date = $(this).val();
        $.cookie('name', date , { expires: 7, path: '/' });
        console.log($.cookie('name'));


    });



});




                       



});
