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
remove_filter ('the_excerpt', 'wpautop');
function new_excerpt_more( $more ) {
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');

get_header(); ?>
            
            <section id="lista_projetos">
                <div class="container">
                    <ul class="thumbnails">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <li class="span3">
                                    <div class="cdi_box">
                                        <h3 class='cdi_title_box'><?php the_title(); ?></h3>
                                        <p class='cdi_content_box'><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary cdi_footer_box">leia mais</a>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </section>

<?php get_footer();

/* End of file archive.php */
/* Location: ./wp-content/themes/the-bootstrap/archive.php */
?>