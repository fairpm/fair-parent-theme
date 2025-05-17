<?php
/**
 * Localization strings.
 *
 * @package fair-parent
 */

namespace Fair_Parent;

add_filter( 'air_helper_pll_register_strings', function() {
  $strings = [
    // 'Key: String' => 'String',
  ];

  /**
   * Uncomment if you need to have default air-light accessibility strings
   * translatable via Polylang string translations.
   */
  // foreach ( get_default_localization_strings( get_bloginfo( 'language' ) ) as $key => $value ) {
  // $strings[ "Accessibility: {$key}" ] = $value;
  // }

  return apply_filters( 'fair_parent_translations', $strings );
} );

function get_default_localization_strings( $language = 'en' ) {
  $strings = [
    'en'  => [
      'Add a menu'                                   => __( 'Add a menu', 'fair-parent-theme' ),
      'Open main menu'                               => __( 'Open main menu', 'fair-parent-theme' ),
      'Close main menu'                              => __( 'Close main menu', 'fair-parent-theme' ),
      'Main navigation'                              => __( 'Main navigation', 'fair-parent-theme' ),
      'Back to top'                                  => __( 'Back to top', 'fair-parent-theme' ),
      'Open child menu for'                          => __( 'Open child menu for', 'fair-parent-theme' ),
      'Close child menu for'                         => __( 'Close child menu for', 'fair-parent-theme' ),
      'Skip to content'                              => __( 'Skip to content', 'fair-parent-theme' ),
      'Skip over the carousel element'               => __( 'Skip over the carousel element', 'fair-parent-theme' ),
      'External site'                                => __( 'External site', 'fair-parent-theme' ),
      'opens in a new window'                        => __( 'opens in a new window', 'fair-parent-theme' ),
      'Page not found.'                              => __( 'Page not found.', 'fair-parent-theme' ),
      'The reason might be mistyped or expired URL.' => __( 'The reason might be mistyped or expired URL.', 'fair-parent-theme' ),
      'Search'                                       => __( 'Search', 'fair-parent-theme' ),
      'Block missing required data'                  => __( 'Block missing required data', 'fair-parent-theme' ),
      'This error is shown only for logged in users' => __( 'This error is shown only for logged in users', 'fair-parent-theme' ),
      'No results found for your search'             => __( 'No results found for your search', 'fair-parent-theme' ),
      'Edit'                                         => __( 'Edit', 'fair-parent-theme' ),
      'Previous slide'                               => __( 'Previous slide', 'fair-parent-theme' ),
      'Next slide'                                   => __( 'Next slide', 'fair-parent-theme' ),
      'Last slide'                                   => __( 'Last slide', 'fair-parent-theme' ),
    ],
    'fi'  => [
      'Add a menu'                                   => 'Luo uusi valikko',
      'Open main menu'                               => 'Avaa päävalikko',
      'Close main menu'                              => 'Sulje päävalikko',
      'Main navigation'                              => 'Päävalikko',
      'Back to top'                                  => 'Siirry takaisin sivun alkuun',
      'Open child menu for'                          => 'Avaa alavalikko kohteelle',
      'Close child menu for'                         => 'Sulje alavalikko kohteelle',
      'Skip to content'                              => 'Siirry suoraan sisältöön',
      'Skip over the carousel element'               => 'Hyppää karusellisisällön yli seuraavaan sisältöön',
      'External site'                                => 'Ulkoinen sivusto',
      'opens in a new window'                        => 'avautuu uuteen ikkunaan',
      'Page not found.'                              => 'Hups. Näyttää, ettei sivua löydy.',
      'The reason might be mistyped or expired URL.' => 'Syynä voi olla virheellisesti kirjoitettu tai vanhentunut linkki.',
      'Search'                                       => 'Haku',
      'Block missing required data'                  => 'Lohkon pakollisia tietoja puuttuu',
      'This error is shown only for logged in users' => 'Tämä virhe näytetään vain kirjautuneille käyttäjille',
      'No results for your search'                   => 'Haullasi ei löytynyt tuloksia',
      'Edit'                                         => 'Muokkaa',
      'Previous slide'                               => 'Edellinen dia',
      'Next slide'                                   => 'Seuraava dia',
      'Last slide'                                   => 'Viimeinen dia',
    ],
  ];

  return ( array_key_exists( $language, $strings ) ) ? $strings[ $language ] : $strings['en'];
} // end get_default_localization_strings

function get_default_localization( $string ) { // phpcs:ignore Universal.NamingConventions.NoReservedKeywordParameterNames.stringFound
  if ( function_exists( 'ask__' ) && array_key_exists( "Accessibility: {$string}", apply_filters( 'air_helper_pll_register_strings', [] ) ) ) {
    return ask__( "Accessibility: {$string}" );
  }

  return esc_html( get_default_localization_translation( $string ) );
} // end get_default_localization

function get_default_localization_translation( $string ) { // phpcs:ignore Universal.NamingConventions.NoReservedKeywordParameterNames.stringFound
  $language = get_bloginfo( 'language' );
  if ( function_exists( 'pll_the_languages' ) ) {
    $language = pll_current_language();
  }

  $translations = get_default_localization_strings( $language );

  return ( array_key_exists( $string, $translations ) ) ? $translations[ $string ] : '';
} // end get_default_localization_translation
