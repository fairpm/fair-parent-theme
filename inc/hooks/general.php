<?php
/**
 * General hooks.
 *
 * @package fair-parent
 */

namespace Fair_Parent;

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'fair-parent-theme' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'fair-parent-theme' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
} // end widgets_init
