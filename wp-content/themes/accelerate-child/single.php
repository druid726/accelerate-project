<?php
/**
 * The Template for displaying all single posts
 *
 * Patti O'Neill - pdoneill26@gmail.com
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

  <!-- SINGLE BLOG PAGE -->
  <section class="blog-page">
    <div class="container wrap">
      <div class="main-content">
<?php
        // Start the Loop.
        while ( have_posts() ) : the_post(); ?>

        <article class="post-entry individual-post">
          <div class="entry-wrap">
            <header class="entry-header">
              <div class="entry-meta">
                <time class="entry-time"><?php the_date(); ?></time>
                <h2 class="entry-title"><?php the_title(); ?></h2>
              </div>
            </header>
            <div class="entry-summary">
              <?php the_content(); ?>
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
        <?php comments_template(); ?>

        <?php endwhile; ?>

      </div>

<?php get_sidebar(); ?>
    </div>
  </section>
  <!-- END blog page -->

  <footer class="navigation container">
    <div class="left">&larr;<a href="http://localhost:8888/accelerate/?page_id=6">back to posts</a></div>
  </footer>
  

<?php get_footer(); ?>
