<?php
/**
 * Single comment callback.
 *
 * @package fair-parent
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

namespace Fair_Parent;

function single_comment( $comment, $args, $depth ) {
?>
  <li id="li-comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
    <div id="comment-<?php comment_ID(); ?>">
      <?php echo get_avatar( $comment, '62' ); ?>
      <h3 class="comment-author"><?php echo get_comment_author_link(); ?></h3>

      <?php if ( '0' === $comment->comment_approved ) : ?>
        <p><em><?php esc_html_e( 'Your comment is awaiting approval.', 'fair-parent-theme' ); ?></em></p>
      <?php endif; ?>

      <p class="comment-time">
        <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
          <svg width="16" height="16" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1520 1216q0-40-28-68l-208-208q-28-28-68-28-42 0-72 32 3 3 19 18.5t21.5 21.5 15 19 13 25.5 3.5 27.5q0 40-28 68t-68 28q-15 0-27.5-3.5t-25.5-13-19-15-21.5-21.5-18.5-19q-33 31-33 73 0 40 28 68l206 207q27 27 68 27 40 0 68-26l147-146q28-28 28-67zm-703-705q0-40-28-68l-206-207q-28-28-68-28-39 0-68 27l-147 146q-28 28-28 67 0 40 28 68l208 208q27 27 68 27 42 0 72-31-3-3-19-18.5t-21.5-21.5-15-19-13-25.5-3.5-27.5q0-40 28-68t68-28q15 0 27.5 3.5t25.5 13 19 15 21.5 21.5 18.5 19q33-31 33-73zm895 705q0 120-85 203l-147 146q-83 83-203 83-121 0-204-85l-206-207q-83-83-83-203 0-123 88-209l-88-88q-86 88-208 88-120 0-204-84l-208-208q-84-84-84-204t85-203l147-146q83-83 203-83 121 0 204 85l206 207q83 83 83 203 0 123-88 209l88 88q86-88 208-88 120 0 204 84l208 208q84 84 84 204z"/></svg>
          <time datetime="<?php echo esc_attr( get_comment_date( 'c' ) ); ?>"><?php printf( esc_attr( __( '%1$s at %2$s', 'fair-parent-theme' ) ), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?></time>
        </a>
      </p>

      <?php comment_text();

      comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );
      edit_comment_link( __( '&mdash; Edit', 'fair-parent-theme' ), ' ', '' );
      ?>

    </div>
  </li>
<?php }
