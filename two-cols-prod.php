<?php
/**
  * Template Name: Two Columns Products
  * @package fxoroVone
  * two-cols-prod.php
  */
?>
<?php get_header(); ?>
<?php 

	global $post;

	$slug = $post->post_name;

	if ( $slug == 'forex' ) {
		$poza = 'forex';
		$content = 'Trade the most popular forex pairs like EUR/USD, GBP/USD and EUR/GBP. Use our advanced trading tools to protect your proﬁts and limit losses.';
	} elseif ( $slug == 'cfds' ) {
		$poza = 'CFDs';
		$content = 'Trade a variety of popular commodity CFDs with leverage. all available on our leading trading platform.';
	} elseif ( $slug == 'commodities' ) {
		$poza = 'commodities';
		$content = 'Trade a variety of popular commodity CFDs with leverage. Gold, Oil and Silver are all available on our leading trading platform.';
	} elseif ( $slug == 'indices' ) {
		$poza = 'indices';
		$content = 'Trade the most popular Indices around the world like USA 500, US-TECH 100 and France 40 with leverage.';
	} elseif ( $slug == 'cryptocurrency' ) {
		$poza = 'cryptocurrency';
		$content = 'Open a Trading Account at FXORO and start trading cryptocurrencies with a regulated broker today!';
	} 

?>

	<main id="main" class="site-main col-12" role="main">
		<div class="row">
			<div class="col-12">
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/products/banners/<?php echo $poza; ?>.jpg" alt="<?php echo $poza; ?>" class="img-fluid d-none d-md-block mb-md-3 mb-xl-4">
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<header class="entry-header">
					<?php the_title('<h1 class="entry-title mb-md-3 mb-xl-4">','</h1>' ); ?>
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
			<div class="col-12 col-md-5 prodCntntWrapper">
				
				<?php 
					include( locate_template( 'includes/front/template-parts/products/prd-r.php', false, false ) );
				?>
			</div>
		</div>
	</main>


<?php get_footer(); ?>