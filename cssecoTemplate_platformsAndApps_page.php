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
					<strong>MetaTrader 4</strong> is a Forex and CFD trading platform used for trading and analysing the financial markets. <strong>MetaTrader 4</strong> offers traders access to advanced trading operations in a fast, secure and reliable environment. Simply download, install and begin trading! 
				</p>
				<p>
					<span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span>'s technology allows any trader to use the <strogn>MT4</strogn> WebTrader to login to their <strong>MT4</strong> accounts with their credentials, wherever they may be. <strong>MT4</strong> WebTrader has been optimised to run within the traders' browser and features improvements such as a redesigned layout and real time risk statistics. The complete trading functionality of <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span>'s WebTrader is based on its compatibility with <strong>MetaTrader4</strong>. <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> also enables its traders to no longer be stuck in front of their terminals and gives them the opportunity to trade directly from their mobile devices whether it's a smart phone or a tablet. This means you that with <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span>, you will have full mobility, no matter from which device you want to use the trading platform!
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
					<li>User-friendly</li>
					<li>Flexible</li>
					<li>Secure</li>
					<li>Fast and responsive</li>
					<li>Multi-language support</li>
					<li>Advanced charting capabilities</li>
					<li>Automated trading</li>
					<li>Totally customisable</li>
				</ul>
				<p>
					<span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> is proud to offer to its loyal traders the <strong>MetaTrader 4</strong> trading platform defined as the market standard and used by hundreds of brokers worldwide.  The <strong>MT4</strong> is recognized as the most advanced platform technologically as well as the most reliable in terms of stability and security. What to find out more? Open an account with <span style="font-weight: bold;">FX<span style="color: #fbb000;">ORO</span></span> right now! 
				</p>
				<div class="text-center text-xl-left pl-xl-5">
					<a class="cssecoBtn animationbtn" href="http://localhost/fxoro_site_mf/metatrader-4/">Learn more about MT4</a>
				</div>
			</div>
			<div class="col-12 d-none d-lg-block col-lg-5 featImg"></div>
			
<!--
			<div class="col-12 col-md-6">
				<h5>Benefits and features</h5>
				<ul>
					<li>User-friendly</li>
					<li>Flexible</li>
					<li>Secure</li>
					<li>Fast and responsive</li>
				</ul>
				<div class="row">
					<div class="col-12 col-xl-6">
						<ul class="mb-xl-0">
							<li>Multi-language support</li>
							<li>Advanced charting capabilities</li>
							<li>Automated trading</li>
							<li>Totally customisable</li>
						</ul>
					</div>
					<div class="col-12 col-xl-6">
						<div class="dtable">
							<div class="dtable-cell">
								<a class="cssecoBtn animationbtn" href="#">See campaign conditions</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="dtable">
					<div class="dtable-cell">
						<div class="lbW d-none d-md-block" style="visibility: hidden;">
							<img src="<?php echo get_template_directory_uri(); ?>/imgs/platforms_and_apps/bulb.png" alt="Light Bulb" class="lb">
						</div>
					</div>
				</div>
			</div>
-->
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
			<div class="col-12 col-md-6 col-lg-4">
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
			</div>
			<div class="col-12 col-md-6 col-lg-4">
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
			</div>
			<div class="col-12 col-md-12 col-lg-4">
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
			</div>
		</div>
	</div>
</section>
<section id="dwnldmt4" class="dwnldmt4">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<h5>Download MetaTrader 4</h5>
				<p>MT4 is the most popular FOREX & CFD trading platform for traders of all skill levels, across the globe. Start your trading journey and download MT4 today!</p>
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
									<p>The "most wanted" FOREX and CFD trading platform</p>
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
									<p>Easy to use, in your language, available on all devices</p>
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
									<p>Free real-time charting, news & analyses, totally customisable</p>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-12 offset-md-2 col-md-4 ">
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

<!--
	<main id="main" class="site-main col-12" role="main">
		
		<?php
//			if( have_posts() ) {
//				while( have_posts() ) {
//					
//					the_post();
//					
//					fxoroVone_save_post_views( get_the_ID() );
//					
//					get_template_part( 'includes/front/template-parts/content', 'page' );
//					
//				}
//			}
		?>
		
	</main>
-->


<div class="container">
	<div class="row">
		
<?php get_footer(); ?>