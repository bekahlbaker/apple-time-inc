<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
  <?php
    if( ! is_home() ):
      wp_title( '|', true, 'right' );
    endif;
    bloginfo( 'name' );
  ?>
</title>
<?php wp_head(); ?>
</head>

<!--[if IE 9]>
 <body class="ie9">
<![endif]-->
<!--[if !IE]>-->
<body <?php body_class(); ?>>
<!--<![endif]-->

	<header class="header">
		<div class="top-bar navbar-fixed-top">
			<div class="container">
				<span class="phone-number pull-right">CALL US: 1-800-835-9477  </span>
			</div>
		</div>
		<nav class="navbar-fixed-top navbar">
			<div class="container">
				<div class="nav-logo pull-left">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/apple-time-logo.png" alt=""></a>
				</div>
				<!-- <form class="navbar-form pull-right hidden-xs hidden-sm" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="button">Submit</button>
		        </form> -->
		        <?php  echo do_shortcode('[yith_woocommerce_ajax_search]'); ?> 
				<div class="nav-menu hidden-xs" id="navbarCollapse">
					<?php
					$defaults = array(
						'theme_location' => 'main-nav',
						'container' => false,
						'menu_class' => 'nav navbar-nav',
						'depth' => 1
					);
					wp_nav_menu($defaults);
					?>	
				</div>
				
				<div class="nav-toggle-container">
					<i class="fa fa-bars fa-2x nav-toggle pull-right" id="navbarToggle"></i>
				</div>
			</div>
		</nav>
	</header>

	<div class="mobile-menu" id="mobileMenu">
		<a class="pull-left nav-logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/apple-time-logo.png" alt=""></a>
		<div class="nav-toggle-container pull-right">
			<i class="fa fa-close fa-2x nav-toggle close-button" id="closeButton"></i>
		</div>
		<div class="col-xs-12">
			<hr>
				<?php
					$defaults = array(
						'theme_location' => 'main-nav',
						'container' => false,
						'menu_class' => 'nav navbar-nav navbar-right',
						'depth' => 1
					);
					wp_nav_menu($defaults);
					?>
			<hr>
			<?php  echo do_shortcode('[yith_woocommerce_ajax_search]'); ?> 
			<span>CALL US: 1-800-835-9477</span>
		</div>
	</div>