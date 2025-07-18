<?php
/**
 * The post meta information template.
 *
 * Show categories, tags, comment and edit links after post.
 *
 * @package fair-parent
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

namespace Fair_Parent;

function entry_footer() {
  echo '<div class="entry-footer">';

  if ( 'post' === get_post_type() ) :
    if ( has_category() ) : ?>
      <ul class="categories">
        <?php $categories = wp_get_post_categories( get_the_id(), [ 'fields' => 'all' ] );
          if ( ! empty( $categories ) ) {
            foreach ( $categories as $category ) {
              echo '<li><a href="' . esc_url( get_category_link( $category ) ) . '">' . esc_html( $category->name ) . '</a></li>';
            }
        } ?>
      </ul>
    <?php	endif;

    $tags_list = get_the_tag_list( '', esc_attr_x( ', ', 'list item separator', 'fair-parent-theme' ) );
    if ( $tags_list ) {
      the_tags( '<ul class="tags"><li>', '</li><li>', '</li></ul>' );
    }
  endif;

  if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
    echo '<span class="comments-link">
    <svg width="16" height="16" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M1408 768q0 139-94 257t-256.5 186.5-353.5 68.5q-86 0-176-16-124 88-278 128-36 9-86 16h-3q-11 0-20.5-8t-11.5-21q-1-3-1-6.5t.5-6.5 2-6l2.5-5 3.5-5.5 4-5 4.5-5 4-4.5q5-6 23-25t26-29.5 22.5-29 25-38.5 20.5-44q-124-72-195-177t-71-224q0-139 94-257t256.5-186.5 353.5-68.5 353.5 68.5 256.5 186.5 94 257zm384 256q0 120-71 224.5t-195 176.5q10 24 20.5 44t25 38.5 22.5 29 26 29.5 23 25q1 1 4 4.5t4.5 5 4 5 3.5 5.5l2.5 5 2 6 .5 6.5-1 6.5q-3 14-13 22t-22 7q-50-7-86-16-154-40-278-128-90 16-176 16-271 0-472-132 58 4 88 4 161 0 309-45t264-129q125-92 192-212t67-254q0-77-23-152 129 71 204 178t75 230z"/></svg> ';
    comments_popup_link( sprintf( wp_kses( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'fair-parent-theme' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
    echo '</span>';
  }

  echo '</div>';
}
