<?php
  //*********Instead of @import Use enqueue ad recommended by WordPress Codex **********/

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyseventeen-style' for the Twenty Seventeen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
} 



// ////////////////////////////////// Custom Function to Include /////////////////////// //

function add_favicon() {
	echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_template_directory_uri().'/3.png" />';
}
 
add_action('wp_head', 'add_favicon');


// ////////////////////////////////// Menu Function to Include /////////////////////// //

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'Star Theme Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

// ///////////////////////////////// A widget function //////////////////

function new_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Star Theme Widget',
        'id'            => 'Star Theme Widget',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="new-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'new_widgets_init' );

//////
function my_custom_fallback_menu() {
  echo '<ul class="nav-menu">';
  wp_list_pages(array(
    'title_li' => '',
    'depth' => 1,
  ));
  echo '</ul>';
}

function register_my_menu() {
  register_nav_menu('primary', __('Primary Menu', 'your_theme_name'));
}
add_action('after_setup_theme', 'register_my_menu');

