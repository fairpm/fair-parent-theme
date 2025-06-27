<?php
/**
 * Site branding & logo
 *
 * @package fair-parent
 */

namespace Fair_Parent;

$description = get_bloginfo( 'description', 'display' );
?>

<div class="site-branding">

  <p class="site-title">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<?php include get_theme_file_path( THEME_SETTINGS['logo'] ); ?>
		<?php bloginfo( 'name' ); ?>
    </a>
  </p>

  <?php if ( $description || is_customize_preview() ) : ?>
    <p class="site-description screen-reader-text">
      <?php echo esc_html( $description ); ?>
    </p>
  <?php endif; ?>

</div>
