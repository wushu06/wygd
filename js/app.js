jQuery(document).ready(function($) {


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

    /* Change wording and position of call button  */
   
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

    /* toggle class for single garage door */
     $(window).on('load resize', function(){
      if ($(window).width() <= 991 ){  
        $('#removeCol').removeClass('col');
        $('#removeCol-sec').removeClass('col-sec');      
  
      } else {
         $('#removeCol').addClass('col');
        $('#removeCol-sec').addClass('col-sec'); 
      }
    });

    /* Masonry for gallery page */
    $('.grid').isotope({
      itemSelector: '.grid-item', 
      masonry: {
        columnWidth: 5
      }
    });

    /** Drop down menu making link active (check nav walker) **/
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
    $('#closeThree, .block').on('click', function(){
      $('.form-survey-two').fadeOut();
    });
      
    $( btn ).on('click', function(){
      $('#survey-mobile').fadeOut();
      $( form).fadeIn(  function() {
        
         $(close).on('click', function (){
             form.fadeOut();
             formTwo.hide();
             $('.form-survey-two').hide();
             $('#survey-mobile').fadeIn();

         });
      });
    });
  
    next.on('click', function(){
      form.fadeOut();
      formTwo.fadeIn();
    });

    /* Validate survey form */

    $('#gform_submit_button_8').on('click', function(e) {
    
      
   
      if (   $( '#input_8_7' ).val()  !== ""   && $( '#input_8_9').val() !== "" &&
             $( '#input_8_10' ).val() !== ""   && $( '#input_8_11').val() !== "" &&
             $( '#input_8_7' ).val()   !== ""   && $( '#input_8_9').val() !== ""  &&
             $( ' #input_8_12' ).val() !== ""   && $( '#input_8_13').val() !== "" ) 
          {
     
          $('#gform_8')[0].submit();  
         
          
                
          }else {
            e.preventDefault();
            $(":input").addClass('select-field');
           
        
          }
         

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
 
  /* init date picker */
  $('#pickTime').timepicker({ 'scrollDefault': 'now' });

  /* Register cookies  */
  $(window).on('load' , function () {
        var d = $.cookie('date');
        var t = $.cookie('time');
        var n = $.cookie('name');
 
    $('#message').html('Name: ' + n + '<br>'+' Date: ' + d + ' at: ' + t) ;
    $(window).on('click', function () {
        var date = $('#input_6_9').val();
        var time = $( '#pickTime').val();
        var name = $('#input_8_7').val();
        $.cookie('date', date , { expires: 7, path: '/' });
        $.cookie('time', time , { expires: 7, path: '/' });
        $.cookie('name', name , { expires: 7, path: '/' });
        
        
        

    });



});




                       



});
