<?php
/**
  * @package fxoroVone
  * includes/back/functions-admin.php
  *
  */
function csseco_add_admin_page() {
	
	/**
	 * ================
	 *      Generate main theme option page
	 * ================
	 */
	add_menu_page( 
		__('CSSeco Theme Option', 'fxoroVone'),
		__('CSSeco Theme', 'fxoroVone'),
		'manage_options',
		'csseco_theme_options_page',
		'csseco_theme_create_page',
		get_template_directory_uri() . '/imgs/csseco_admin_icon.png',
		110
	);
	
	/**
	 * ================
	 *      Generate main theme option secondary page/pages
	 * ================
	 */
	add_submenu_page( // page #1(same as csseco_theme_options_page)
		'csseco_theme_options_page',
		__('CSSeco Theme Option', 'fxoroVone'),
		__('General Settings', 'fxoroVone'),
		'manage_options',
		'csseco_theme_options_page',
		'csseco_theme_create_page'
	);
	
	add_submenu_page( // page #2
		'csseco_theme_options_page',
		__('Sidebar Settings', 'fxoroVone'),
		__('Theme Settings', 'fxoroVone'),
		'manage_options',
		'csseco_theme_options_page_2',
		'csseco_theme_support_page'
	);
	
	
	
	// Activate custom settings
	add_action( 'admin_init', 'fxoroVone_custom_settings' );
	
}
add_action( 'admin_menu', 'csseco_add_admin_page' );



/**
 * ================
 *      Custom Settings api
 * ================
 */
function fxoroVone_custom_settings() {
	
	/***
	  * General Settings Page - settings, sections and fields
	  */
	// Settings
	register_setting( 'fxoroVone-setting-group', 'logo' ); // picture upload
	register_setting( 'fxoroVone-setting-group', 'tw', 'csseco_sanitize_twitter_handler' );
	register_setting( 'fxoroVone-setting-group', 'fb');
	register_setting( 'fxoroVone-setting-group', 'gp' );
	
	// Sections
	add_settings_section( 'fxoroVone-main-options', __( 'General Settings', 'fxoroVone' ), 'fxoroVone_general_options', 'csseco_theme_create_page' );
	add_settings_section( 'fxoroVone-mainsm-options', __( 'Social Media Settings', 'fxoroVone' ), 'fxoroVone_social_options', 'csseco_theme_create_page' );
	
	// Fields
	add_settings_field( 'logo-setting', __( 'Logo', 'fxoroVone' ), 'fxoroVone_logo', 'csseco_theme_create_page', 'fxoroVone-main-options' );
	add_settings_field( 'tw-setting', 'Twitter', 'fxoroVone_smtw', 'csseco_theme_create_page', 'fxoroVone-mainsm-options' );
	add_settings_field( 'fb-setting', 'Facebook', 'fxoroVone_smfb', 'csseco_theme_create_page', 'fxoroVone-mainsm-options' );
	add_settings_field( 'gp-setting', 'Google +', 'fxoroVone_smgp', 'csseco_theme_create_page', 'fxoroVone-mainsm-options' );
	
	/***
	  * Theme Settings Page - settings, sections and fields
	  */
	// Settings
	register_setting( 'fxoroVone-theme-support', 'csseco_post_formats', 'fxoroVone_post_formats_callback' );
	
	// Sections
	add_settings_section( 'fxoroVone-theme-options', __( 'Theme Settings', 'fxoroVone' ), 'fxoroVone_theme_options', 'csseco_theme_support_page' );
	
	// Fields
	add_settings_field( 'post-formats', __( 'Post Formats', 'fxoroVone' ), 'fxoroVone_post_formats', 'csseco_theme_support_page', 'fxoroVone-theme-options' );
	
}



/**
 * ================
 *      Sanitization and Callback Functions
 * ================
 */
function fxoroVone_post_formats_callback( $input ) {
	return $input;
}

function csseco_sanitize_twitter_handler( $input ) {
	$output = sanitize_text_field( $input );
	$output = str_replace( '@', '', $output );
	return $output;
}

/**
 * ================
 *      Pages code generation
 * ================
 */
function csseco_theme_create_page() {
	require_once( get_template_directory() . '/includes/back/templates/csseco-general-opts.php' );
	
}

function csseco_theme_support_page() {
	require_once( get_template_directory() . '/includes/back/templates/csseco-theme-opts.php' );
}