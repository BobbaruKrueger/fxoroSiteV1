<div id="bmenu" class="d-block d-lg-none">
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
