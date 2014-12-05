<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/case_studies">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .site content -->
</section><!-- .home-page -->

<section class="featured-work">
  <div class="site-content">
    <h4>Featured Work</h4>
    <div class="no-style">
      <ul>
        <?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
          <?php while( have_posts() ) : the_post(); 
            $image_1 = get_field("image_1");
            $size = "medium";
        ?>
        <li class="individual-featured-work">
          <div class="side-by-side">
            <figure>
             <?php echo wp_get_attachment_image($image_1, $size); ?> 
            </figure>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </div><!--side-by-side-->
        </li><!--individual-featured-work-->
        <?php endwhile; //end of loop ?>
        <?php wp_reset_query(); //resets the altered query back to the original ?>
      </ul>
    </div><!--site-content-->
  </div><!--no-style-->
</section><!-- featured-work -->

<section class="recent-posts">
  <div class="site-content">
    <div class="no-style">
      <div class="blog-post">
        <div class="blog-post-left">
          <h4>From the Blog</h4>
            <?php query_posts('posts_per_page=1'); ?>
            <?php while( have_posts() ) : the_post(); ?>
              <h2><?php the_title(); ?></h2>
              <?php the_excerpt(); ?>
              <h4><a href="<?php the_permalink(); ?>" class="read-more-link">Read More ›</a></h4>
            <?php endwhile; //end of loop ?>
            <?php wp_reset_query(); //resets the altered query back to the original ?>
        </div><!--blog-post-left-->
        <div class="blog-post-right">
          <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
          <div id="secondary" class="widget-area">
              <h4>Recent Tweet</h4>
              <?php dynamic_sidebar( 'sidebar-2' ); ?>
          </div>
        <?php endif; ?>
       </div><!--blog-post-right-->
      </div><!--blog-post-->
    </div><!-- no style -->
  </div><!--site content-->
</section><!--recent posts-->

<?php get_footer(); ?>