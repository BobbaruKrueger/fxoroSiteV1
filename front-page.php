<?php
/**
  * @package fxoroVone
  * front-page.php
  */
?>
<?php get_header( 'fp' ); ?>

	<section id="section1fp" class="subVid">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3>
						Registration and authorization
					</h3>
					<div class="clogoW text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/cyprus_logo.png" alt="Cyprus Logo" class="img-fluid clogo d-md-none">
					</div>
					<p>
						FXORO is a brand belonging to MCA Multifunds LTD, a financial company incorporated and registered under the lays of the Republic of Cyprus. It is authorized and regulated by CYSEC.
					</p>
					<p>
						<span>
							Cyprus security and exchange commission
						</span>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="section2fp" class="part">
		<div id="particles-js"></div>
		<div class="container">
			<div class="row top">
				<div class="col-12">
					<h3>
						Real-time FREE quotes
					</h3>
					<p>
						Opening an account with FXORO means staying up to date with the latest market development. FXORO offers seamless trading quotes of over 2000 trading assets. Visit our website for one click updates any time you need.
					</p>
				</div>
			</div>
			<div class="row bottom">
				<ul class="nav col-12 col-md-3" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="active" id="forex-tab" data-toggle="tab" href="#forex" role="tab" aria-controls="forex" aria-selected="true">Forex</a>
					</li>
					<li class="nav-item">
						<a class="" id="shares-tab" data-toggle="tab" href="#shares" role="tab" aria-controls="shares" aria-selected="false">Shares</a>
					</li>
					<li class="nav-item">
						<a class="" id="commodities-tab" data-toggle="tab" href="#commodities" role="tab" aria-controls="commodities" aria-selected="false">Commodities</a>
					</li>
					<li class="nav-item">
						<a class="" id="indices-tab" data-toggle="tab" href="#indices" role="tab" aria-controls="indices" aria-selected="false">Indices</a>
					</li>
				</ul>
				<div class="tab-content col-12 col-md-9" id="myTabContent">
					<div class="tab-pane fade show active" id="forex" role="tabpanel" aria-labelledby="forex-tab">
						<div class="owl-carousel owl-theme">
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f1.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f2.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f3.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f1colo.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f2colo.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f3colo.png" alt="">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="shares" role="tabpanel" aria-labelledby="shares-tab">
						<div class="owl-carousel owl-theme">
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f1.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f2.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f3.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f1colo.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f2colo.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f3colo.png" alt="">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="commodities" role="tabpanel" aria-labelledby="commodities-tab">
						<div class="owl-carousel owl-theme">
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f1.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f2.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f3.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f1colo.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f2colo.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f3colo.png" alt="">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="indices" role="tabpanel" aria-labelledby="indices-tab">
						<div class="owl-carousel owl-theme">
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f1.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f2.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f3.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f1colo.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f2colo.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/owlcar/f3colo.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer( 'fp' ); ?>