<?php

/* ucitavanje css i js fajlova */
function myfirsttheme_scripts() {
    wp_enqueue_style( 'myfirsttheme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'myfirsttheme-font', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap' );

}
add_action( 'wp_enqueue_scripts', 'myfirsttheme_scripts' );

/* registracija menu delova */
function myfirsttheme_menus() {
    register_nav_menu( 'main-menu', 'Main Menu' );
}
add_action( 'after_setup_theme', 'myfirsttheme_menus' );

/* registracija featured slika */
add_theme_support( 'post-thumbnails' );

/* widgeti */
function myfirsttheme_widgets_init() {
register_sidebar( array (
'name' => __( 'Primary Widget Area'),
'id' => 'widget-sidebar',
'description' => __( 'The primary widget area'),
'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'widgets_init', 'myfirsttheme_widgets_init' );

/* gasenje editora */
define( 'DISALLOW_FILE_EDIT', true );