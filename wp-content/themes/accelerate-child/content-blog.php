<article class="post-entry">
    <header class="entry-header">
      <div class="entry-meta">
        <time class="entry-time"><?php the_date(); ?></time>
      </div>
    <h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-summary">
    <?php the_excerpt() ?>
    <a href="<?php the_permalink() ?>" class="read-more-link">Read More
    <span>&raquo;</span></a>
  </div><!--entry-summary-->
  <footer class="entry-footer">
    <div class="entry-meta">
      <span class="entry-terms author">Written by <a><?php the_author(); ?></a></span>
      <span class="entry-terms category">Posted in <a><?php the_category(' and '); ?></a></span>
      <span class="entry-terms comments"><?php comments_number('No Comments', 'One Comment', '% Comments' );?></span>       
    </div><!--entry-meta-->
  </footer>
</article>