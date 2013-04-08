<?php
/** content-page.php
 *
 * The template for displaying page content in the page.php template
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 07.02.2012
 */


tha_entry_before(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php tha_entry_top(); ?>
	
	<div class="entry-content clearfix">
		<div class='row'>
			<div class='span8'>
				<?php
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'the-bootstrap' ) );
				the_bootstrap_link_pages(); ?>
			</div>
			<div class='span4'>
				<div id='cdi_numeros'>
					<h3>Nossas conquistas</h3>
					<table class='table table-condensed table-striped table-hover'>
						<tr>
							<td >Espaços de Inclusão Digital:</td><td>780</td>
						</tr><tr>
							<td >Vidas impactadas desde 1995:</td><td>1.54 milhão</td>
						</tr><tr>
							<td >Beneficiários diretos em 2012:</td><td>92.084</td>
						</tr><tr>
							<td >Educadores em 2012:</td><td>1.007</td>
						</tr><tr>
							<td >Países com presença CDI:</td><td>12</td>
						</tr>
					</table>
				</div>
				<a href='http://www.cdiglobal.org' target='_blank' class='btn btn-large btn-block cdi_global_btn'>
						<img src='<?php bloginfo('template_directory'); ?>/img/CDI-GLOBAL.png' class='pull-left cdi_logo_global'/>
						<p>Visit our international site</p>
				 </a>
			</div>
		</div>

	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'the-bootstrap' ), '<footer class="entry-meta"><span class="edit-link label">', '</span></footer>' );
	
	tha_entry_bottom(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
<?php tha_entry_after();


/* End of file content-page.php */
/* Location: ./wp-content/themes/the-bootstrap/partials/content-page.php */