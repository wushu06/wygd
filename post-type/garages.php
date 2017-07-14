<section class="block block-inspiration">
    
<h1>Garages</h1>#Redirect 301 /accessible-home-design/ http://www.motionspot.co.uk/accessible-home-design
    <?php
    $number_of_results = ( theme( 'number_of_results' ) ) ? theme( 'number_of_results' ) : -1;

    // Get the latest news and projects
    $args = array(
        // Only get published posts..
        'post_type'              => array( 'garage' ),
        'post_status'            => array( 'publish' ),

        // Get the number of posts specified for the block
        'posts_per_page'         => $number_of_results,

        // Get the latest results
        'order'                  => 'DESC',
        'orderby'                => 'rand',
    );

    // The Query
    $garage = new WP_Query( $args );

 

    // The Loop
    if ( $garage->have_posts() ) {
        ?>
        <div class="row row-masonry inspiration__wrapper js-masonry">
            <div class="xlarge-3 large-4 medium-8 small-12 columns end columns--sizer"></div>

            <?php
            while ( $garage->have_posts() ) {
                $garage>the_post();

                
            }
            ?>
        </div>
    <?php } ?>
</section>