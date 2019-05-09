<?php
/**
 * @package fxoroVone
 * Template Name: Islamic Accounts template
 * cssecoTemplate_islamicAccount_page.php
 *
 * About Us template
 */
?>
<?php get_header(); ?>

			<main id="main" class="site-main col-12" role="main">
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
		</div><!-- /.row -->
	</div><!-- /.container-->
	<section id="subIsAcc">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h5>The carachteristics of the Islamic account</h5>
					<table class="table-bordered">
						<tbody>
							<tr>
								<th style="width: 70%;">Instrument</th>
								<th>Admin Charge (USD)</th>
							</tr>
							<tr>
								<td>AUDNZD, CADCHF, CADJPY, CHFJPY, EURCAD, EURCHF, EURGBP, EURJPY, EURUSD, GBPCAD, GBPCHF, GBPJPY, GBPUSD, NZDCAD, USDCAD, USDCHF, USDJPY, AEX25, AUD200, FRA40, GER30, US30, EUR50, UK100, IT40, HK50, SPA35, NAS100, JPN225, US2000, US500, SWI20, USDX, COFFEE, SUGAR, WHEAT, SOY BEAN, CORN</td>
								<td>5</td>
							</tr>
							<tr>
								<td>GOLD, SILVER, PLATINUM, COPP, OIL, BRENT, NGAS</td>
								<td>8</td>
							</tr>
							<tr>
								<td>AUDCAD, AUDCHF, AUDJPY, AUDUSD, EURAUD, EURDKK, EURNZD, GBPNZD, NZDCHF, NZDJPY, NZDUSD, USDDKK, USDHKD</td>
								<td>10</td>
							</tr>
							<tr>
								<td>EURCZK, EURNOK, EURPLN, GBPAUD, USDCZK, USDNOK, USDPLN, USDSGD</td>
								<td>15</td>
							</tr>
							<tr>
								<td>EURHUF, EURSEK, USDHUF, USDSEK</td>
								<td>20</td>
							</tr>
							<tr>
								<td>EURZAR, USDZAR, US STOCKS, EUROPE STOCKS</td>
								<td>25</td>
							</tr>
							<tr>
								<td>EURILS, USDCNH, USDILS, USDMXN, USDRUB</td>
								<td>30</td>
							</tr>
							<tr>
								<td>CHFTRY, EURTRY, GBPTRY, TRYJPY, USDTRY</td>
								<td>100</td>
							</tr>
						</tbody>
					</table>
					<p class="m-0">
						For more details on the Company’s Term and Conditions please click <a href="#">here</a>.
					</p>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container-->
	</section>
	<div class="container">
		<div class="row">
<?php get_footer(); ?>