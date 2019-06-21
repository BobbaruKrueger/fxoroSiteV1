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
add_shortcode( 'referral_friends_form', 'csseco_referral_friends_form' );

// Trading Condition table
function csseco_trading_condition_table( $atts, $content = null ) {
	// [trading_condition_tables]
	// get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'trading_condition_tables'
	);
	// return HTML
	ob_start(); // Turn on the output buffering; ob = output buffering
	include 'templates/trading_conditions/trading_condition_tables.php'; // this will be "saved" in ob_start
	return ob_get_clean(); // return the ob
}
add_shortcode( 'trading_condition_tables', 'csseco_trading_condition_table' );

// Contact Friends Form shortcode
function csseco_contact_form( $atts, $content = null ) {
	// [csseco_contact_form]
	// get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'csseco_contact_form'
	);
	// return HTML
	ob_start(); // Turn on the output buffering; ob = output buffering
	include 'templates/contact_form.php'; // this will be "saved" in ob_start
	return ob_get_clean(); // return the ob
}
add_shortcode( 'csseco_contact_form', 'csseco_contact_form' );

// Criteria to qualify Form shortcode
function criteria_to_qualify_form( $atts, $content = null ) {
	// [criteria_to_qualify_form]
	// get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'criteria_to_qualify_form'
	);
	// return HTML
	ob_start(); // Turn on the output buffering; ob = output buffering
	include 'templates/criteria_to_qualify.php'; // this will be "saved" in ob_start
	return ob_get_clean(); // return the ob
}
add_shortcode( 'criteria_to_qualify_form', 'criteria_to_qualify_form' );

// Button + disclaimer
function csseco_btndiscf( $atts, $content = null ) {
	// [csseco_btndisc href="#" name="test"]
	// get the attributes
	$atts = shortcode_atts(
		array(
			'name' => ''
		),
		$atts,
		'csseco_btndisc'
	);
	$name = ( $atts['name'] == '' ? $content : $atts['name'] );
	return '
		<div style="max-width: 210px; text-align: center; display: inline-block;">
			<a class="cssecoBtn animationbtn" href="#">' . $atts['name'] . '</a>
			<p class="m-0">Your capital is at risk</p>
		</div>
	';
	// return HTML
//	ob_start(); // Turn on the output buffering; ob = output buffering
//	include 'templates/contact_form.php'; // this will be "saved" in ob_start
//	return ob_get_clean(); // return the ob
}
add_shortcode( 'csseco_btndisc', 'csseco_btndiscf' );