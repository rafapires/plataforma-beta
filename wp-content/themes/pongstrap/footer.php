<?php
/** footer.php
 *
 * @author		Rafael D´Alessandro Pires
 * @package		Pongstrap
 * @since		0.3.0	- 03.05.2013
 */
?>
				
			</div><!-- #page -->
		</div><!-- .container -->
		<?php tha_footer_before(); ?>
				<footer id="colophon" role="contentinfo">
					<?php tha_footer_top(); ?>
					<div id="page-footer" class="clearfix container">
						<div class="span4 cdi_mapa_site">
							<span class='cdi_title_footer'>MAPA DO SITE</span>
							<?php wp_nav_menu( array(
								'container'			=>	'nav',
								'container_class'	=>	'subnav',
								'theme_location'	=>	'footer-menu',
								'menu_class'		=>	'nav nav-tabs nav-stacked',
								'depth'				=>	3,
								'fallback_cb'		=>	'the_bootstrap_credits',
								'walker'			=>	new The_Bootstrap_Nav_Walker,
							) );
							?>
						</div>
						<div class="cdi-redes-sociais social span2 pull-right">
							<div class='cdi_global_site'>
								<a href='http://cdiglobal.org/' target='_blank'>
									<img src='<?php bloginfo('template_directory'); ?>/img/CDI-GLOBAL.png'>
									<p>Visit our international site</p>
								</a>
							</div>



							<!-- Social Media Buttons -->
							
							<div class='cdi_title_footer'>CDI NAS REDES SOCIAIS</div>
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
	<!-- Modal -->
	<div id="cdi_Modal_doacao" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div id="cdi_contato_modal" class="modal-header row-fluid">
			<div class='span12'>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" >Faça uma doação</h3>
			</div>
		</div>
		<div class="cdi_modal-body">
			<?php carrega_doacao(); ?>
		</div>
	</div>	
	


	<?php wp_footer(); ?>
	</body>
</html>
<?php


/* End of file footer.php */
/* Location: ./wp-content/themes/the-bootstrap/footer.php */