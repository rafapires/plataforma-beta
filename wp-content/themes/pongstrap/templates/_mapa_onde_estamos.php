<?php
/** _mapa_onde_estamos.php
 *
 * Template Name: mapa onde estamos
 *
 * @author 	Konstantin Obenland
 * @package The Bootstrap
 * @since	1.3.0	- 29.04.2012
 */

get_header(); ?>

<section id="primary" class="span12">
	<?php tha_content_before(); ?>
	<div id="content" role="main">
		<?php 
		tha_content_top();
		
		the_post();
		echo the_content ();
		
		tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
get_footer();


/* End of file _full_width.php */
/* Location: ./wp-content/themes/the-bootstrap/_full_width.php */