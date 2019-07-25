<?php
/**
  * @package fxoroVone
  * Template Name: FP2
  * front-page.php
  */
?>
<?php get_header( 'fp2' ); ?>

	<section id="firtsvid_2" class="firtsvid_2">
		<div class="container fp">
			<div class="row">
				<div class="col-12 col-lg-6 text-center text-lg-left">
					<div class="dtable">
						<div class="dtable-cell">
							<h1>
								Trade With Confidence And 
								<span>Enjoy A Top Trading Platform</span>
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
				<div class="col-12 col-lg-6 d-none d-lg-block text-center">
					<div class="hfp2ImgWrapper">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/fp/oare/pardaf/phone.png" alt="Phone" class="phoneF2" style="visibility: hidden;">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/fp/oare/pardaf/icons.png" alt="Icons" class="iconsF2" style="visibility: hidden;">
						<video autoplay muted loop class="bgVid" style="visibility: hidden;">
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

<script src="<?php echo get_template_directory_uri(); ?>/vendor/particles/particles.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/particles/particles.json"></script>

<?php get_footer( 'fp' ); ?>