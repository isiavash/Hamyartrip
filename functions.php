<?php
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'wp_enqueue_scripts', 'hamyartrip' );
function hamyartrip() {
 wp_enqueue_style( 'Bootstrap', get_template_directory_uri() . '/style.css', array(), '4.0.0' );
 wp_enqueue_style( 'BootstrapRTL', get_template_directory_uri() . '/assets/css/bootstrap-rtl.css', array(), '4.0.0' );
 wp_enqueue_style( 'nucleo', get_template_directory_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css', array(), '4.0.0' );
 wp_enqueue_style( 'owldef', get_template_directory_uri() . '/assets/css/owl.theme.default.css', array(), '4.0.0' );
 wp_enqueue_style( 'owlmin', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '4.0.0' );
 wp_enqueue_style( 'demo', get_template_directory_uri() . '/assets/vendor/nucleo/css/nucleo.css', array(), '4.0.0' );




}
add_filter('show_admin_bar', '__return_true');
