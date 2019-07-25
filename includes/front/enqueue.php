<?php
/**
  * @package fxoroVone
  * includes/front/enqueue.php
  */

function csseco_load_scripts() {
	
	// Bootstrap style
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all' );
	if ( is_page(739) ) {
		 wp_enqueue_style( 'mte', 'https://s3-eu-west-1.amazonaws.com/data.mte-media.com/react/main.css', array(), 'all' );
	}
	// Flags styles
	wp_enqueue_style( 'csseco_flags_styles', get_template_directory_uri().'/vendor/flags/flag-icon.css', array(), '1.0.0', 'all' );
	// Owl Carousel styles
	wp_enqueue_style( 'owl_carousel', get_template_directory_uri().'/vendor/owl_carousel/owl.carousel.min.css', array(), '2.3.4', 'all' );
	// Owl Carousel default styles
	wp_enqueue_style( 'owl_carousel_default', get_template_directory_uri().'/vendor/owl_carousel/owl.theme.default.min.css', array(), '2.3.4', 'all' );
	// Animate.css
	wp_enqueue_style( 'animate-css', get_template_directory_uri().'/vendor/animate.css', array(), '3.7.0', 'all' );
	// Main styles
	wp_enqueue_style( 'csseco_styles', get_template_directory_uri().'/css/csseco.css', array(), '1.0.0', 'all' );
	
	
	// Deregister jquery
	wp_deregister_script( 'jquery' );
	// Jquery in footer(down)
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', false, '3.3.1', false );
	wp_enqueue_script( 'jquery' );
	// Owl Carousel scripts
	wp_enqueue_script( 'owl_carousel', get_template_directory_uri().'/vendor/owl_carousel/owl.carousel.min.js', array('jquery'), '1.14.7', true );	
	// Popper.js
	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '1.14.7', true );
	// Bootstrap scripts
	wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true );
	//chart js
	wp_enqueue_script( 'chart-js', 'https://cdn.jsdelivr.net/npm/chart.js@2.8.0',array(),'2.0.0', false  );
	
	if ( is_front_page() ) {
		// api js
		wp_enqueue_script( 'api-js', get_template_directory_uri() . '/vendor/api-service/api.js', array(), '2.0.0', true );
		
		// Particles.js 
		wp_enqueue_script( 'particles-js', get_template_directory_uri() . '/vendor/particles/particles.min.js', array('jquery'), '2.0.0', true );
		// Particles.js json
		wp_enqueue_script( 'particles-json', get_template_directory_uri() . '/vendor/particles/particles.json', array('jquery'), '2.0.0', true );
		// validate js
		wp_enqueue_script( 'validate', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js', array('jquery'), true );
		// google phone library
		wp_enqueue_script( 'libphone-number', 'https://cdn.jsdelivr.net/npm/libphonenumber-js@1.7.19/bundle/libphonenumber-max.js', array('jquery'), true );
		// register form
		wp_enqueue_script( 'register-form', get_template_directory_uri().'/js/register-form.js', array('jquery') , true );
		// // google recaptcha
		// wp_enqueue_script( 'recaptcha', 'https://www.google.com/recaptcha/api.js?render=6Le4j6oUAAAAAN7GKHwFX7AGMJ0QMI0Tjo7f2PrT', array(), true );
		// jquery redirect
		wp_enqueue_script( 'jquery-redirect', get_template_directory_uri().'/js/jquery.redirect.js', array('jquery') , true );
	}
	
	// Visible.js
	wp_enqueue_script( 'visible-js', get_template_directory_uri() . '/vendor/jquery.visible.min.js', array('jquery'), '1.0.0', true );
	// Maphilight
	wp_enqueue_script( 'maphilight', get_template_directory_uri().'/vendor/jquery.maphilight.min.js', array('jquery'), '1.4.0', true );
	// rwdImageMaps
	wp_enqueue_script( 'rwdImageMaps', get_template_directory_uri().'/vendor/jquery.rwdImageMaps.min.js', array('jquery'), '1.6.0', true );
	// imageMapResizer.js
	wp_enqueue_script( 'imagemapresizer-js', get_template_directory_uri() . '/vendor/imageMapResizer.min.js', array('jquery'), '1.0.9', true );
	
	// FontAwesome scripts
	wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/js/all.js', array('jquery'), '5.8.1', true );
	
	// contact us page AND affiliates page
	if ( is_page(135) || is_page(130) ){
		// Validate js scripts
		wp_enqueue_script( 'validate', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js', array('jquery'), true );
		wp_enqueue_script( 'libphone-number', 'https://cdn.jsdelivr.net/npm/libphonenumber-js@1.7.19/bundle/libphonenumber-max.js', array('jquery'), true );
		wp_enqueue_script( 'contact-form', get_template_directory_uri().'/js/contact-form.js', array('jquery') , true );
		wp_enqueue_script( 'recaptcha', 'https://www.google.com/recaptcha/api.js?render=6Le4j6oUAAAAAN7GKHwFX7AGMJ0QMI0Tjo7f2PrT', array(), true );
	}
	// MT4 page or MT4 for MAC or partner-with-us
	if ( is_page(236) || is_page( 680) || is_page(629)){
		// validate js
		wp_enqueue_script( 'validate', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js', array('jquery'), true );
		// google phone library
		wp_enqueue_script( 'libphone-number', 'https://cdn.jsdelivr.net/npm/libphonenumber-js@1.7.19/bundle/libphonenumber-max.js', array('jquery'), true );
		// register form
		wp_enqueue_script( 'register-form', get_template_directory_uri().'/js/register-form.js', array('jquery') , true );
		// google recaptcha
		// wp_enqueue_script( 'recaptcha', 'https://www.google.com/recaptcha/api.js?render=6Le4j6oUAAAAAN7GKHwFX7AGMJ0QMI0Tjo7f2PrT', array(), true );

		// jquery redirect
		wp_enqueue_script( 'jquery-redirect', get_template_directory_uri().'/js/jquery.redirect.js', array('jquery') , true );

	}


	// new-regulation-mifid-ii-and-its-impact-on-retail-clients/ Criteria form js
	if (  is_page(756) ){
		// Validate js scripts
		
		wp_enqueue_script( 'validate', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js', array('jquery'), true );
		wp_enqueue_script( 'criteria', get_template_directory_uri().'/js/criteria-form.js', array('jquery') , true );
		// wp_enqueue_script( 'recaptcha', 'https://www.google.com/recaptcha/api.js?render=6Le4j6oUAAAAAN7GKHwFX7AGMJ0QMI0Tjo7f2PrT', array(), true );
	}
	// basic-course page
	if (  is_page(262) ){
		wp_enqueue_script( 'basic-course', get_template_directory_uri().'/js/basic-course-mte.js', array('jquery') , true );
		// wp_enqueue_script( 'recaptcha', 'https://www.google.com/recaptcha/api.js?render=6Le4j6oUAAAAAN7GKHwFX7AGMJ0QMI0Tjo7f2PrT', array(), true );
	}
	// become a professional
	if (  is_page(770) ){
		// Validate js scripts
		wp_enqueue_script( 'libphone-number', 'https://cdn.jsdelivr.net/npm/libphonenumber-js@1.7.19/bundle/libphonenumber-max.js', array('jquery'), true );
		wp_enqueue_script( 'validate', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js', array('jquery'), true );
		// wp_enqueue_script( 'recaptcha', 'https://www.google.com/recaptcha/api.js?render=6Le4j6oUAAAAAN7GKHwFX7AGMJ0QMI0Tjo7f2PrT', array(), true );
		wp_enqueue_script( 'become-prof', get_template_directory_uri().'/js/become-proffessional.js', array('jquery') , true );
		wp_enqueue_script( 'jquery-redirect', get_template_directory_uri().'/js/jquery.redirect.js', array('jquery') , true );
	}
	if (  is_page(126) ){
		// Validate js scripts
		wp_enqueue_script( 'libphone-number', 'https://cdn.jsdelivr.net/npm/libphonenumber-js@1.7.19/bundle/libphonenumber-max.js', array('jquery'), true );
		wp_enqueue_script( 'validate', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js', array('jquery'), true );
		wp_enqueue_script( 'referral', get_template_directory_uri().'/js/referral.js', array('jquery') , true );
		// wp_enqueue_script( 'recaptcha', 'https://www.google.com/recaptcha/api.js?render=6Le4j6oUAAAAAN7GKHwFX7AGMJ0QMI0Tjo7f2PrT', array(), true );
		// wp_enqueue_script( 'jquery-redirect', get_template_directory_uri().'/js/jquery.redirect.js', array('jquery') , true );
	}

	
	// Main scripts
	wp_enqueue_script( 'csseco_scripts', get_template_directory_uri().'/js/csseco.js', array('jquery'), '1.0.0', true );
	
}
add_action( 'wp_enqueue_scripts', 'csseco_load_scripts' ); 