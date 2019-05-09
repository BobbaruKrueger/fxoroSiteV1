<?php
/**
  * Template Name: Affiliates template
  * @package fxoroVone
  * cssecoTemplate_affiliates_page.php
  */
?>
<?php get_header(); ?>

		<main id="main" class="site-main col-12 col-xl-12" role="main">
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
	</div><!-- /row -->
</div><!-- /content -->
<section id="affth">
	<div class="btnncapW">
		<a class="cssecoBtn animationbtn" href="#">Start trading now</a>
		<p class="text-center mb-3 mb-sm-0">
			Your capital is at risk.
		</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-6 col-lg-4">
				<p class="text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/imgs/affiliates/icon1_cpa.png" alt="CPA">
				</p>
				<p class="text-center txt">
					Up to $1,000 CPA 
				</p>
			</div>
			<div class="col-12 col-sm-6 col-lg-4">
				<p class="text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/imgs/affiliates/icon2_conversation_rates.png" alt="Conversion Rates">
				</p>
				<p class="text-center txt">
					High conversion rates
				</p>
			</div>
			<div class="col-12 col-sm-12 col-lg-4">
				<p class="text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/imgs/affiliates/icon3_personal_support.png" alt="Personal Support">
				</p>
				<p class="text-center txt">
					Personal support & guidance
				</p>
			</div>
		</div>
	</div>
</section>
<section id="affForm">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="mt-4"><strong style="color: #1B2854;">INTERESTED?</strong> Leave your details below and an associate will reach out when it’s most convenient for you.</p>
				<?php echo do_shortcode( '[csseco_contact_form]' ); ?>
			</div>
		</div>
	</div>
</section>
<div class="content">
	<div class="row">
		
	
<?php get_footer(); ?>