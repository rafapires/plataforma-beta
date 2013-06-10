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
                  'posts_per_page' => 5,
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

     <div class='row'>
        <div class='span4 well well-small'>
            <h4>Nossa rede</h4>
            <span>Donec semper tempor massa nec consequat. Nam interdum, est ac scelerisque molestie, diam urna accumsan mi, dignissim condimentum dui nullam.</span>
            <?php $canal = new WP_query(array(
                'post_type' => 'projeto_post',
                'tipo-projetos' => 'canal',
                'orderby' => 'rand'
                ));
                while ($canal->have_posts()) : $canal->the_post(); ?>
                    <a class='btn btn-block' href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
                <?php endwhile;
                wp_reset_postdata(); ?>
        </div>

        <div class='span4 well well-small'>
            <h4>Projetos</h4>
            <span>Donec semper tempor massa nec consequat. Nam interdum, est ac scelerisque molestie, diam urna accumsan mi, dignissim condimentum dui nullam.</span>
            <?php $geral = new WP_query(array(
                'post_type' => 'projeto_post',
                'tipo-projetos' => 'geral',
                'orderby' => 'rand'
                ));
                while ($geral->have_posts()) : $geral->the_post(); ?>
                    <a class='btn btn-block' href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
                <?php endwhile;
                wp_reset_postdata(); ?>
        </div>
        <div class='span4 well well-small'>
            <h4>Chamadas</h4>
            <span>Donec semper tempor massa nec consequat. Nam interdum, est ac scelerisque molestie, diam urna accumsan mi, dignissim condimentum dui nullam.</span>
            <?php $chamada = new WP_query(array(
                'post_type' => 'projeto_post',
                'tipo-projetos' => 'chamada',
                'orderby' => 'rand'
                ));
                while ($chamada->have_posts()) : $chamada->the_post(); ?>
                    <a class='btn btn-block' href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
                <?php endwhile;
                wp_reset_postdata(); ?>
        </div>
    </div>


            

<?php get_footer();

/* End of file archive.php */
/* Location: ./wp-content/themes/the-bootstrap/archive.php */