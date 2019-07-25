<?php
/**
  * @package fxoroVone
  * Template Name: FP4
  * front-page.php
  */
?>
<?php get_header( 'fp2' ); ?>

	<section id="firtsvid_4" class="firtsvid_4">
		<video autoplay muted loop class="bgVid">
			<source src="<?php echo get_template_directory_uri(); ?>/videos/video.webm" type="video/webm">
		</video>
		<div class="container fp">
			<div class="row">
				<div class="col-12 text-center">
					<div class="dtable">
						<div class="dtable-cell">
							<div class="wbg">
								<h1>
									Choose <span style="color: #1B2854; display: inline;">FX<span style="color: #ffa402; display: inline;">ORO</span></span> and Enjoy
									<span>The Best Trading Experience</span>
								</h1>

								<p>
									Join a professional community of ambitious traders.
									<span> Trade CFDs, Indices, Commodities and Cryptocurrencies.</span>
								</p>
							</div>
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
							<div class="row ub">
								<div class="col-6 text-right pl-0">
									<div class="flag-wrapper">
										<div class="dtable">
											<div class="dtable-cell">
												<div class="img-thumbnail flag flag-icon-background flag-icon-eu"></div>
											</div>
										</div>	
									</div>
									<div>
										<div class="dtable">
											<div class="dtable-cell text-left">
												<span>Trade in the European Union</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-6 text-left">
									<div class="flag-wrapper">
										<div class="dtable">
											<div class="dtable-cell">
												<div class="img-thumbnail flag flag-icon-background" style="background-image: url(<?php echo get_template_directory_uri(); ?>/imgs/eur_sy.png); background-size: 30px;"></div>
<!--												<div class="img-thumbnail flag flag-icon-background flag-icon-gb"></div>-->
											</div>
										</div>	
									</div>
									<div>
										<div class="dtable">
											<div class="dtable-cell text-left">
												<span>Start investing in EUR</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
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