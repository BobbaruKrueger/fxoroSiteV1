<?php
/**
 * @package fxoroVone
 * Template Name: About Us template
 * cssecoTemplate_aboutUs_page.php
 *
 * About Us template
 */
?>
<?php get_header(); ?>

			<main id="main" class="site-main col-sm-12 col-xl-7" role="main">
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
			<div class="d-none d-sm-block col-sm-12 col-xl-5 aboutUsSquare">

			</div>
		</div><!-- /.row -->
	</div><!-- /.container-->
	<section id="subAbUs">
		<div class="container">
			<div class="row">
				<div class="col-12 text-white">
					<h5 class="text-white">What makes <span>FX<span style="color: #fbb000;">ORO</span></span> unique?</h5>
					<ol>
						<li>We offer you a range of products in the FX and CFD markets while using leading technology and skilled experienced staff to provide you the ultimate trading experience.</li>
						<li>We are  committed to providing the highest standard of account security and supreme customer service.</li>
						<li>We’ll provide you advanced trading tools and technology ,insuring that each trader has the opportunity to reach their maximum trading potential.</li>
						<li>We differ from other brokerage companies due to its real time margin protection, ensuring limits and automatically executing risk management precautions to prevent negative balance while still allowing full margin usage.</li>
						<li>We don’t  manage clients’ portfolios nor does it engage in any form of trading consulting. </li>
					</ol>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container-->
	</section>
	<section id="subAbout_page" class="subAbout_page">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h5 class="mt-3 mt-sm-4">Trade with us, trade with confidence</h5>
				</div>
			</div>
			<div class="row">
<!--
				
				<div class="d-none d-xl-block col-xl-5 trdcndpct"><img class="alignnone wp-image-363 size-full" src="http://thewallstreetfan.com/wp-content/themes/CSSecoStarterThemeV2-master/imgs/aboutus/trdwconfpic.png" alt="" width="438" height="812">
				</div>
				
-->
				<div class="col-12">
					
					<p>
						<span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> is extremely mindful of its customers’ security and works hard to provide nothing but the best customer service.
					</p>
					<ul>
						<li class="csseco_negative">
							<strong style="color: #1b2854;">Negative Balance Protection</strong> This is a legally binding policy which guarantees that your accounts could not go into minus, so you will never lose more than they’ve invested, even in cases of extraordinary volatility.
						</li>
						<li class="csseco_risk">
							<strong style="color: #1b2854;">Careful Risk Management</strong> Our trained financial teams ensure that our clients and business are never overly exposed to any monetary disruption. We are well-fit to handle market instability with no interference to our regular trading services.
						</li>
						<li class="csseco_investor">
							<strong style="color: #1b2854;">Investor Protection</strong>
							<span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> belongs to the <strong style="color: #1b2854;">Investors Compensation Fund (ICF)</strong>. Consequently, in the unlikely event of the failure or instability to the company which might prevent it from fulfilling its financial obligations, our customers could be eligible to receive compensation. Kindly click here for additional details.
						</li>
						<li class="csseco_margin">
							<strong style="color: #1b2854;">Instant Margin Protection</strong>
							<span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> uses automatic precautions and advanced technology to ensure that our clients have complete use of their trading accounts’ margin. At the same time, limits are carefully monitored to avoid negative balance<a style="text-decoration: none; color:#333;" href="http://thewallstreetfan.com/wp-includes/SimplePie/Cache/Seiko.html">.</a>
						</li>
						<li class="csseco_bank">
							<strong style="color: #1b2854;">Bank Accounts Segregations</strong> All of <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span>’s client funds are separated from the company capital and they are kept in leading banks for maximal protection.
						</li>
					</ul>
					<p class="font-italic">These unique security measures, as well as our excellent trading conditions and superb customer service, enable <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> to remain a real market leader. We are committed to continue providing our clients with the highest security standards and we always have their best interest at heart.</p>

				</div>

			</div>
		</div>
	</section>

	<div class="container">
		<div class="row">
<?php get_footer(); ?>