<article class="post-entry">
    <header class="entry-header">
      <div class="entry-meta">
        <time class="entry-time"><?php the_date(); ?></time>
      </div>
    <h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-summary">
    <?php the_content() ?>
  </div><!--entry-summary-->
  <footer class="entry-footer">
    <div class="entry-meta">
      <span class="entry-terms author">Written by <a><?php the_author(); ?></a></span>
      <span class="entry-terms category">Posted in <a><?php the_category(','); ?></a></span>
      <span class="entry-terms comments"><?php echo get_comments_number() ?> comments</span>       
    </div><!--entry-meta-->
  </footer>
</article>