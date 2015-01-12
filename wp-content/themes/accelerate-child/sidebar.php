<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Child Theme
 * @author Patti O'Neill
 */
?>

  <aside class="right-aside">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
      <?php dynamic_sidebar( 'sidebar-1' ); ?>  
        <?php endif; ?>
        
          <div class="widget widget_search-form">
            <form role="search" method="get" class="search-form" action="">
              <input type="text" class="input" id="search-box-text" placeholder="Search " value="" name="s" title="">
              <input type="submit" id="searchsubmit" class="input-btn" value="">
            </form>
          </div>

          <div class="wrap">
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
          </div>
  </aside>