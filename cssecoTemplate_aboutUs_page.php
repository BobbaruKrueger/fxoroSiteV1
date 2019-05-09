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
	<div class="container">
		<div class="row">
<?php get_footer(); ?>