<?php
/*
This is a template file for the post content
*/
?>

<!-- THIS IS CONTENT-POST.PHP -->

    <?php
    //Here we are a little more specific about what we want to appear (which category, etc.)
      //$args = array(
        //'posts_status' => 'publish',
        //'category_name' => 'Updates, Advice',
        //'order' => 'ASC',
        //'orderby' => 'title',
        //'posts_per_page' => 5 );

        //query_posts($args);

        if (have_posts()):
          while (have_posts()):
            the_post();
            get_template_part('content', get_post_format());
          endwhile; ?>
        <?php endif; ?>  
