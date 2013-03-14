<!DOCTYPE html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<!--<meta name='robots' content='noindex,nofollow' />-->
 <script src="js/jquery.js" type="text/javascript"></script>
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" /><!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!-- CSS BENO -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/style-pages.css" />
<!-- DEFAULT STYLE -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body>

<div id="main">
	
	<div id="header">
		<div id="header-content">
			<div id="header-top">
				<div id="header-logo">
					<a href="http://www.cdi.org.br">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/cdi_logo.png"/>
					</a>
				</div>
				<div id="header-buttons" class="social">
						<!-- Social Media Buttons -->
						<ul>
							<li class="facebook">
								<a href="#"><strong>Facebook</strong></a>
							</li>
							<li class="twitter">
								<a href="#"><strong>Twitter</strong></a>
							</li>
							<li class="googleplus">
								<a href="#"><strong>Google+</strong></a>
							</li>
							<li class="youtube">
								<a href="#"><strong>YouTube</strong></a>
							</li>
							<li class="rss">
								<a href="#"><strong>RSS</strong></a>
							</li>
						</ul>
				</div>
				<div id="donate">
					<a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/donation.png"/></a>
				</div>
			</div>
		
					
		<!-- /.navbar -->
			<div id="header-menu">
				<?php wp_nav_menu( array(
						'theme_location'  => 'topmenu',
						'container'       => false, 
						'menu_id'      => 'top-nav', 
						'items_wrap'      => '<ul class="nav">%3$s</ul>') ); ?>
			   		
			   		
			</div>
		</div>
	<!--/div-->
	</div>
