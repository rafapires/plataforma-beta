<?php
/** header.php
 *
 * Displays all of the <head> section and everything up till </header>
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0 - 05.02.2012
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		
		<?php tha_head_top(); ?>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<title><?php wp_title( '&laquo;', true, 'right' ); ?></title>
		
		<?php tha_head_bottom(); ?>
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php bloginfo(template_url) ?>/plataforma.css" type="text/css" media="all">
	</head>
	
	<body <?php body_class(); ?>>
		<div class="container">
			<div id="page" class="hfeed row">
				<?php tha_header_before(); ?>
				<header id="branding" role="banner" class="span12">
					<?php tha_header_top();
					wp_nav_menu( array(
						'container'			=>	'nav',
						'container_class'	=>	'subnav clearfix',
						'theme_location'	=>	'header-menu',
						'menu_class'		=>	'nav nav-pills pull-right',
						'depth'				=>	3,
						'fallback_cb'		=>	false,
						'walker'			=>	new The_Bootstrap_Nav_Walker,
					) ); ?>
					<div class="row">					
						<div id="cdi-logo" class="span9">						
							<h1 id="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
									<!--span><?php bloginfo( 'name' ); ?></span-->
									<img src="<?php bloginfo('template_directory'); ?>/img/cdi_logo.png" alt="Logotipo da cdi" height=162 width=432>
								</a>
							</h1>
						</div>
						
						<div class="cdi-redes-sociais span3">
							<div class="row">
							<!--h2 id="site-description"><?php bloginfo( 'description' ); ?></h2-->
								<a target="_blank" href="<?php bloginfo(url); ?>/feed"><img class="pull-right" src="<?php bloginfo('template_directory'); ?>/img/rss.jpg" alt="Assine nosso RSS" height=38 width=38></a>
								<a target="_blank" href="http://www.youtube.com/user/redecdi"><img class="pull-right" src="<?php bloginfo('template_directory'); ?>/img/youtube.jpg" alt="Visite nosso canal no Youtube" height=38 width=38></a>
								<a target="_blank" href="https://twitter.com/ongCDI"><img class="pull-right" src="<?php bloginfo('template_directory'); ?>/img/twitter.jpg" alt="Visite nosso Twitter" height=38 width=38></a>
								<a target="_blank" href="http://www.facebook.com/pageongcdi"><img class="pull-right" src="<?php bloginfo('template_directory'); ?>/img/facebook.jpg" alt="Visite nosso Facebook" height=38 width=38></a>
							</div>

						</div>
					</div>
					<?php if ( get_header_image() ) : ?>
					<a id="header-image" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
					</a>
					<?php endif; // if ( get_header_image() ) ?>

					<nav id="access" role="navigation">
						<h3 class="assistive-text"><?php _e( 'Main menu', 'the-bootstrap' ); ?></h3>
						<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'the-bootstrap' ); ?>"><?php _e( 'Skip to primary content', 'the-bootstrap' ); ?></a></div>
						<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'the-bootstrap' ); ?>"><?php _e( 'Skip to secondary content', 'the-bootstrap' ); ?></a></div>
						<?php if ( has_nav_menu( 'primary' ) OR the_bootstrap_options()->navbar_site_name OR the_bootstrap_options()->navbar_searchform ) : ?>
						<div <?php the_bootstrap_navbar_class(); ?>>
							<div class="navbar-inner">
								<div class="container">
									<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
									<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</a>
									<?php if ( the_bootstrap_options()->navbar_site_name ) : ?>
									<span class="brand"><?php bloginfo( 'name' ); ?></span>
									<?php endif;?>
									<div class="nav-collapse">
										<?php wp_nav_menu( array(
											'theme_location'	=>	'primary',
											'menu_class'		=>	'nav',
											'depth'				=>	3,
											'fallback_cb'		=>	false,
											'walker'			=>	new The_Bootstrap_Nav_Walker,
										) ); 
										if ( the_bootstrap_options()->navbar_searchform ) {
											the_bootstrap_navbar_searchform();
										} ?>
								    </div>
								</div>
							</div>
						</div>
						<?php endif; ?>
					</nav><!-- #access -->
					<?php if ( function_exists( 'yoast_breadcrumb' ) ) {
						yoast_breadcrumb( '<nav id="breadcrumb" class="breadcrumb">', '</nav>' );
					}
					tha_header_bottom(); ?>
				</header><!-- #branding --><?php
				tha_header_after();
				

/* End of file header.php */
/* Location: ./wp-content/themes/the-bootstrap/header.php */
