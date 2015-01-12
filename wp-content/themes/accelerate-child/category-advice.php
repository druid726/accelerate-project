<?php
/**
 * The template for displaying Advice Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 * Patti O'Neill - pdoneill26@gmail.com
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Child Theme
 * @author Patti O'Neill
 */

get_header(); ?>

<div class="container wrap">
    <?php if ( have_posts() ) : ?>

  <header class="top-head-title">
    <?php printf( __( 'Posts categorized as <span>%s</span>', 'accelerate-child' ), single_cat_title( '', false ) ); ?>
  </header><!-- .category-header -->
    <div class="main-content">

        <?php
          // Show an optional term description.
          $term_description = term_description();
          if ( ! empty( $term_description ) ) :
            printf( '<div class="taxonomy-description">%s</div>', $term_description );
          endif;
        ?>

      <?php
      // Start the Loop.
      while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; ?>
      <!-- next / prev here -->
    <?php else: ?>
      <article class="no_post">
        <h4>No posts found!</h4>
      </article>
    <?php endif; ?>
  <?php get_sidebar(); ?>
  </div><!-- #main-content -->
</div><!-- container wrap -->
<?php

get_footer();
