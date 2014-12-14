<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Accelerate Child Theme
 * @author Patti O'Neill
 */
?>
      <aside class="sidebar">
  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>  
      <?php endif; ?>
      
        <div class="widget widget_search-form">
          <form role="search" method="get" class="search-form" action="">
            <input type="text" class="input" placeholder="search" value="" name="s">
            <input type="button" class="input-btn" value="">
          </form>
        </div>

        <div class="widget widget_categories">
          <h3 class="widget-title">Categories</h3>    
          <ul class="no-styles">
           <?php wp_nav_menu(array('theme_location' => 'category-menu')); ?>
          </ul>
        </div>

        <div class="widget widget_archives">
          <h3 class="widget-title">Archives</h3>    
          <ul class="no-styles">
            <?php wp_get_archives( $args ); ?>
         </ul>
        </div>

  
</aside>