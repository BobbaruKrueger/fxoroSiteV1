<?php
/**
  * @package fxoroVone
  * front-page.php
  */
?>
<?php get_header(); ?>

	<main id="main" class="site-main col-12 col-lg-8" role="main">
		AICI VA FI HOMEPAGE sau FRONTPAGE sau WHATEVER, CHILL!!
		<?php
			if( have_posts() ) {
				while( have_posts() ) {
					the_post();
					get_template_part( 'includes/front/template-parts/content', get_post_format() );
				}
			}
		?>
		<div class="col-12">
			<?php 
				if ( function_exists( "csseco_bs_pagination" ) ) {
					csseco_bs_pagination();
				}
			?>
		</div>
	</main>
	<?php get_sidebar(); ?>


<?php get_footer(); ?>