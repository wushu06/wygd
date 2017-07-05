<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js"> <![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta name="theme-color" content="#000000">
    <meta name="msapplication-navbutton-color" content="#000000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000000">

	<title><?php wp_title(); ?></title>

    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" />

    <link href="https://fonts.googleapis.com/css?family=Ek+Mukta:300,400|Josefin+Sans:400,400i,600,700" rel="stylesheet">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  
   

<header class="header">
     <!-- Static navbar -->
        <nav class="navbar navbar-default">
        <div class="menu-button">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        </div>

        <div class="mobile-nav ">
                <?php 
                      $arg = array(
                              'menu' => 'top-nav',
                              'menu_class' => 'nav navbar-nav',
                              'container' => 'false'

                          );
                        wp_nav_menu($arg);

                  ?>   
        </div>






        <div >
          <div class="navbar-header">
            
            <a href="<?php echo site_url( '/' ); ?>" title="Home">
            <img src="<?php  echo THEME_DIR; ?>/images/200x50_log.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" title="Home"  />
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse pull-right">
                   <?php 
                    $arg = array(
                            'menu' => 'top-nav',
                            'menu_class' => 'nav navbar-nav',
                            'container' => 'false'

                        );
                      wp_nav_menu($arg);

                ?>
                       
           
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
 </header>
