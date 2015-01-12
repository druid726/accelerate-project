<?php
/**
 * The template for displaying Search Results pages
 *
 *@link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Child Theme
 * @author Patti O'Neill
 */

get_header(); ?>

<!-- <section> -->
  <div class="container wrap">
      <?php if ( have_posts() ) : ?>
        <header class="top-head-title">
          <?php printf( __( 'Search Results for <span>%s</span>', 'accelerate-child' ), get_search_query('', false) ); ?>
        </header><!-- .search-header -->

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
          <header class="top-head-title">
            <?php printf( __( 'Search Results for <span>%s</span>', 'accelerate-child' ), get_search_query() ); ?>
          </header>
          <article class="no_post">
            <h4>No posts found!</h4>
          </article>
        <?php endif; ?>
      <?php get_sidebar(); ?>  
    </div><!--#main-content-->
  </div><!-- container wrap -->
</section>

<footer class="navigation container">
  <div class="left"><a href="http://localhost:8888/accelerate/blog">&larr;&nbsp;&nbsp;back to posts</a></div>
</footer>
<?php get_footer(); ?>
