<?php
/**
  * @package fxoroVone
  * header-fp2.php
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if( is_singular() && pings_open( get_queried_object() ) ) { ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php } ?>
	<style>
		<?php 
			if ( is_admin_bar_showing() ) {
		?>
			#bmenu {
				top: 46px!important;
			}
			@media screen and (min-width: 782px) {
				#bmenu {
					top: 32px!important;
				}
			}
		<?php
			};
		?>
	</style>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="site-wrapper" class="csseco-front-page csseco-front-page2">
		<div id="bmenu" class="d-block d-lg-none fp_bmenu">
			<div class="container">
				<div class="row" style="padding-bottom: 15px;">
					<div class="col-6 align-middle">
						<div class="dtable">
							<div class="dtable-cell">
								<a href="<?php echo get_option("siteurl"); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/imgs/logo_old_black.png" alt="Logo" class="logo header_logo">
								</a>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="burger close">
							<i class="far fa-times-circle"></i>
						</div>
					</div>
				</div>
				<div class="row om top">
					<div class="col-6 phoneH text-left">
						<div class="dtable">
							<div class="dtable-cell">
								<i class="fas fa-phone-volume"></i>
								+357.25.20.5555 
							</div>
						</div>
					</div>
					<div class="col-6 lngH text-right">
						<div class="dtable">
							<div class="dtable-cell">
								<span class="flag-icon flag-icon-gb"></span>
								ENG
								<i class="fas fa-caret-down"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<?php
							wp_nav_menu( array( 
								'theme_location'        =>      'primary',
								'container'             =>      'nav',
								'container_class'       =>      'header_menu',
								'container_id'          =>      'cssecoMenu' //
							) );
						?>
					</div>
				</div>
				<div class="row om bottom">
					<div class="col-12 col-sm-6 openaccH">
						<div class="dtable">
							<div class="dtable-cell">
								<a href="http://qa.fxoro.com/register/" class="cssecoBtn animationbtn">				
									Open an account
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 loginH">
						<div class="dtable">
							<div class="dtable-cell">
								<a href="http://qa.fxoro.com/login/" class="cssecoBtn animationbtn">				
									Login
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<header id="header" class="site_header fp_header">
			<div class="container d-block d-lg-none pt-3 pt-lg-0">
				<div class="row">
					<div class="col-6 align-middle">
						<div class="dtable">
							<div class="dtable-cell">
								<a href="<?php echo get_option("siteurl"); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/imgs/logo_old_black.png" alt="Logo" class="logo header_logo">
								</a>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="burger open">
							<i class="fas fa-bars"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="container d-none d-lg-block">
				<div class="row">
					<div class="col-12 topHeaderD">
						<a href="<?php echo get_option("siteurl"); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/imgs/logo_old.png" alt="Logo" class="logo header_logo">
						</a>
						<div class="h_i_W clearfix">
							<div class="langW">
								<span class="flag-icon flag-icon-gb"></span>
								ENG
								<i class="fas fa-caret-down"></i>
							</div>
							<div class="phoneW">
								<i class="fas fa-phone-volume"></i>
								+357.25.20.5555 
							</div>
							<div class="openaccW">
								<a href="http://qa.fxoro.com/register/" class="cssecoBtn animationbtn">				
									Open an account
								</a>
							</div>
							<div class="loginW">
								<a href="http://qa.fxoro.com/login/" class="cssecoBtn animationbtn">				
									Login
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 menu-col">
						<?php
                            wp_nav_menu( array( 
                                'theme_location'        =>      'primary',
                                'container'             =>      'nav',
                                'container_class'       =>      'header_menu',
                                'container_id'          =>      'cssecoMenu' //
                            ) );
                        ?>
					</div>
				</div>
			</div>
			<div class="container fp">
				<div class="row">
					<div class="col-12 col-lg-6 text-center text-lg-left">
						<div class="dtable">
							<div class="dtable-cell">
								<h1>
									When the broker becomes
									<span>your best business partner</span>
								</h1>
								<p>
									Join a professional and modern 
									<span>community of ambitious traders</span>
								</p>
								<a href="http://qa.fxoro.com/private-area/fund/deposit/" class="cssecoBtn animationbtn">
									<span>
										I’m Ready to Trade!
									</span>
									<span>
										Start your investment journey now!
									</span>
								</a>
								<p>Your capital is at risk.</p>
<!--
								<div class="row">
									<div class="col-12 text-center capRsk">
										Your capital is at risk.
									</div>
								</div>
-->
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6 d-none d-lg-block text-center">
						<div class="hfp2ImgWrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/imgs/fp/fp2/screen.png" alt="Screens" class="screens" style="visibility: hidden;">
							<img src="<?php echo get_template_directory_uri(); ?>/imgs/fp/fp2/screenIcons.png" alt="Screens Icons" class="screenIcons" style="visibility: hidden;">
						</div>
					</div>
				</div>
			</div>
			<svg class="svgshape black" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 35" preserveAspectRatio="none" width="100%">
				<polygon points="0,35 1920,0 1920,1920" style="fill:rgba(0,0,0,.5);"></polygon>
			</svg>
			<svg class="svgshape white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 35" preserveAspectRatio="none" width="100%">
				<polygon points="0,35 1920,0 1920,1920" style="fill:white;"></polygon>
			</svg>
		</header><!-- /#header -->
		<div id="primary" class="content-area">
				
				
	