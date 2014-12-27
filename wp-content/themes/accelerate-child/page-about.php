<?php
/**
 * Template Name: About Custom Page
 * Description: Custom About Page for Accelerate Marketing.
 *
 * Patti O'Neill - pdoneill26@gmail.com
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Child Theme
 * @author Patti O'Neill
 */

// Code to display Page goes here...

get_header(); ?>

      
<section class="about-page">
  <div class="site-content">
    <?php while ( have_posts() ) : the_post();
      $our_services = get_field('our_services');
      $description = get_field('description');
      $image = get_field('image');
      $our_services_1 = get_field('our_services_1');
      $description_1 = get_field('description_1');
      $image_1 = get_field('image_1');
      $our_services_2 = get_field('our_services_2');
      $description_2 = get_field('description_2');
      $image_2 = get_field('image_2');
      $our_services_3 = get_field('our_services_3');
      $description_3 = get_field('description_3');
      $image_3 = get_field('image_3');
      $size = 'full';
      $contact_us = get_field('contact_us');
    ?>

    <div class="about">
      <h2><a href="#">Accelerate</a> is a strategy and maketing agency located in the heart of NYC. Our goal is to build 
      businesses by making our clients visible and making their customers smile.</h2>
        <h3>Our Services</h3>
        <p>We take pride in our clients and the content we create for them. <br> Here's a brief overview of our offered services.</p>
    </div>
        <aside class="about-sidebar">
          <h2><?php echo $our_services; ?></h2>
          <h6><?php echo $description; ?></h6>
          <?php the_content(); ?>
        </aside>

        <div class="about-images">
          <figure>
            <?php echo wp_get_attachment_image( $image, $size ); ?>
          </figure>
        </div><!--about-images-->


        <aside class="about-sidebar-1">
          <h2><?php echo $our_services_1; ?></h2>
          <h6><?php echo $description_1; ?></h6>
          <?php the_content(); ?>
        </aside>

        <div class="about-images-1">
          <figure>
            <?php echo wp_get_attachment_image( $image_1, $size );?>
          </figure>
        </div><!--about-images-->

        <aside class="about-sidebar">
          <h2><?php echo $our_services_2; ?></h2>
          <h6><?php echo $description_2; ?></h6>
          <?php the_content(); ?>
        </aside>

        <div class="about-images">
          <?php echo wp_get_attachment_image( $image_2, $size ); ?>
        </div><!--about-images-->

        <aside class="about-sidebar-1">
          <h2><?php echo $our_services_3; ?></h2>
          <h6><?php echo $description_3; ?></h6>
          <?php the_content(); ?>
        </aside>

        <div class="about-images-1">
          <?php echo wp_get_attachment_image( $image_3, $size ); ?>
        </div><!--about-images-->
      <?php endwhile; // end of the loop. ?>
    </div><!--site content -->
  </section>
    <div class="site-content">
      <div class="about-tag">
          <h2><?php echo $contact_us; ?></h2>
          <a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
      </div><!-- about-tag -->
    </div><!-- #content -->

<?php get_footer(); ?>
