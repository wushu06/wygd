<div class="block block-google-map" >
    <div class="container">
    	
	    	<div class="row">
	            <div class="col-md-12">
	            	

	            	<div class="block-google-body">
	            		<h5><?php echo theme( 'small_title' ); ?></h5>
	            	<h2><?php echo theme( 'title' ); ?></h2>
	            	<?php echo theme( 'body' ); ?>
	                </div>
	            </div>    
	        </div> 
	</div>                       
	                    

	       
	            
	            	

	            	


<div class="row">
	<div class='container block-filter-body'>
	<h5><?php echo theme( 'small_filter_title' ); ?></h5>	
	<h2 class="block-google-title text-center"><?php echo theme( 'filter_title' ); ?></h2>
    <?php // if( $images = theme( 'filter' ) ) { ?>
    <?php // foreach( $images as $i => $image ) { ?>
    	
    				       	<?php 
								for ($x = 0; $x < 3; $x++) { ?>
								<div class="col-md-4 col-xs-6">
					    			<div class="overlay" style=''></div>
							       <div class="block-google-filter">
							       	<div class="map"></div>
					               </div>
					                		        
							     </div>

							<?php } ?>	


                		        
		   
		      </div>
	     
	        
   	            	
	           
	                    
	        
	 <?php // } } ?>
	</div>
</div>



   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        
         <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"all","elementType":"all","stylers":[{"visibility":"on"},{"color":"#afd5d5"},{"weight":"2.04"}]},{"featureType":"all","elementType":"geometry","stylers":[{"color":"#63b5e5"}]},{"featureType":"all","elementType":"geometry.fill","stylers":[{"color":"#afd5d5"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"gamma":0.01},{"lightness":20},{"visibility":"on"},{"color":"#241d35"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"saturation":-31},{"lightness":-33},{"weight":2},{"gamma":0.8},{"visibility":"off"}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative.province","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#ff0000"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"lightness":30},{"saturation":30}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"saturation":20}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"lightness":20},{"saturation":-20}]},{"featureType":"road","elementType":"all","stylers":[{"color":"#afd5d5"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":10},{"saturation":-30}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#afd5d5"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"saturation":25},{"lightness":25}]},{"featureType":"water","elementType":"all","stylers":[{"lightness":-20}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.querySelectorAll("div.map");
                 for (i = 0; i < 3; i++) {
     				   var mapElements = mapElement[i];
     				   
   					
   					 
                

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElements, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Snazzy!'
                }); 
            	}
            }
        </script>



