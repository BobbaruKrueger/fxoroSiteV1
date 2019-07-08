<?php
/**
 * @package fxoroVone
 * includes/front/template-parts/fp/fp-join.php
 */
?>
<?php 
// start the session
// session_start();
// generate the token
// $_token= base64_encode( openssl_random_pseudo_bytes(16) ); 

// // add the token to the session
// $_SESSION['_token'] = $_token;


?>
	<section id="section9fp" class="join">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="ttl">
						Join FX<span>ORO</span> today
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-lg-8">
					<p class="ttxt">
						Fill in the form to make the first step in discovering, exploring and enjoying all <span>FX<span>ORO</span></span> has to offer to its customers. We will contact you in max. 24 working hours. Join us today!
					</p>
					<div class="row">
						<div class="col-12 col-md-6 pb-2 pb-md-3 pb-lg-5">
							<div class="pct">
								<div class="dtable">
									<div class="dtable-cell">
										<img src="<?php echo get_template_directory_uri(); ?>/imgs/fp/icon7.png" alt="Icon" class="img-fluid">
									</div>
								</div>
							</div>
							<div class="txt">
								<div class="dtable">
									<div class="dtable-cell">
										Low commissions
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 pb-2 pb-md-3 pb-lg-5">
							<div class="pct">
								<div class="dtable">
									<div class="dtable-cell">
										<img src="<?php echo get_template_directory_uri(); ?>/imgs/fp/icon8.png" alt="Icon" class="img-fluid">
									</div>
								</div>
							</div>
							<div class="txt">
								<div class="dtable">
									<div class="dtable-cell">
										Secure web and mobile platform
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-6 pb-2 pb-md-3 pb-lg-0">
							<div class="pct">
								<div class="dtable">
									<div class="dtable-cell">
										<img src="<?php echo get_template_directory_uri(); ?>/imgs/fp/icon9.png" alt="Icon" class="img-fluid">
									</div>
								</div>
							</div>
							<div class="txt">
								<div class="dtable">
									<div class="dtable-cell">
										Tight spreads 
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 pb-2 pb-md-3 pb-lg-0">
							<div class="pct">
								<div class="dtable">
									<div class="dtable-cell">
										<img src="<?php echo get_template_directory_uri(); ?>/imgs/fp/icon10.png" alt="Icon" class="img-fluid">
									</div>
								</div>
							</div>
							<div class="txt">
								<div class="dtable">
									<div class="dtable-cell">
										Highly secure environment
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<?php echo do_shortcode( '[create_an_account_form]'); ?>
				</div>
			</div>
		</div>
	</section>