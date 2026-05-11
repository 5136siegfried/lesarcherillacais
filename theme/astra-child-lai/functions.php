<?php
/**
 * Les Archers Illacais — functions.php
 */

// Chargement des styles
function lai_enqueue_styles() {
    wp_enqueue_style('astra-parent', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('lai-style', get_stylesheet_uri(), ['astra-parent'], '1.0.0');
    wp_enqueue_style('lai-fonts',
        'https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&family=Barlow+Condensed:wght@600;700&display=swap',
        [], null
    );
}
add_action('wp_enqueue_scripts', 'lai_enqueue_styles');

// Enregistrement des menus
function lai_register_menus() {
    register_nav_menus([
        'primary' => 'Menu principal',
        'footer'  => 'Menu pied de page',
    ]);
}
add_action('init', 'lai_register_menus');

// Support des images mises en avant et du logo
function lai_theme_support() {
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'lai_theme_support');
