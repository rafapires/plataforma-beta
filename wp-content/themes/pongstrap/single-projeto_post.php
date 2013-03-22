<?php
/** single-projeto_post.php
 *
 * Template Name: pagina projeto
 *
 * @author 	Rafael D´Alessandro Pires
 * @package The Bootstrap
 * @since	1.3.0	- 29.04.2012
 */

get_header();
global $post;
remove_filter ('the_excerpt', 'wpautop');
function termos_existentes_neste_projeto($termos_existentes_neste_projeto) {
	$saida = array();
	foreach ($termos_existentes_neste_projeto as $termo) {
		$saida[]=$termo;
		$return = join(', ', $saida);
	}
	return $return;
}


$cdi_projeto_post_id_atual = $post->ID;
?>
<section id="primary" class="span12">
	<?php tha_content_before(); ?>
	<div id="content" role="main" class='row-fluid'>
		<?php 
		tha_content_top();
		?>
		<div class='span8'>
			<h3><?php the_title();?></h3>
			<?php the_post();?>
			<?php echo the_content ();?>
			
			<!-- carrega lista de noticias relacionadas -->
			<div class='row-fluid'>
				<div class='cdi_box'>
					<h4 class='cdi_head_box'>Notícias relacionadas</h4>
					<div class='cdi_content_box'>
						<?php
						$cdi_posts_relacionado_ao_projeto = get_posts (array (
								'post_type'		=> 'post',
								'projetos'		=> termos_existentes_neste_projeto(custom_taxonomies_terms_slugs($post))
							));
						?>

						<div class='row-fluid'>
						<ul class='thumbnails'>
							<?php
							foreach ($cdi_posts_relacionado_ao_projeto as $post) { 
								setup_postdata( $post );?>
								<li class='thumbnail row-fluid'>
									<?if(has_post_thumbnail()){?>
										<div class='cdi_thumb_lista_noticia span3 align-center'>
											<?php the_post_thumbnail('thumbnail');?>
										</div>
										<div class='span9'>
									<?php }else{ ?>
										<div>
									<?php } ?>
											<h4><?php the_title();?></h4>
											<p><?php the_excerpt();?></p>
										</div>
								</li>
							<?php }?>
						</ul>
						</div>

					</div>
				</div>
			</div>

		</div>
		<div class='span4'>
			<!-- BOX COM NUMEROS DO PROJETO -->
			<?php if( get_custom_field('numerosprojeto') ) {?>
			<div class='cdi_box'>
				<h5 class='cdi_head_box'><?php echo the_title();?> em números</h5>
				<div class='cdi_content_box'>
					<?php print_custom_field('numerosprojeto:do_shortcode'); ?>
				</div>
			</div>
			<?php }?>
			<!-- BOX COM LISTA RAND DE OUTROS PROJETOS -->
			<?php
				$cdi_projetos_rand = get_posts ( array(
										'orderby'			=> 'rand',
										'post_type'			=> 'projeto_post',
										'exclude'			=> $cdi_projeto_post_id_atual
										)); ?>
			<div class='cdi_box'>
				<h5 class='cdi_head_box'>Outros projetos do CDI</h5>
				<div class='cdi_content_box'>
					<ul class='nav nav-pills'>
						<?php
						foreach ($cdi_projetos_rand as $post) {
							setup_postdata( $post );?>
							<li><a href='<?php echo $post->guid;?>'><?echo $post->post_title;?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>






		</div>
		
		<?php tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
get_footer();


/* End of file _full_width.php */
/* Location: ./wp-content/themes/the-bootstrap/_full_width.php */