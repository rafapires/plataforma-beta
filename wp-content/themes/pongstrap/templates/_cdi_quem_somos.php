<?php
/** _cdi_quem_somos.php
 *
 * Template Name: quem somos
 *
 * @author 	Rafael D´Alessandro Pires
 * @package pongstrap
 */

get_header(); ?>

<section id="primary" class="span12">
	<?php tha_content_before(); ?>
	<div id="content" class='cdi_quem_somos' role="main">
		<?php tha_content_top(); ?>

		<div class='row-fluid'>
			<div class="span3 well cdi_green_border">
				<h3 class="cdi_title_box cdi_green">MISSÃO</h3>
				<p class="cdi_descricao">Mobilizar pessoas e transformar comunidades através da tecnologia de informação e comunicação para maior cidadania e qualidade de vida.</p>
			</div>
				<div class="span3 well cdi_blue_border">
				<h3 class="cdi_title_box cdi_blue">VISÃO</h3>
				<p class="cdi_descricao">Formar agentes de transformação CDI para empoderar comunidades para desenvolvimento social e econômico.</p>
			</div>
				<div class="span6 well cdi_red_border">
				<h3 class="cdi_title_box cdi_red">HISTÓRIA</h3>
				<p class="cdi_descricao">Há 18 anos, o CDI usa a tecnologia para estimular o empreendedorismo e a cidadania, por meio de seus 780 espaços de inclusão digital existentes no Brasil e no mundo. (…)</p>
				<a class="btn btn-danger pull-right ">SAIBA MAIS</a>
			</div>

			<h3 class="span12 cdi_top_title">METODOLOGIA</h3>
			<img class="span12 alignnone size-full" alt="5-Passos-CDI" src="<?php bloginfo(template_url) ?>/img/passoapasso.jpg" />

			<ul class='thumbnails'>
				<li class='span2 offset1'>
					<div class='thumbnail'>
						<img class="alignnone size-full wp-image-210" alt="number01" src="<?php bloginfo(template_url) ?>/img/number01.png" width="130" height="130" />
						<h4>Leitura de Mundo</h4>
						<p>Educadores e educandos atiçam a sensibilidade e usam tecnologias disponíveis para conhecer melhor a realidade e a comunidade em que vivem.</p>
					</div>
				</li>
				<li class='span2'>
					<div class='thumbnail'>
						<img class="alignnone size-full wp-image-210" alt="number01" src="<?php bloginfo(template_url) ?>/img/number02.png" width="130" height="130" />
						<h4>Problematização</h4>
						<p>Educadores e educandos pesquisam para conhecer melhor a realidade já levantada com olhar de pesquisador, para analisar talentos, ações, problemas e causas, e escolher uma  oportunidade de ação e mobilização social.</p>
					</div>
				</li>
				<li class='span2'>
					<div class='thumbnail'>
						<img class="alignnone size-full wp-image-210" alt="number01" src="<?php bloginfo(template_url) ?>/img/number03.png" width="130" height="130" />
						<h4>Criar Plano de Ação</h4>
						<p>Educadores e educandos elaboram um plano de ação para fortalecer um ponto forte da comunidade ou resolver um ou mais problemas identificado.</p>
					</div>
				</li>
				<li class='span2'>
					<div class='thumbnail'>
						<img class="alignnone size-full wp-image-210" alt="number01" src="<?php bloginfo(template_url) ?>/img/number04.png" width="130" height="130" />
						<h4>Execução</h4>
						<p>Com tudo planejado, todos partem para a ação.</p>
					</div>
				</li>
				<li class='span2'>
					<div class='thumbnail'>
						<img class="alignnone size-full wp-image-210" alt="number01" src="<?php bloginfo(template_url) ?>/img/number05.png" width="130" height="130" />
						<h4>Avaliação</h4>
						<p>É o momento de refletir sobre a intervenção realizada e sobre a apropriação das tecnologias ao longo do processo de inclusão digital. Daqui o educando parte para uma nova leitura de mundo.</p>
					</div>
				</li>		
			</ul>
		</div>

		<?php tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
get_footer();

/* End of file _full_width.php */
/* Location: ./wp-content/themes/the-bootstrap/_full_width.php */