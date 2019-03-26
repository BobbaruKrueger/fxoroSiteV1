<?php
/**
  * @package fxoroVone
  * header.php
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
	<div id="site-wrapper">
		<div id="bmenu" class="d-block d-lg-none">
			<div class="container">
				<div class="row" style="padding-bottom: 15px;">
					<div class="col-6 align-middle">
						<div class="dtable">
							<div class="dtable-cell">
								<a href="<?php echo get_option("siteurl"); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/imgs/new_fxoro_logo.png" alt="Logo" class="logo header_logo">
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
					<div class="col-6 openaccH">
						<div class="dtable">
							<div class="dtable-cell">
								<a href="#" class="mhlink">
									Open an account
								</a>
							</div>
						</div>
					</div>
					<div class="col-6 loginH">
						<div class="dtable">
							<div class="dtable-cell">
								<a href="#" class="mhlink">
									Login
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<header id="header" class="site_header">
			<div class="container d-block d-lg-none pt-3 pt-lg-0">
				<div class="row">
					<div class="col-6 align-middle">
						<div class="dtable">
							<div class="dtable-cell">
								<a href="<?php echo get_option("siteurl"); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/imgs/new_fxoro_logo.png" alt="Logo" class="logo header_logo">
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
								<a href="#" class="mhlink">
									Open an account
								</a>
							</div>
							<div class="loginW">
								<a href="#" class="mhlink">
									Login
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<a href="<?php echo get_option("siteurl"); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/imgs/new_fxoro_logo.png" alt="Logo" class="logo header_logo">
						</a>
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
		</header><!-- /#header -->
		<div id="primary" class="content-area">
			<div class="container">
				<div class="row">
				
				
	