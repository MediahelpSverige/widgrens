<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="images/icon.png">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- plugins css -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/plugins/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_url'); ?>/css/custom.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet">
    <!-- developer use only -->
    <link href="<?php bloginfo('template_url'); ?>/css/developer.css" rel="stylesheet">

	<!-- jquery.js -->
	<script src="<?php bloginfo('template_url'); ?>/js/plugins/jquery-1.12.3.min.js"></script>
	<!-- jquery-mobile.js for mobile -->
	<!-- <script src="js/plugins/jquery.mobile-1.4.5.min.js"></script> -->
	<!-- Bootstrap core JavaScript-->
    <script src="<?php bloginfo('template_url'); ?>/js/plugins/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/plugins/owl.carousel.min.js"></script>
    <!-- Placeholders.js -->
    <script src="<?php bloginfo('template_url'); ?>/js/plugins/Placeholders.min.js"></script>
    <!-- custom js that is used for initialized plugins and jquery function -->
    <script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>

		<script src="https://use.typekit.net/obm0dqb.js"></script>
<script>try{Typekit.load({ async: false });}catch(e){}</script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script> var ISOLDIE = false; </script>
	<script>
	     if(ISOLDIE) {
	          alert("Your browser currently does not support this feature. Please upgrade.");
	          window.location = 'http://www.microsoft.com/en-us/download/internet-explorer-9-details.aspx';
	     }
	</script>
	<?php wp_head(); ?>
</head>

  <body>
  	<header class="fixed">
         <div class="navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <?php if ( get_header_image() ) : ?>
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="Home">
                        <img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                    </a>
				<?php endif; ?>
                </div>
                <div class="clearfix hidden-des">
                    <div class="socialList">
                            <ul>
                                <li><a href="javascript:void(0)"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                </div>
                <div class="collapse navbar-collapse">
                    <div class="social-listCol">
                        <div class="socialList clearfix mobH">
                            <ul>
                                <li><a href="<?php the_field('gmail','24'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                <li><a href="<?php the_field('phone','24'); ?>"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                                <li><a href="<?php the_field('facebook','24'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
										
                  <!-- <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">START</a></li>
                    <li><a href="#">TJÄNSTER</a></li>
                    <li><a href="#">REFERENSER </a></li>
                    <li><a href="#">OM WIDGRENS</a></li>
                    <li><a href="#"> PERSONAL</a></li>
                    <li><a href="#">KONTAKT</a></li>
                  </ul> -->
                  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right') ); ?>
                </div><!--/.nav-collapse -->
            </div><!-- /.container -->
        </div> <!-- /.navbar -->
    </header>
