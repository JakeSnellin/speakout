<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'bootstrap','stylesheet' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

/**
 * Hide shipping rates when free shipping is available.
 * Updated to support WooCommerce 2.6 Shipping Zones.
 *
 * @param array $rates Array of rates found for the package.
 * @return array
 */
function my_hide_shipping_when_free_is_available( $rates ) {
	$free = array();
	foreach ( $rates as $rate_id => $rate ) {
		if ( 'free_shipping' === $rate->method_id ) {
			$free[ $rate_id ] = $rate;
			break;
		}
	}
	return ! empty( $free ) ? $free : $rates;
}
add_filter( 'woocommerce_package_rates', 'my_hide_shipping_when_free_is_available', 100 );

//* Change Woo Product H1 Tag to H3
/*remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
add_action( 'woocommerce_single_product_summary', 'sgl_template_single_title', 5 );
function sgl_template_single_title() {
    the_title( '<h3 class="product_title entry-title">', '</h3>' );
}*/



/**
 * Show product thumbnail on checkout page.
 *
 * @see {templates|woocommerce}/checkout/review-order.php
 */


function custom_cart_message( $message, $products ) {

    $titles = array();
	$count  = 0;
    
    foreach ( $products as $product_id => $qty ) {
		/* translators: %s: product name */
		$titles[] = apply_filters( 'woocommerce_add_to_cart_qty_html', ( $qty > 1 ? absint( $qty ) . ' &times; ' : '' ), $product_id ) . apply_filters( 'woocommerce_add_to_cart_item_name_in_quotes', sprintf( _x( '&ldquo;%s&rdquo;', 'Item name in quotes', 'woocommerce' ), strip_tags( get_the_title( $product_id ) ) ), $product_id );
		$count   += $qty;
	}

        $titles = array_filter( $titles );
        /* translators: %s: product name */
        $added_text = sprintf( _n( '%s has been added to your cart.', '%s have been added to your cart.', $count, 'woocommerce' ), wc_format_list_of_items( $titles ) );


        //check if the setting to redirect a user to the cart after to their basket is set
        $user_is_being_redirected_to_cart = 'yes' === get_option( 'woocommerce_cart_redirect_after_add');


    if ($user_is_being_redirected_to_cart) {
        //this will redirect the user back to the shop page, if you want them to go somewhere else then change this value

        $return_to = apply_filters( 'woocommerce_continue_shopping_redirect', wc_get_raw_referer() ? wp_validate_redirect( wc_get_raw_referer(), false ) : wc_get_page_permalink( 'shop' ) );


        //use sprintf to build up the message string, the HTML below mimics the HTML WooCommerce uses by default
        $message   = sprintf( '<p>%s</p> <a href="%s" class="button wc-forward">%s</a>', esc_html( $added_text ), esc_url( $return_to ), esc_html__( 'Continue shopping', 'woocommerce' ));
    } else {
        //this will redirect the user back to the cart, if you want them to go somewhere else then change this value
        $return_to = esc_url( wc_get_page_permalink( 'cart' ) );
        //use sprintf to build up the message string, the HTML below mimics the HTML WooCommerce uses by default
        $message   = sprintf( '<p>%s</p> <a href="%s" class="button wc-forward">%s</a>', esc_html( $added_text ), $return_to , esc_html__( 'View cart', 'woocommerce' ));
    }
    return $message;
}
add_filter( 'wc_add_to_cart_message_html', 'custom_cart_message', 10, 2 );

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
add_action( 'woocommerce_before_shop_loop_item_title', 'custom_loop_product_thumbnail', 10 );

function custom_loop_product_thumbnail() {
    global $product;
    $size = 'small-thumb';

    $image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );

    echo $product ? $product->get_image( $image_size ) : '';
}

add_action( 'woocommerce_after_add_to_cart_form', 'custom_content_after_add_to_cart_btn' );
 
function custom_content_after_add_to_cart_btn(){
    //add text OR HTML here 
    echo '<a href="#" target="_blank"><div class="size-guide-container"><div class="inner-container">
    <div class="size-guide-icon"></div></div><div id="size-guide-label">See Size Guide</div></div></a>';
}

remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt', 20);

add_action( 'woocommerce_before_single_variation', 'woocommerce_template_single_excerpt');

add_action('woocommerce_single_product_summary', 'add_hr_tag', 15);

function add_hr_tag(){
    echo '<hr>';
}

add_action( 'woocommerce_after_add_to_cart_quantity', 'ts_quantity_plus_sign' );
 
function ts_quantity_plus_sign() {
   echo '<button type="button" class="plus" >+</button>';
}
 
add_action( 'woocommerce_before_add_to_cart_quantity', 'ts_quantity_minus_sign' );
function ts_quantity_minus_sign() {
   echo '<button type="button" class="minus" >-</button>';
}

add_theme_support( 'wc-product-gallery-zoom' );

remove_theme_support( 'wc-product-gallery-lightbox' );

add_theme_support( 'wc-product-gallery-slider' );

?>

<?php

add_filter( 'woocommerce_form_field', 'checkout_fields_inline_label_error', 10, 4 );

function checkout_fields_inline_label_error( $field, $key, $args, $value ) {
    
   if ( strpos( $field, '</span>' ) !== false && $args['required'] ) {
      $error = '<span class="error" style="display:none">';
      $error .= sprintf( __( '%s is a required field *', 'woocommerce' ), $args['label'] );
      $error .= '</span>';
      $field = substr_replace( $field, $error, strpos( $field, '</span>' ), 0);
   }
   return $field;
}


function ShowOneError($fields, $errors){
    //if their are any validation errors

    if(!empty($errors->get_error_codes())){
        //remove all error messages

        foreach($errors->get_error_codes() as $code){
            $errors->remove($code);
        }

        //our custom Error msg

        $errors->add('validation', 'Invalid or missing information. Please check again.');
    }
}

add_action('woocommerce_after_checkout_validation','ShowOneError', 999, 2);
 

function custom_returning_customer_message() {
return 'Already have an account?';
}


add_filter( 'woocommerce_checkout_login_message', 'custom_returning_customer_message' );

add_filter( 'woocommerce_cart_item_name', 'product_image_on_checkout', 10, 3 );
 
function product_image_on_checkout( $name, $cart_item, $cart_item_key ) {
     
    /* Return if not checkout page */
    if ( ! is_checkout() ) {
        return $name;
    }
     
    /* Get product object */
    $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
 
    /* Get product thumbnail */
    $thumbnail = $_product->get_image('checkout-thumb');
 
    /* Add wrapper to image and add some css */
    $image = '<div class="checkout-product-image">'
                . $thumbnail .
            '</div>'; 

    $name = '<span class="product-title">' . $name . '</span>';
 
    /* Prepend image to name and return it */
    return $image . $name;
}


















 





