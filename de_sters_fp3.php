<?php
/**
  * @package fxoroVone
  * Template Name: FP3
  * front-page.php
  */
?>
<?php get_header( 'fp2' ); ?>

	<section id="firtsvid_3" class="firtsvid_3">
		<div class="container fp">
			<div class="row">
				<div class="col-12 col-lg-6 text-center text-lg-left">
					<div class="dtable">
						<div class="dtable-cell">
							<h1>
								Be Part Of The Winining Team
								<span>Start Trading With <span style="color: #1B2854; display: inline;">FX<span style="color: #ffa402; display: inline;">ORO</span></span> Today</span>
							</h1>

							<p>
								Join a professional community of ambitious traders.
								<span> Trade CFDs, Indices, Commodities and Cryptocurrencies.</span>
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
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/fp/oare/praf/screen.png" alt="Screen" class="screens" style="visibility: hidden;">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/fp/oare/praf/phone.png" alt="Phone" class="phone" style="visibility: hidden;">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/fp/oare/praf/icons.png" alt="Screen Icons" class="screenIcons" style="visibility: hidden;">
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