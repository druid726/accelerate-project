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
     <?php $method = $_SERVER['REQUEST_METHOD']; ?> 

       <div class="contact-form"> 

         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

         <?php if ($method == 'POST' ): ?> 
           <?php the_content() ?> 

         <?php else: ?> 

           <h3><?php the_title() ?></h3> 
           <p>Have a question? Want to talk development? Feel free to leave us a message and we’ll reply as soon as possible!</p> 

         <?php the_content() ?> 

         <?php endif; ?> 

         <?php endwhile; endif; ?> 

       </div><!--contact-form-->  
    </div><!-- #ninja_forms -->
  </div><!-- #primary -->

<?php get_footer(); ?>