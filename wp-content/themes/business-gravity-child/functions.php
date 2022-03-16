<?php
/*creating child theme css */
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/* Adding local font*/
function add_local_fonts() {
	wp_enqueue_style( 'local_web_fonts', get_stylesheet_directory_uri() . '/fonts.css' );
}

add_action( 'enqueue_block_assets', 'add_local_fonts' );

/*for search form

if ( ! function_exists ( 'business_gravity_modify_search_form( $form )' ) ) {
    function business_gravity_modify_search_form( $form ) {
        // Contents of your function here.
    }
} */

/*for home*/
function business_gravity_inner_banner(){

	$description = false;

	if( is_archive() ){

		# For all the archive Pages.
		$title       = get_the_archive_title();
		$description = get_the_archive_description();
	}else if( !is_front_page() && is_home() ){

		# For Blog Pages.
		$title = single_post_title( '', false );
	}else if( is_search() ){

		# For search Page.
		$title = esc_html__( 'Search Results for: ', 'business-gravity' ) . get_search_query();
	}else if( is_front_page() && is_home() ){
		# If Latest posts page
		
		//$title = business_gravity_get_option( 'archive_page_title' );
		$title = business_gravity_get_option( 'archive_page_title' );		
		$subtitle = business_gravity_get_option( 'archive_page_subtitle' ); #added by rmorales 1/27/2020 for added header text and buttons		
		$signuptext = business_gravity_get_option( 'archive_button_signuptext' ); #added by rmorales 1/27/2020 for added header text and buttons		
		$comparetext = business_gravity_get_option( 'archive_button_comparetext' ); #added by rmorales 1/27/2020 for added header text and buttons		
		$signupurl = business_gravity_get_option( 'archive_button_signupurl' ); #added by rmorales 1/27/2020 for added header text and buttons		
		$compareurl = business_gravity_get_option( 'archive_button_compareurl' ); #added by rmorales 1/27/2020 for added header text and buttons		
		$disablesignup = business_gravity_get_option( 'disable_signup_button' ); #added by rmorales 1/27/2020 for added header text and buttons		
		$disablecompare = business_gravity_get_option( 'disable_compare_button' ); #added by rmorales 1/27/2020 for added header text and buttons
	}else{

		# For all the single Pages.
		$title = get_the_title();
	}

	$args = array(
		'title'       => $title,
		'description' => $description,		
		'titlesub' => $subtitle,   #added by rmorales 1/27/2020 for added header text and buttons		
		'signuptext' => $signuptext, #added by rmorales 1/27/2020 for added header text and buttons		
		'comparetext' => $comparetext, #added by rmorales 1/27/2020 for added header text and buttons		
		'signupurl' => $signupurl, #added by rmorales 1/27/2020 for added header text and buttons		
		'compareurl' => $compareurl, #added by rmorales 1/27/2020 for added header text and buttons		
		'disablesignup' => $disablesignup, #added by rmorales 1/27/2020 for added header text and buttons		
		'disablecompare' => $disablecompare #added by rmorales 1/27/2020 for added header text and buttons
	);
	$args = array(
		'title'       => $title,
		'description' => $description,
		'titlesub' => $subtitle   #added by rmorales 1/27/2020 for added header text and buttons
	);
	/**
	 * Check WordPress 5.5 or later.
	 */
	if ( version_compare( $GLOBALS['wp_version'], '5.5', '<' ) ) {
		set_query_var( 'args', $args );
		get_template_part( 'template-parts/inner', 'banner' );
	}else {
		get_template_part( 'template-parts/inner', 'banner', $args );
	}
}


?>