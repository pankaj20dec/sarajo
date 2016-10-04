<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<header id="header" class="site-header" role="banner">
			  <nav class="navbar">
				  <div class="container">
					<div class="navbar-header">
					  <!--a class="navbar-brand clearfix" href="javascript:void(0)"><img src="images/logo.png" alt="logo" /></a-->
					  <?php echo the_custom_logo(); ?>
					  <button type="button " class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>		  
					</div>
					<div id="navbar" class="collapse navbar-collapse text-center">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<div id="site-header-menu" class="site-header-menu">
							<?php if ( has_nav_menu( 'primary' ) ) : ?>
								<nav id="site-navigation" class="main-navigation nav navbar-nav" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'sarajo' ); ?>">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'primary',
											'menu_class'     => 'primary-menu',
										 ) );
									?>
								</nav><!-- .main-navigation -->
							<?php endif; ?>
							</div><!-- .site-header-menu -->
						<?php endif; ?>
					</div><!--/.nav-collapse -->
				  </div>
			  </nav>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
