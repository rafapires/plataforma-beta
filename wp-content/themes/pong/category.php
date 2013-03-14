<?php get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<h2><?php single_cat_title(); ?></h2>
<?php $current_category = single_cat_title("", false); $image = '/wp-content/uploads/images/' . strtolower(str_replace(' ', '-', $current_category)) . '.jpg'; if (file_exists(ABSPATH . $image)) { echo '<img src="' . get_bloginfo('url') . $image . '" alt="' . $current_category . '" />'; } ?>
		
<ul class="thumbnails">
	<?php if (have_posts()) : ?>		
		<?php while (have_posts()) : the_post(); ?>
			<li class="span6">
				<div class="thumbnail">				
				<h3>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
				</h3>
				
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

				<?php the_excerpt(); ?>
				</div>
			</li>
		<?php endwhile; ?>
	<?php endif; ?>
</ul>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
