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

get_header();
?>

      <div id="destaque" class="carousel slide span8 offset2">
        <div class='carousel-inner'>
          <?php $destaque = new WP_query(array(
                  'post_type' => 'projeto_post',
                  'orderby' => 'rand',
                  'meta_query' => array(
                      array(
                          'key' => 'cdi_destaque',
                          'value' => 1,
                      )
                  )
                ));

          $inicio=1;
          while($destaque->have_posts()) : $destaque->the_post(); ?>
            <div class='item<?php if($inicio==1){ echo " active"; $inicio=2; } ?>'>
              <a href='<?php the_permalink(); ?>'>
                  <img src='http://placehold.it/800x300' />
                  <!-- <?php the_post_thumbnail('full',array('class'=>'destaque')); ?> -->
                  <div class='carousel-caption'>
                        <h4><?php the_title();?></h4>
                        <?php the_excerpt();?>
                  </div>
              </a>
            </div>
          <?php endwhile;
          wp_reset_postdata(); ?>
        </div><!-- carousel-inner -->
          <a class="left carousel-control" href="#destaque" data-slide="prev">‹</a>
          <a class="right carousel-control" href="#destaque" data-slide="next">›</a>
     </div><!-- carousel -->



            

<?php get_footer();

/* End of file archive.php */
/* Location: ./wp-content/themes/the-bootstrap/archive.php */