<?php
/**
 * The template for displaying Search Results pages
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
        <?php printf( __( 'Search Results for <span>%s</span>', 'accelerate-child' ), get_search_query() ); ?>
      </header><!-- .page-header -->

  <div class="main-content">
      <?php
        // Start the Loop.
        while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>
        <!-- next / prev here -->
      <?php else: ?>
        <article>
          <h4>No posts found!</h4>
        </article>
      <?php endif; ?>
  </div><!--#main-content-->
<?php get_sidebar(); ?>
</div><!-- container wrap -->
<?php get_footer(); ?>
