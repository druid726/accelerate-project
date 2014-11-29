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
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
  <!-- BLOG PAGE -->
  <section class="blog-page">
    <div class="site-content">
      <div class="main-content">
        
        <?php
      if ( have_posts() ) :
        // Start the Loop.
        while ( have_posts() ) : the_post(); ?>
        
          <article class="post-entry">
          <div class="entry-wrap">
            <header class="entry-header">
              <div class="entry-meta">
                <time class="entry-time" datetime="2014-09-29T04:33:51+00:00" itemprop="datePublished" title="Monday, September 29, 2014, 4:33 am"><?php the_date();?></time>
              </div>
              <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>
            <div class="entry-summary">
              <?php the_excerpt(); ?>
            </div>
            <footer class="entry-footer">
              <div class="entry-meta">
                <span class="entry-terms author">Written by <a href=""><?php the_author(); ?></a></span>
                <span class="entry-terms category">Posted in <a href=""><?php the_category(', '); ?></a></span>
                <span class="entry-terms commets"><a href="">Leave a Comment</a></span>
              </div>
            </footer>
          </div>
        </article>
      <?php endwhile; endif; ?>
      
      <?php if ( have_posts() ): ?>
          <div id="navigation">
              <div class="left"><p><?php next_posts_link('&laquo; <span>Older Posts</span>'); ?></p></div>
              <div class="right"><p><?php previous_posts_link('<span>Newer Posts</span> &raquo;'); ?></p></div>
          </div>
      <?php endif; ?>
      </div>
    </div>
  </section>
  <!-- END blog page -->
<?php get_footer();
