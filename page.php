<?php
/**
  * @package fxoroVone
  * page.php
  */
?>
<?php get_header(); ?>

	<main id="main" class="site-main col-lg-8" role="main">
		<?php
			if( have_posts() ) {
				while( have_posts() ) {
					
					the_post();
					
					fxoroVone_save_post_views( get_the_ID() );
					
					get_template_part( 'includes/front/template-parts/content', 'page' );
					
				}
			}
		?>
	</main>
	<?php get_sidebar(); ?>


<?php get_footer(); ?>