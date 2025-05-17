<?php
/**
 * Theme setup and supports.
 *
 * @package fair-parent
 **/

namespace Fair_Parent;

function theme_setup() {

  /**
   * Register menu locations
   */

  register_nav_menus( THEME_SETTINGS['menu_locations'] );

  /**
   * Load textdomain.
   */
  load_theme_textdomain( THEME_SETTINGS['textdomain'], get_template_directory() . '/languages' );

  /**
   * Define content width in articles
   */
  if ( ! isset( $content_width ) ) {
    $content_width = THEME_SETTINGS['content_width'];
  }
}

/**
 * Build theme support
 */
function build_theme_support() {
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'align-wide' );
  add_theme_support( 'wp-block-styles' );
  add_theme_support(
    'html5',
    [
      'search-form',
      'comment-form',
      'comment-list',
	  'navigation-widgets',
      'gallery',
      'caption',
      'script',
      'style',
    ]
  );
}
