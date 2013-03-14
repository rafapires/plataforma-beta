<?php
/** footer.php
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0	- 05.02.2012
 */
?>
				
			</div><!-- #page -->
		</div><!-- .container -->
		<?php tha_footer_before(); ?>
				<footer id="colophon" role="contentinfo">
					<?php tha_footer_top(); ?>
					<div id="page-footer" class="clearfix container">
						<div class="span6">
							<span>MAPA DO SITE</span>
							<?php wp_nav_menu( array(
								'container'			=>	'nav',
								'container_class'	=>	'subnav',
								'theme_location'	=>	'footer-menu',
								'menu_class'		=>	'credits nav nav-pills pull-left',
								'depth'				=>	3,
								'fallback_cb'		=>	'the_bootstrap_credits',
								'walker'			=>	new The_Bootstrap_Nav_Walker,
							) );
							?>
						</div>
						<div id="footer-right" class="cdi-redes-sociais social span2 pull-right">
							<!-- Social Media Buttons -->
							
							<div class="row">CDI NAS REDES SOCIAIS</div>
							<div class="row">
								<a href="<?php bloginfo(url); ?>/feed"><img class="pull-right" src="<?php bloginfo('template_directory'); ?>/img/rss.jpg" alt="Assine nosso RSS" height=38 width=38></a>
								<a href="http://www.youtube.com/user/redecdi"><img class="pull-right" src="<?php bloginfo('template_directory'); ?>/img/youtube.jpg" alt="Visite nosso canal no Youtube" height=38 width=38></a>
								<a href="https://twitter.com/ongCDI"><img class="pull-right" src="<?php bloginfo('template_directory'); ?>/img/twitter.jpg" alt="Visite nosso Twitter" height=38 width=38></a>
								<a href="http://www.facebook.com/pageongcdi"><img class="pull-right" src="<?php bloginfo('template_directory'); ?>/img/facebook.jpg" alt="Visite nosso Facebook" height=38 width=38></a>
							</div>
						</div>
						</div>
					</div><!-- #page-footer .well .clearfix -->
					<?php tha_footer_bottom(); ?>
				</footer><!-- #colophon -->
				<?php tha_footer_after(); ?>
	<!-- <?php printf( __( '%d queries. %s seconds.', 'the-bootstrap' ), get_num_queries(), timer_stop(0, 3) ); ?> -->
	<?php wp_footer(); ?>
	</body>
</html>
<?php


/* End of file footer.php */
/* Location: ./wp-content/themes/the-bootstrap/footer.php */