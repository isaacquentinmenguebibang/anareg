<?php
/**
 * Custom header implementation
 */

function aagaz_startup_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'aagaz_startup_custom_header_args', array(

		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'aagaz_startup_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'aagaz_startup_custom_header_setup' );

if ( ! function_exists( 'aagaz_startup_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see aagaz_startup_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'aagaz_startup_header_style' );
function aagaz_startup_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        #masthead .main-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'aagaz-startup-basic-style', $custom_css );
	endif;
}
endif; // aagaz_startup_header_style