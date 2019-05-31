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
					<p>What makes <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> unique</p>
					<p><span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> prides itself in offering a range of products in the FX and CFD markets while using leading technology and skilled experienced staff to provide the ultimate trading experience. Additionally, our company is committed to providing the highest standard of account security and supreme customer service.</p>
					<p>Clients of <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> can enjoy our advanced trading tools and technology ,insuring that each trader has the opportunity to reach their maximum trading potential. <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> differs from other brokerage companies due to its real time margin protection, ensuring limits and automatically executing risk management precautions to prevent negative balance while still allowing full margin usage. It is important to note that <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> does not manage clients’ portfolios nor does it engage in any form of trading consulting. If you would like further information about <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> or the services provided, please do not hesitate to contact us at <a href="mailto:cs@fxoro.com">cs@fxoro.com</a>.</p>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container-->
	</section>
	<section id="subAbout_page" class="subAbout_page">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<header class="entry-header mt-3 mt-sm-4">
						<h1 class="entry-title text-xl-right">
							<span>Trade with confidence</span>
						</h1>
					</header>
				</div>
			</div>
			<div class="row">
				<div class="d-none d-xl-block col-xl-5 trdcndpct"><img class="alignnone wp-image-363 size-full" src="http://thewallstreetfan.com/wp-content/themes/CSSecoStarterThemeV2-master/imgs/aboutus/trdwconfpic.png" alt="" width="438" height="812">
				</div>
				<div class="col-12 col-xl-7">
					
					<p>
						<span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> is extremely mindful of its customers’ security and we work hard to provide nothing but the best customer service. Our clients can feel confident, knowing that we implement special safety measures to shield them from high market volatility.
					</p>

					<p>
						<strong style="color: #1b2854;">Below, you will find a few of the steps we take regularly for our clients’ protection:</strong>
					</p>
					<ul>
						<li>
							<strong style="color: #1b2854;">Negative Balance Protection</strong> This is a legally binding policy which guarantees that our customers’ accounts could not go into minus, so traders will never lose more than they’ve invested, even in cases of extraordinary volatility<a style="text-decoration: none; color:#333;" href="http://thewallstreetfan.com/wp-includes/Requests/Cookie/Heuer.html">.</a>
						</li>
						<li>
							<strong style="color: #1b2854;">Careful Risk Management</strong> Our trained financial teams ensure that our clients and business are never overly exposed to any monetary disruption. We are well-fit to handle market instability with no interference to our regular trading services.
						</li>
						<li>
							<strong style="color: #1b2854;">Investor Protection</strong>
							<span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> belongs to the <strong style="color: #1b2854;">Investors Compensation Fund (ICF)</strong>. Consequently, in the unlikely event of the failure or instability to the company which might prevent it from fulfilling its financial obligations, our customers could be eligible to receive compensation. Kindly click here for additional details.
						</li>
						<li>
							<strong style="color: #1b2854;">Instant Margin Protection</strong>
							<span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> uses automatic precautions and advanced technology to ensure that our clients have complete use of their trading accounts’ margin. At the same time, limits are carefully monitored to avoid negative balance<a style="text-decoration: none; color:#333;" href="http://thewallstreetfan.com/wp-includes/SimplePie/Cache/Seiko.html">.</a>
						</li>
						<li>
							<strong style="color: #1b2854;">Bank Accounts Segregations</strong> All of <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span>’s client funds are separated from the company capital and they are kept in leading banks for maximal protection.
						</li>
					</ul>
					<p>These unique security measures, as well as our excellent trading conditions and superb customer service, enable <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> to remain a real market leader. We are committed to continue providing our clients with the highest security standards and we always have their best interest at heart.</p>

				</div>

			</div>
		</div>
	</section>

	<div class="container">
		<div class="row">
<?php get_footer(); ?>