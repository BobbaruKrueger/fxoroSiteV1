<?php
/**
 * @package fxoroVone
 * includes/front/template-parts/fp/fp-fxvid.php
 */
?>
	<section id="section8fp" class="vid">
		<video loop id="vidVid">
			<source src="<?php echo get_template_directory_uri(); ?>/videos/Trade_Like_a_Lion.mp4" type="video/mp4">
		</video>
		<div class="videofirstframe" id="videofirstframe">
			<img src="<?php echo get_template_directory_uri(); ?>/imgs/fp/videofirstframe.jpg" alt="First Frame">
		</div>
		<div class="overlay" id="overlay"></div>
		<div class="container" id="cntnt">
			<div class="row">
				<div class="col-12">
					<div class="logo_W">
						<img src="<?php echo get_template_directory_uri(); ?>/imgs/logo_old.png" alt="Logo" class="logo">
					</div>
					<h3>
						Professional. Modern.<br> Customer-oriented.
					</h3>
					<div class="control">
						<i class="far fa-play-circle play" onClick="playPause(this,'vidVid')"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="ctrlW" id="ctrlW">
			<div class="container" id="ctrls">
				<div class="row">
					<div class="col-12">
						<i class="far fa-pause-circle pause" id="pause" onClick="playPause(this,'vidVid')"></i>
						<i class="fas fa-volume-mute mute" id="mute" onClick="muteUn(this, 'vidVid')"></i>
						<i class="fas fa-volume-up mute d-none" id="unmute" onClick="muteUn(this, 'vidVid')"></i>
					</div>
				</div>
			</div>
		</div>
	</section>