<?php
/**
 * Sample template for displaying single parceiro posts.
 * Save this file as as single-parceiro.php in your current theme.
 *
 * This sample code was based off of the Starkers Baseline theme: http://starkerstheme.com/
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	

	<h1><?php the_title(); ?></h1>
		<?php the_post_thumbnail(); ?>

		<h2>Custom Fields</h2>	
		
		<strong>Descrição:</strong> <?php print_custom_field('descricaoparceiros:do_shortcode'); ?><br />
		<strong>URL</strong> <?php print_custom_field('urlparceiro'); ?><br />




<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>