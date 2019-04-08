<?php
/**
  * @package fxoroVone
  * header-fp.php
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
	<div id="site-wrapper" class="csseco-front-page">
		<div id="bmenu" class="d-block d-lg-none fp_bmenu">
			<div class="container">
				<div class="row" style="padding-bottom: 15px;">
					<div class="col-6 align-middle">
						<div class="dtable">
							<div class="dtable-cell">
								<a href="<?php echo get_option("siteurl"); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/imgs/fxoro_logo.png" alt="Logo" class="logo header_logo">
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
								<a href="#" class="cssecoBtn animationbtn">				
									Open an account
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 loginH">
						<div class="dtable">
							<div class="dtable-cell">
								<a href="#" class="cssecoBtn animationbtn">				
									Login
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<header id="header" class="site_header fp_header">
			<video autoplay muted loop id="bgVid">
				<source src="<?php echo get_template_directory_uri(); ?>/videos/video.webm" type="video/webm">
			</video>
			<div class="container d-block d-lg-none pt-3 pt-lg-0">
				<div class="row">
					<div class="col-6 align-middle">
						<div class="dtable">
							<div class="dtable-cell">
								<a href="<?php echo get_option("siteurl"); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/imgs/fxoro_logo.png" alt="Logo" class="logo header_logo">
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
							<img src="<?php echo get_template_directory_uri(); ?>/imgs/fxoro_logo_white.png" alt="Logo" class="logo header_logo m-0 ">
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
								<a href="#" class="cssecoBtn animationbtn">				
									Open an account
								</a>
							</div>
							<div class="loginW">
								<a href="#" class="cssecoBtn animationbtn">				
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
					<div class="col-12 col-lg-7 col-xl-7 d-none d-lg-block">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/fp/hpct.png" alt="Platform" class="img-fluid" style="opacity: .8; display: none;">
					</div>
					<div class="col-12 col-lg-5 col-xl-4 text-center">
						<h1>
							<span>FX<span style="color: #ffb401;">ORO</span></span><br>
							when the broker<br>
							becomes your<br>
							best partner
						</h1>
						<a href="#" class="cssecoBtn animationbtn">
							<span>
								I’m Ready to Trade!
							</span>
							<span>
								Start your investment journey now!
							</span>
						</a>
						<div class="row ub">
							<div class="col-6 text-right pl-0">
								<div class="flag-wrapper">
									<div class="dtable">
										<div class="dtable-cell">
											<div class="img-thumbnail flag flag-icon-background flag-icon-gb"></div>
										</div>
									</div>	
								</div>
								<div>
									<div class="dtable">
										<div class="dtable-cell text-left">
											<span>Registered with the FCA</span>
											<span>(FSA, UK), ref. no. 571351</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-6 text-left">
								<div class="flag-wrapper">
									<div class="dtable">
										<div class="dtable-cell">
											<div class="img-thumbnail flag flag-icon-background flag-icon-eu"></div>
										</div>
									</div>	
								</div>
								<div>
									<div class="dtable">
										<div class="dtable-cell">
											<span>(Regulated by CySEC</span>
											<span>license number 126/10)</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 text-center capRsk">
								Your capital is at risk.
							</div>
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
				
				
	