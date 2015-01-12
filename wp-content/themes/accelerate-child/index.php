<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 * Patti O'Neill - pdoneill26@gmail.com
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Child Theme
 * @author Patti O'Neill
 */

get_header(); ?>
  <!-- BLOG PAGE -->
  <section class="site-content">
    <div class="container wrap">
      <div class="main-content">       
<?php
      if ( have_posts() ) :
        // Start the Loop.
        while ( have_posts() ) : the_post(); ?>
        
          <article class="post-entry">
            <div class="entry-wrap">
              <header class="entry-header">
                <div class="entry-meta">
                  <time class="entry-time"><?php the_date();?></time>
                </div>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              </header>
              <div class="entry-summary">
                <?php the_excerpt() ?>
                <a href="<?php the_permalink() ?>" class="read-more-link">Read More ›</a>
              </div>
              <footer class="entry-footer">
                <div class="entry-meta">
                  <span class="entry-terms author">Written by <a href=""><?php the_author(); ?></a></span>
                  <span class="entry-terms category">Posted in <a href=""><?php the_category(', '); ?></a></span>
                  <span class="entry-terms comments"><?php comments_number('No Comments', 'One Comment', '% Comments' );?></span>     
                </div>
              </footer>
            </div>
          </article>
      <?php endwhile; endif; ?>
      </div>
  <?php get_sidebar(); ?>
    </div>
  </section>
  <!-- END blog page -->
      
      <?php if ( have_posts() ): ?>
          <footer class="navigation container">
              <div class="left"><?php next_posts_link('&laquo; Older Posts'); ?></div>
              <div class="right"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
          </footer>
      <?php endif; ?>
<?php get_footer(); ?>
