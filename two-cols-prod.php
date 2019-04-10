<?php
/**
  * Template Name: Two Columns Products
  * @package fxoroVone
  * two-cols-prod.php
  */
?>
<?php get_header(); ?>

	<main id="main" class="site-main col-12" role="main">
		<div class="row">
			<div class="col-12">
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/products/banners/crypto.jpg" alt="Crypto" class="img-fluid">
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<header class="entry-header">
					<?php the_title('<h1 class="entry-title">','</h1>' ); ?>
				</header><!--/.entry-header-->
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-7">
				<?php
					if( have_posts() ) {
						while( have_posts() ) {

							the_post();

							fxoroVone_save_post_views( get_the_ID() );

							get_template_part( 'includes/front/template-parts/content', 'page-prod' );

						}
					}
				?>
			</div>
			<div class="col-12 col-md-5">
				other
			</div>
		</div>
	</main>


<?php get_footer(); ?>