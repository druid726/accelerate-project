<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Patti O'Neill - pdoneill26@gmail.com
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

  <div id="primary" class="site-content">
    <div class="ninja_forms">
      <?php while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>

    </div><!-- #ninja_forms -->
  </div><!-- #primary -->

<?php get_footer(); ?>