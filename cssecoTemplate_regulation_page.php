<?php
/**
  * Template Name: Regulation Template - Two Columns plus bottom 
  * @package fxoroVone
  * cssecoTemplate_regulation_page.php
  */
?>
<?php get_header(); ?>

		<main id="main" class="site-main col-12" role="main">
			<div class="row">
				<div class="col-12">
					<header class="entry-header">
						<?php the_title('<h1 class="entry-title mb-md-3 mb-xl-4"><span>','</span></h1>' ); ?>
					</header><!--/.entry-header-->
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12">
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
			</div>
		</main>
	</div><!-- /.row -->
</div><!-- /.container-->
<section id="pmethods">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-6 col-md-3 text-center regpcts sfcharge">
				<div class="dtable">
					<div class="dtable-cell">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/regulations/safecharge.png" alt="Safe Charge">
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-3 text-center regpcts powercash">
				<div class="dtable">
					<div class="dtable-cell">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/regulations/powercash.png" alt="Power Cash">
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-3 text-center regpcts optpay">
				<div class="dtable">
					<div class="dtable-cell">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/regulations/optimal.png" alt="Optimal Payments">
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-3 text-center regpcts skrill">
				<div class="dtable">
					<div class="dtable-cell">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/regulations/skrill.png" alt="Skrill">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">
	

<?php get_footer(); ?>