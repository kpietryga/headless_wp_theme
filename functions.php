<?php
// Unregister frontend styles and scripts of WooCommerce
add_action('wp_enqueue_scripts', function() {
    wp_dequeue_style('woocommerce-general');
    wp_dequeue_style('woocommerce-layout');
    wp_dequeue_style('woocommerce-smallscreen');
    wp_dequeue_script('wc-cart-fragments');
}, 99);

// Enable WooCommerce support
add_action('after_setup_theme', function() {
    add_theme_support('woocommerce');
});

// Disable page generation by WordPress
add_filter('template_include', function($template) {
    if (is_admin()) {
        return $template; // Backend works normally
    }
    // Return an empty template for frontend requests
    return get_template_directory() . '/index.php';
});

// Allow access to the REST API
add_filter('rest_authentication_errors', function($result) {
    if (!empty($result)) {
        return $result; // If the REST API is blocked
    }
    return true;
});

// Disable generator tags
remove_action('wp_head', 'wp_generator');
// Disable WordPress version in the footer
add_filter('the_generator', '__return_null');

add_action('rest_api_init', function() {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Authorization, Content-Type");
}, 15);