<?php

function load_css()
    {
        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
            array(), false, 'all');
        wp_enqueue_style('bootstrap');

        wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.4.0/css/all.css', array(), '5.4.0');

        wp_register_style('stylesheet', get_template_directory_uri() . '/src/main.css', '', 1, 'all');
        wp_enqueue_style('stylesheet');

        wp_register_style('abobe fonts', "https://use.typekit.net/yeb5ynu.css");
        wp_enqueue_style('adobe fonts');

        wp_register_style('google fonts', '<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">');
        wp_enqueue_style('google fonts');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',
    array('jquery'), false, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_js');

function custom_img_sizes()
{
    add_theme_support( 'post-thumbnails');
    add_image_size( 'small-thumb', 439, 566, true);
    add_image_size( 'large-thumb', 800, 400, true);
}
add_action('after_setup_theme', 'custom_img_sizes');

add_theme_support('menus');

add_theme_support('widgets');

//Menus
register_nav_menus(
    array(
        'nav-menu' => 'Nav Menu Location',
        'mobile-nav-menu' => 'Mobile Nav Menu Location',
        'mobile-account-menu' => 'Mobile Account Menu Location',
        'mobile-product-filter-menu' => 'Mobile Product Filter Menu',
    )
);

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
add_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 31 );

/**
 * Bypass logout confirmation and return user to the homepage.
 */
function bypass_logout_confirmation() {
	global $wp;

	if ( isset( $wp->query_vars['customer-logout'] ) ) {
		wp_redirect( str_replace( '&amp;', '&', wp_logout_url( home_url() ) ) );
		exit;
	}
}
add_action( 'template_redirect', 'bypass_logout_confirmation' );

function wc_save_account_details_required_fields( $required_fields ){
    unset( $required_fields['account_display_name'] );
    return $required_fields;
}
add_filter('woocommerce_save_account_details_required_fields', 'wc_save_account_details_required_fields' );

function login_error_message($error){

    //check if that's the error you are looking for
    $pos = strpos($error, 'incorrect');
    if (is_int($pos)) {
        //its the right error so you can overwrite it
        $error = "The password you entered doesn't match that account. Please try again. " . "<a href='http://speakout/my-account/lost-password/'>Reset your password here.</a>";
    }
    return $error;
}
add_filter('login_errors','login_error_message');

function username_error_message($error){
    //check if that's the error you are looking for
    $pos = strpos($error, 'username');
    if (is_int($pos)) {
        //its the right error so you can overwrite it
        $error = "Sorry, those details don't match. Check you've typed them correctly.";
    }
    return $error;
}
add_filter('login_errors','username_error_message');

function empty_field_error_message($error){
    //check if that's the error you are looking for
    $pos = strpos($error, 'Error');
    if (is_int($pos)) {
        //its the right error so you can overwrite it
        $error = "Username and password are required. Please check and try again.";
    }
    return $error;
}
add_filter('login_errors','empty_field_error_message');








 



