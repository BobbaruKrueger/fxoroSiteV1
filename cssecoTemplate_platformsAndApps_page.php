<?php
/**
  * Template Name: Platforms and Apps Template
  * @package fxoroVone
  * cssecoTemplate_platformsAndApps_page.php
  */
?>
<?php get_header(); ?>
		<div class="col-12">
			<header class="entry-header">
				<?php the_title('<h1 class="entry-title mb-md-3 mb-xl-4"><span>','</span></h1>' ); ?>
			</header><!--/.entry-header-->
		</div>
	</div><!-- /.row -->
</div><!-- /.container-->
<section id="meta4" class="meta4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p>
					The MT4 platform is the most popular charting and analysis software used by traders of all levels, of all over the world. It comes with allof the most popular charting tools and offers immediate order execution and real-time results.
				</p>
				<p>
					MT4 is a as the industry standard. Is Combining an intuitive user interface with a customizable feature-rich environment, the MT4 trading platform provides everything a trader needs to chart assets, place orders and manage positions.
				</p>
				<div class="mt4btns">
					<div class="row">
						<?php 
							if (is_user_logged_in()) {
						?>
							<div class="col-12 col-sm-6 col-md-4 text-center mb-3 mb-md-0">
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/platforms_and_apps/mt4_we.png" alt="We" class="d-block d-sm-none">
								<a class="cssecoBtn animationbtn" href="#">Download now</a>
								<img src="<?php echo get_template_directory_uri(); ?>/imgs/platforms_and_apps/mt4_we.png" alt="We" class="d-none d-sm-block">
							</div>
						<?php 
							}
						?>
						<div class="col-12 col-sm-<?php echo (is_user_logged_in()) ? '6' : '6' ?> <?php echo (is_user_logged_in()) ? 'col-md-4' : 'col-md-6' ?> text-center mb-3 mb-md-0">
							<img src="<?php echo get_template_directory_uri(); ?>/imgs/platforms_and_apps/mt4_win.png" alt="Windows" class="d-block d-sm-none">
							<a class="cssecoBtn animationbtn" href="<?php echo esc_url( home_url( '/' ) ); ?>metatrader-4/">Learn more about MT4</a>
							<img src="<?php echo get_template_directory_uri(); ?>/imgs/platforms_and_apps/mt4_win.png" alt="Windows" class="d-none d-sm-block">
						</div>
						<div class="col-12 col-sm-<?php echo (is_user_logged_in()) ? '12' : '6' ?> <?php echo (is_user_logged_in()) ? 'col-md-4' : 'col-md-6' ?> text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/imgs/platforms_and_apps/iosicon.png" alt="MT4 Mac" class="d-block d-sm-none">
							<a class="cssecoBtn animationbtn" href="<?php echo esc_url( home_url( '/' ) ); ?>mt4-for-mac/">Learn about MT4 for Mac</a>
							<img src="<?php echo get_template_directory_uri(); ?>/imgs/platforms_and_apps/iosicon.png" alt="MT4 Mac" class="d-none d-sm-block">
						</div>
					</div>
				</div>
<!--				<img src="<?php echo get_template_directory_uri(); ?>/imgs/platforms_and_apps/mt4_tablet.png" alt="Tablet" class="mt4tblt" style="visibility: hidden;">-->
			</div>
		</div>
	</div>
</section>
<section id="features" class="features">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-7">
				<h5>Benefits and features</h5>
				<ul>
					<li>Benefits and features</li>
					<li>User-friendly</li>
					<li>Flexible</li>
					<li>Secure</li>
					<li>Fast and responsive</li>
					<li>Multi-language support</li>
					<li>Advanced charting capabilities</li>
					<li>Automated trading</li>
					<li>Totally customisable</li>
				</ul>
				<h5>Trade where ever you are</h5>
				<p>
					The complete trading functionality of <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span>'s WebTrader is based on its perfect compatibility with MetaTrader4 this enables you to trade directly from your mobile devices whether it's a smart phone or a tablet, an android or a MCOS This means full mobility, no matter from which device you want to use the trading platform!
				</p>
				<div class="text-center text-xl-left pl-xl-5">
					<a class="cssecoBtn animationbtn" href="http://localhost/fxoro_site_mf/metatrader-4/">Learn more about MT4</a>
				</div>
			</div>
			<div class="col-12 d-none d-lg-block col-lg-5 featImg"></div>
		</div>
	</div>
