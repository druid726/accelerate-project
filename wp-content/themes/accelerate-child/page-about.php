<?php
/**
 * Template Name: About Custom Page
 * Description: Custom About Page for Accelerate Marketing.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

// Code to display Page goes here...

get_header(); ?>

      
  <div class="site-content">
    <?php while ( have_posts() ) : the_post();
      $our_services = get_field('our_services');
      $description = get_field('description');
      $image = get_field('image');
      $size = 'full';
      $our_services_1 = get_field('our_services_1');
      $description_1 = get_field('description_1');
      $image_1 = get_field('image_1');
      $size = 'full';
      $our_services_2 = get_field('our_services_2');
      $description_2 = get_field('description_2');
      $image_2 = get_field('image_2');
      $size = 'full';
      $our_services_3 = get_field('our_services_3');
      $description_3 = get_field('description_3');
      $image_3 = get_field('image_3');
      $size = 'full';
    ?>

<section class="about-page">
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
          <?php if($image) {
            echo wp_get_attachment_image( $image, $size );
          } ?>
        </div><!--about-images-->


        <aside class="about-sidebar-1">
          <h2><?php echo $our_services_1; ?></h2>
          <h6><?php echo $description_1; ?></h6>
          <?php the_content(); ?>
        </aside>

        <div class="about-images-1">
          <?php if($image_1) {
            echo wp_get_attachment_image( $image_1, $size );
          } ?>
        </div><!--about-images-->

        <aside class="about-sidebar">
          <h2><?php echo $our_services_2; ?></h2>
          <h6><?php echo $description_2; ?></h6>
          <?php the_content(); ?>
        </aside>

        <div class="about-images">
          <?php if($image_2) {
            echo wp_get_attachment_image( $image_2, $size );
          } ?>
        </div><!--about-images-->


        <aside class="about-sidebar-1">
          <h2><?php echo $our_services_3; ?></h2>
          <h6><?php echo $description_3; ?></h6>
          <?php the_content(); ?>
        </aside>

        <div class="about-images-1">
          <?php if($image_3) {
            echo wp_get_attachment_image( $image_3, $size );
          } ?>
        </div><!--about-images-->


      <?php endwhile; // end of the loop. ?>

</section>
    </div><!-- #content -->
<?php get_footer(); ?>
