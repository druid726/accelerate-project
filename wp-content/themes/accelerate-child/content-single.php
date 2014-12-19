<!-- THIS IS SINGLE.PHP -->
<!-- /*

This is what will be pulled in for a single blog post

*/ -->

<article class="individual-post" <?php post_class(); ?>>
  <header>
    <time class="entry-time"><?php the_date(); ?></time>
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <div class="post-entry img">
      <?php the_post_thumbnail(); ?>
    </div><!--post-entry img-->
  </header>
  <div class="entry-summary">
    <?php the_content(); ?>
  </div><!--entry-summary-->
  <div class="entry-footer">
    <div class="entry-meta">
      <span class="entry-terms author">Written by <a><?php the_author(); ?></a></span>
      <span class="entry-terms category">Posted in <a><?php the_category(', '); ?></a></span>
      <span class="entry-terms comments"><?php echo get_comments_number() ?> comments</span>     
    </div><!--entry-meta-->
  </div><!--entry-footer-->
</article>