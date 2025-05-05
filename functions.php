<?php
/**
 * The Demo Theme functions and definitions
 */

function my_theme_setup() {
    // Load theme textdomain
    load_theme_textdomain('demo-theme');

    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_theme_support(
        'html5',
        array(
            'comment-form', 
            'comment-list', 
            'gallery', 
            'caption', 
            'script', 
            'style'
        )
    );

    // Register menus
    register_nav_menus(
        array(
            'header'    => __('Header Menu', 'demo-theme'),
            'footer'    => __('Footer Menu', 'demo-theme'),
            'footer-1'  => __('Footer Menu 1', 'demo-theme'),
            'footer-2'  => __('Footer Menu 2', 'demo-theme'),
            'footer-3'  => __('Footer Menu 3', 'demo-theme'),
            'social'    => __('Social Menu', 'demo-theme'),
        )
    );

}

add_action('after_setup_theme', 'my_theme_setup');

// Allow excerpts for pages
add_post_type_support('page', 'excerpt');

// Move Yoast SEO below ACF fields
function move_yoast_below_acf() {
    return 'low';
}
add_filter('wpseo_metabox_prio', 'move_yoast_below_acf');

// Enqueue styles and scripts
function theme_enqueue_scripts() {
    wp_enqueue_script('jquery');

    // Bootstrap 5
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');

    // Theme CSS
    wp_enqueue_style('theme-style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

// Custom Bootstrap 5 Walker Nav Menu
class Bootstrap_NavWalker extends Walker_Nav_Menu {
    
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="dropdown-menu">';
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $output .= '<li class="' . esc_attr($class_names) . '">';

        $atts = array();
        $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
        $atts['href'] = !empty($item->url) ? $item->url : '';

        if ($has_children) {
            $atts['class'] = 'nav-link dropdown-toggle';
            $atts['data-bs-toggle'] = 'dropdown';
        } else {
            $atts['class'] = 'nav-link';
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $attributes .= ' ' . esc_attr($attr) . '="' . esc_attr($value) . '"';
            }
        }

        $output .= '<a' . $attributes . '>';
        $output .= apply_filters('the_title', $item->title, $item->ID);
        $output .= '</a>';
    }
}


function wpse319485_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'wpse319485_add_woocommerce_support' );



function translate_test_load_theme_textdomain() {

  load_theme_textdomain( 'translate-test', get_template_directory() . '/languages' );

}

add_action( 'init', 'translate_test_load_theme_textdomain' );

// function woocommerce_gateway_stripe_init() {

//     if ( ! class_exists( 'WooCommerce' ) ) {

//         add_action( 'admin_notices', 'woocommerce_stripe_missing_wc_notice' );

//         return;

//     }

//     if ( version_compare( WC_VERSION, WC_STRIPE_MIN_WC_VER, '<' ) ) {

//         add_action( 'admin_notices', 'woocommerce_stripe_wc_not_supported' );

//         return;

//     }

//     woocommerce_gateway_stripe();

// }

// function woocommerce_gateway_stripe_load_textdomain() {

//     load_plugin_textdomain( 'woocommerce-gateway-stripe', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );

// }

// add_action( 'init', 'woocommerce_gateway_stripe_load_textdomain' );

// Include extra functions file
require get_parent_theme_file_path('/inc/demo-theme-extra-functions.php');
?>

