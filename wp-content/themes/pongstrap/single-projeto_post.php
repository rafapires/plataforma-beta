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
$cdi_titulo_box_numeros_projeto = $post->post_title;
$cdi_numeros_do_projeto = get_custom_field('numerosprojeto');

function termos_existentes_neste_projeto($termos_existentes_neste_projeto) {
	$saida = array();
	if (!empty($termos_existentes_neste_projeto)) {
		foreach ($termos_existentes_neste_projeto as $termo) {
			$saida[]=$termo;
			$return = join(', ', $saida);
		}		
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
			<!-- carrega call ro action -->
			<?php
			$cdi_btn_call_to_aciton = get_custom_field('btn_cta_projetos');
			if (!empty($cdi_btn_call_to_aciton)) {
				$cdi_text_call_to_action = get_custom_field('text_cta_projetos');
				$cdi_url_call_to_action = get_custom_field('urlprojeto');?>
				<div id='cdi_call_to_action' class='well well-large'>
					<h4><?php echo $cdi_text_call_to_action;?></h4>
					<a class='btn btn-large btn-primary btn-block' href='<?php echo $cdi_url_call_to_action; ?>' <?php print_custom_field('target_blank'); ?> >
						<?php echo $cdi_btn_call_to_aciton;?>
					</a>
				</div>

			<?php } //end if?>


			
			<!-- carrega lista de noticias relacionadas -->
			<?php
			$cdi_posts_relacionado_ao_projeto = get_posts (array (
					'post_type'		=> 'post',
					'projetos'		=> termos_existentes_neste_projeto(custom_taxonomies_terms_slugs($post))
				));
			if (!empty($cdi_posts_relacionado_ao_projeto)) { ?>
				<div id='cdi_lista_noticias' class='row-fluid'>
					<div class='cdi_box'>
						<h4 class='cdi_head_box cdi_vermelho_forte'>Notícias relacionadas</h4>
						<div class='cdi_content_box'>
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
			<?php } // END if	?>
		</div>
		<div class='span4'>
			<!-- BOX COM NUMEROS DO PROJETO -->
			<?php
			if( !empty($cdi_numeros_do_projeto)) {
			?>
				<div class='cdi_box'>
					<h5 class='cdi_head_box'><?php echo $cdi_titulo_box_numeros_projeto;?> em números</h5>
					<div class='cdi_content_box'>
						<?php echo $cdi_numeros_do_projeto; ?>
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