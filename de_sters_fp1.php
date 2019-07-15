<?php
/**
  * @package fxoroVone
  * Template Name: FP1
  * front-page.php
  */
?>
<?php get_header( 'fp2' ); ?>

	<section id="firtsvid_1" class="firtsvid_1">
		<div class="bgVidFP1 d-none d-lg-block">
			<video autoplay muted loop>
				<source src="<?php echo get_template_directory_uri(); ?>/videos/video.webm" type="video/webm">
			</video>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/imgs/fp/oare/pardaf2/shape.png" alt="Icons" class="shapeF1 d-none d-lg-block">
		<img src="<?php echo get_template_directory_uri(); ?>/imgs/fp/oare/pardaf2/icon.png" alt="Icons" class="iconsF1 d-none d-lg-block" style="visibility: hidden;">
		<div class="container fp"> 
			<div class="row">
				<div class="col-12 col-lg-6 text-center text-lg-left">
					<div class="dtable">
						<div class="dtable-cell">
							<h1>
								Choose <span style="color: #1B2854; display: inline;">FX<span style="color: #ffa402; display: inline;">ORO</span></span> and Enjoy
								<span>The Best Trading Experience</span>
							</h1>

							<p>
								Join a professional community of ambitious traders.
								<span>Trade CFDs, Indices, Commodities and Cryptocurrencies.</span>
							</p>
							<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">
								<span>
									I’m Ready to Trade!
								</span>
	<!--

								<span>
									Start your investment journey now!
								</span>

	-->
							</a>
							<p>Your capital is at risk.</p>
						</div>
					</div>
				</div>
<!--				<div class="col-12 col-lg-6 d-none d-lg-block text-center">-->
				<div class="col-12 col-lg-6 d-none">
					<div class="hfp2ImgWrapper">
						<video autoplay muted loop class="bgVidFP1" style="/*visibility: hidden;*/">
							<source src="<?php echo get_template_directory_uri(); ?>/videos/video.webm" type="video/webm">
						</video>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part( 'includes/front/template-parts/fp/fp', 'subvid' ); ?>
	<?php get_template_part( 'includes/front/template-parts/fp/fp', 'tickers' ); ?>
	<?php get_template_part( 'includes/front/template-parts/fp/fp', 'map' ); ?>
	<?php get_template_part( 'includes/front/template-parts/fp/fp', 'instruments' ); ?>
	<?php get_template_part( 'includes/front/template-parts/fp/fp', 'training' ); ?>
	<?php get_template_part( 'includes/front/template-parts/fp/fp', 'tech' ); ?>
	<?php get_template_part( 'includes/front/template-parts/fp/fp', 'autochartist' ); ?>
	<?php get_template_part( 'includes/front/template-parts/fp/fp', 'fxvid' ); ?>
	<?php get_template_part( 'includes/front/template-parts/fp/fp', 'join' ); ?>

<?php get_footer( 'fp' ); ?>