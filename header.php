<?php
/**
 * Template for header
 *
 * <head> section and everything up until <div id="content">
 *
 * @package fair-parent
 */

namespace Fair_Parent;

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class( 'no-js' ); ?>>
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fair-parent-theme' ); ?></a>

  <?php wp_body_open(); ?>
  <div id="page" class="site">

    <header class="site-header">
      <?php get_template_part( 'template-parts/header/branding' ); ?>
      <?php get_template_part( 'template-parts/header/navigation' ); ?>
    </header>

    <div class="site-content">
