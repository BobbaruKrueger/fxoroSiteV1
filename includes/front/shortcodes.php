<?php
/**
  * @package fxoroVone
  * includes/front/shortcodes.php
  *
  */
// Referral Friends Form shortcode
function csseco_referral_friends_form( $atts, $content = null ) {
	// [referral_friends_form]
	// get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'referral_friends_form'
	);
	// return HTML
	ob_start(); // Turn on the output buffering; ob = output buffering
	include 'templates/referral_form.php'; // this will be "saved" in ob_start
	return ob_get_clean(); // return the ob
}