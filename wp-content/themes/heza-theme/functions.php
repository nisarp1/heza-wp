<?php
function heza_theme_enqueue_scripts()
{
    // Styles
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600;700;800;900&display=swap', array(), null);
    wp_enqueue_style('font-icons', get_template_directory_uri() . '/css/font-icons.css', array(), '1.0');
    wp_enqueue_style('car-icons', get_template_directory_uri() . '/demos/car/css/car-icons/style.css', array(), '1.0');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper.css', array(), '1.0');
    wp_enqueue_style('bs-select', get_template_directory_uri() . '/css/components/bs-select.css', array(), '1.0');
    wp_enqueue_style('rs-settings', get_template_directory_uri() . '/include/rs-plugin/css/settings.css', array(), '1.0');
    wp_enqueue_style('rs-layers', get_template_directory_uri() . '/include/rs-plugin/css/layers.css', array(), '1.0');
    wp_enqueue_style('rs-navigation', get_template_directory_uri() . '/include/rs-plugin/css/navigation.css', array(), '1.0');
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), '1.0');
    wp_enqueue_style('niche-demo', get_template_directory_uri() . '/demos/car/car.css', array(), '2');
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/css/custom.css', array(), '3');

    // Scripts
    wp_enqueue_script('jquery'); // Use WP's jQuery
    wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('functions-bundle', get_template_directory_uri() . '/js/functions.bundle.js', array('plugins'), '1.0', true);
    wp_enqueue_script('rotator', get_template_directory_uri() . '/demos/car/js/360rotator.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bs-select', get_template_directory_uri() . '/js/components/bs-select.js', array('jquery'), '1.0', true);

    // RS Plugin
    wp_enqueue_script('rs-tools', get_template_directory_uri() . '/include/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('rs-revolution', get_template_directory_uri() . '/include/rs-plugin/js/jquery.themepunch.revolution.min.js', array('rs-tools'), '1.0', true);

    // RS Extensions
    $rs_extensions = array(
        'actions',
        'carousel',
        'kenburn',
        'layeranimation',
        'migration',
        'navigation',
        'parallax',
        'slideanims',
        'video'
    );
    foreach ($rs_extensions as $ext) {
        wp_enqueue_script('rs-ext-' . $ext, get_template_directory_uri() . '/include/rs-plugin/js/extensions/revolution.extension.' . $ext . '.min.js', array('rs-revolution'), '1.0', true);
    }

    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('functions-bundle'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'heza_theme_enqueue_scripts');

function heza_theme_setup()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'heza-theme'),
    ));
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // Disable CF7 Auto Paragraph
    add_filter('wpcf7_autop_or_not', '__return_false');
}
add_action('after_setup_theme', 'heza_theme_setup');
?>