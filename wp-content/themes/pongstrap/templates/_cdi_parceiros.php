<?php
/** _cdi_parceiros.php
 *
 * Template Name: mostra parceiros
 *
 * @author 	Rafael D´Alessandro Pires
 * @package pongstrap
 * @since	1.3.0	- 29.04.2012
 */
get_header(); ?>

<section id="primary" class="span12">
	<?php tha_content_before(); ?>
	<div id="content" class='cdi_parceiros' role="main">
		<?php tha_content_top();
		
		$cdi_tipos_parceiros = get_terms('tipo-parceiros');

		foreach ($cdi_tipos_parceiros as $cdi_tipo_parceiro) {

			echo '<h3>'.$cdi_tipo_parceiro->name.'</h3><hr />';
			$cdi_parceiros = get_posts ( array(	'post_type' => 'parceiro' ,
												'orderby' => 'rand',
												'tipo-parceiros' => $cdi_tipo_parceiro->slug ));
			?>
			
			<ul class='thumbnails'>
				<?php
				foreach ($cdi_parceiros as $post) {
					setup_postdata( $post );
					?>
					<li class='span3'>
						<div id='cdi_celula_parceiro' class='thumbnail'>
							<a href='<?php print_custom_field('urlparceiro');?>'>
								<div id='cdi_logo_parceiro'>
									<?php the_post_thumbnail(); ?>
								</div>
								<h3><?php the_title(); ?></h3>
								<p><?php echo substr(get_custom_field('descricaoparceiros'), 0,120); ?></p>
							</a>
						</div>
					</li>
				<?php }?>
			</ul>
		<?php		
		} 
comments_template( '', true );
		
		tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
get_footer();

/* End of file _full_width.php */
/* Location: ./wp-content/themes/the-bootstrap/_full_width.php */