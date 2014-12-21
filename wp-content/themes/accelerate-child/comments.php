<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 * Patti O'Neill - pdoneill26@gmail.com
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
<div class="comments-area">
 * entered the password we will return early without loading the comments.
 */
// if ( post_password_required() ) {
//   return;
// }
?>

  <?php if ( have_comments() ) : ?>

  <h5 class="comments-title">
    <?php
      printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'accelerate-child' ),
        number_format_i18n( get_comments_number() ), get_the_title() );
    ?>
  </h5>

<!--This is calling the custom function 'mytheme_comment' in functions.php - whiich will override the default in comment-template.php -->

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
 <nav id="comment-nav-above" class="navigation comment-navigation">
   <!-- <h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'accelerate-child' ); ?></h1> -->
   <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'accelerate-child' ) ); ?></div>
   <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'accelerate-child' ) ); ?></div>
 </nav><!-- #comment-nav-above -->
 <?php endif; // Check for comment navigation. ?>

  <ul class="comment-list">
  <?php wp_list_comments( 'type=comment&callback=mytheme_comment' ); ?>
  </ul><!-- comment-list-->


  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
  <nav id="comment-nav-below" class="navigation comment-navigation">
    <h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'accelerate-child' ); ?></h1>
    <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'accelerate-child' ) ); ?></div>
    <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'accelerate-child' ) ); ?></div>
  </nav><!-- #comment-nav-below -->
  <?php endif; // Check for comment navigation. ?>

  <?php if ( ! comments_open() ) : ?>
  <p class="no-comments"><?php _e( 'Comments are closed.', 'accelerate-child' ); ?></p>
  <?php endif; ?>

  <?php endif; // have_comments() ?>


  <?php 
    $comments_args = array(
        //change Leave a Reply to Leave a Comment
      'title_reply'=>"Leave a Comment",
      );
  ?>comment_form($comments_args); ?>

</div><!-- #comments -->