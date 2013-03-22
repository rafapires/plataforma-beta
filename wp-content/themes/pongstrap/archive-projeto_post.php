<?php
/** archive-projeto_post.php
 *
 * The template for displaying Archive Projeto_post.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @author		Rafael D´Alessandro Pires
 * @package		The Bootstrap
 * @since		1.0.0 - 07.02.2012
 */

get_header(); ?>

<section id="primary" class="span12">

	<?php tha_content_before(); ?>
	<div id="content" role="main">
		<?php tha_content_top();
		
		if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( '/partials/content', get_post_format() );
			}
			the_bootstrap_content_nav();
		else :
			get_template_part( '/partials/content', 'not-found' );
		endif;
		
		tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();


/* End of file archive.php */
/* Location: ./wp-content/themes/the-bootstrap/archive.php */