</section>
<section id="mt4ondevices" class="mt4ondevices">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h5>MetaTrader 4 on other devices</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 col-lg-4 zc">
				<div class="ttl clearfix">
					<div class="pct">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/platforms_and_apps/mt4_androind.png" alt="Android">
					</div>
					<div class="rttl">
						<div class="dtable">
							<div class="dtable-cell">
								<h3>Download MT4 for Android</h3>
							</div>
						</div>
					</div>
				</div>
				<p class="text-center">Trade on-the-go with your Android smartphone or tablet. The MT4 Android app supports all types of execution models and lets you trade directly from the chart.</p>
				<div class="text-center mb-4 mb-lg-0">
					<a class="cssecoBtn animationbtn" href="#" data-toggle="modal" data-target="#modalLogin">Get MT4 for Android</a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 zc">
				<div class="ttl clearfix">
					<div class="pct">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/platforms_and_apps/mt4_apple.png" alt="Apple Logo">
					</div>
					<div class="rttl">
						<div class="dtable">
							<div class="dtable-cell">
								<h3>Download MT4 for iOS</h3>
							</div>
						</div>
					</div>
				</div>
				<p class="text-center">Get MT4 for iOS and trade directly on your iPhone or iPad. This single app works on all iOS devices and features a full set of trading orders, including pending orders.</p>
				<div class="text-center mb-4 mb-lg-0">
					<a class="cssecoBtn animationbtn" href="#" data-toggle="modal" data-target="#modalLogin">Get MT4 for IOS</a>
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-4 zc">
				<div class="ttl clearfix">
					<div class="pct">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/platforms_and_apps/mt4_mac.png" alt="Mac">
					</div>
					<div class="rttl">
						<div class="dtable">
							<div class="dtable-cell">
								<h3>Download MT4 for Mac</h3>
							</div>
						</div>
					</div>
				</div>
				<p class="text-center">Running on a Mac? No problem. You can get the MT4 trading software for OS X too!All you need to do is download our MT4 for Mac application, install and hit the trading floor today!</p>
				<div class="text-center">
					<div class="text-center">
					<a class="cssecoBtn animationbtn" href="#" data-toggle="modal" data-target="#modalLogin">Get MT4 for Mac</a>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="dwnldmt4" class="dwnldmt4">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 colBg">
				<h5>Download MetaTrader 4</h5>
				<p>Download MetaTrader 4 to enjoy the broadest Forex trading opportunities</p>
				<ul>
					<li>
						<div class="pct">
							<div class="dtable">
								<div class="dtable-cell">
									<img src="<?php echo get_template_directory_uri(); ?>/imgs/platforms_and_apps/dwnldmt4lupa.png" alt="Lupa">
								</div>
							</div>
						</div>
						<div class="txt">
							<div class="dtable">
								<div class="dtable-cell">
									<p>Register with <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> – Fill out the registration form and open your account in minutes.</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="pct">
							<div class="dtable">
								<div class="dtable-cell">
									<img src="<?php echo get_template_directory_uri(); ?>/imgs/platforms_and_apps/dwnldmt4devices.png" alt="Devices">
								</div>
							</div>							
						</div>
						<div class="txt">
							<div class="dtable">
								<div class="dtable-cell">
									<p>Download MetaTrader - Compatible with popular mobile and desktop platforms.</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="pct">
							<div class="dtable">
								<div class="dtable-cell">
									<img src="<?php echo get_template_directory_uri(); ?>/imgs/platforms_and_apps/dwnldgraph.png" alt="Graph">
								</div>
							</div>
						</div>
						<div class="txt">
							<div class="dtable">
								<div class="dtable-cell">
									<p>Start Trading! Maximise your potential in Trading Online with MetaTrader and <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> superior trading conditions.</p>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-12 offset-md-1 col-md-5 offset-lg-2 col-lg-4">
				<form action="" class="create_account">
					<div class="row">
						<div class="col-12">
							<h3>Create Your Account</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-6 pr-md-1">
							<div class="form-group">
								<label for="firstName">First Name</label>
								<input type="text" class="form-control" id="firstName" aria-describedby="firstName" placeholder="First Name">
							</div>
						</div>
						<div class="col-12 col-md-6 pl-md-1">
							<div class="form-group">
								<label for="lastName">Last Name</label>
								<input type="text" class="form-control" id="lastName" aria-describedby="lastName" placeholder="Last Name">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label for="email">Email address</label>
								<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label for="country">Country</label>
								<select class="form-control" id="country">
									<option>Romania</option>
									<option>Rusia</option>
									<option>Italia</option>
									<option>Belgia</option>
									<option>Ungaria</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<div class="phoneFP clearfix">
									<input id="phoneprefix" class="form-control phoneprefixclass phone-prefix" type="text" name="phone-country-code" value="" readonly="">
									<input id="phonenumber" class="form-control phonenumberclass phone-number" name="phone" type="tel" placeholder="Telefono">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<small class="form-text text-muted">By creating an account you agree to our Privacy policy, and to receive email marketing materials, you can opt-out at any time.</small>
						</div>
					</div>
					<div class="row">
						<div class="col-12 text-center">
							<button type="submit" class="cssecoBtn animationbtn">Start trading</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">
		
<?php get_footer(); ?>