jQuery(document).ready(function($) {

  /* trigger flowType */ 
 //$("body").fitText(1.2, { minFontSize: '12px', maxFontSize: '30px' });
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
    $('#survey-mobile').fadeToggle();
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
   
    $(window).on('load resize', function(){
      if ($(window).width() <= 1040){  
        $('.button-call').html('BOOK A <strong> FREE </strong> SITE SURVEY | <strong> 01924 849 579 </strong>' ).css({
              'top': '60px',
              'left' : '0',
              'width' : '100%'
        });
      } else {
          $('.button-call').html('FOR SAME DAY REAPAIRS CALL <strong> 01924 849 579 </strong> | ').css({
              'bottom': '0px',
              'width' : 'auto',
              'top' : 'auto'
        });;

      }
    });
     $(window).on('load resize', function(){
      if ($(window).width() <= 991 ){  
        $('#removeCol').removeClass('col');
        $('#removeCol-sec').removeClass('col-sec');      
  
      } else {
         $('#removeCol').addClass('col');
        $('#removeCol-sec').addClass('col-sec'); 
      }
    });

    /* element takes window height */
    /*$.fn.fullHeight = function () {
        $(this).height($(window).height());

    };
    $('.block').fullHeight();*/

    /* */

   /* var $grid = $( '.js-masonry' ).imagesLoaded( function() {
        // init Isotope after all images have loaded
        $grid.isotope({
            itemSelector: '.columns',
            masonry: {
                columnWidth: '.columns--sizer'
            }
        });
    });*/
    $('.grid').isotope({
      itemSelector: '.grid-item', 
      masonry: {
        columnWidth: 100
      }
    });
    $('.navbar .dropdown').hover(function() {
$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

}, function() {
$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

});

$('.navbar .dropdown > a').click(function(){
location.href = this.href;
});

    /* Show the survey form */

    var btn = $('#btn-survey, #survey-mobile');
    var form = $('#survey-form');
    var formTwo = $('#survey-form-two');
    var close = $('.block, #close, #closeTwo, #closeThree');
    var next = $('#next-form');

    /*btn.on('click', function(){
      form.fadeIn();
    

      close.on('click', function(){
      form.fadeOut();
      formTwo.hide();
      
      //$('.form-survey-two').css('display', 'none');

    })
    });*/
    
    $( btn ).on('click', function(){
      $('#survey-mobile').fadeOut();
      $( form).fadeIn(  function() {
        
         $(close).on('click', function (){
             form.fadeOut();
             formTwo.hide();
             $('#survey-mobile').fadeIn();

         });
      });
    });
  
    next.on('click', function(){
      form.fadeOut();
      formTwo.fadeIn();
    });
    /* Validate survey form */

    $('#gform_8').on('submit', function(e) {
      var input1 = ('#input_8_7'),
          input2 = ('#input_8_9');
       
     
      if (   $( input1 ).val() !== ""   && $( input2 ).val() !== "" 
         ) {
       alert('not');
        $('#gform_8')[0].submit();  
                
          }else {
            e.preventDefault();
            $(input1).addClass('select-field');
            alert('is');
        
          }
         

      });


    $("#gform_submit_button_8").click(function(event){
  var form_data=$("#contact").serializeArray();
  var error_free=true;
  for (var input in form_data){
    var element=$("#contact_"+form_data[input]['name']);
    var valid=element.hasClass("valid");
    var error_element=$("span", element.parent());
    if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
    else{error_element.removeClass("error_show").addClass("error");}
  }
  if (!error_free){
    event.preventDefault(); 
  }
  else{
    alert('No errors: Form will be submitted');
  }
});


    
      //var input = ('#input_8_7, #input_8_9, #input_8_10, #input_8_11, #input_8_12, #input_8_13');

     /*$(input).on('blur focus', function(){
            if($(this).val() === '') {
             
                $(this).css({
                'background': '#fff'
              });
            }else {
            
                $(this).css({
                'background': '#d2eaea'
              });
            }
          })*/
    

  

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
