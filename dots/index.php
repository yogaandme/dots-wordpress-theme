<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>
         <?php wp_title(''); ?>
      </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php wp_head(); ?>
   </head>
   <body>
      <!-- Start blog display -->
      <div class="wrapper">
         <!-- Header -->
         <div class="site_header">
            <div class="site_title">
               <a href="<?php echo home_url(); ?>">
               <?php bloginfo('name'); ?>
               </a>
            </div>
            <div class="site_tagline">
               <a href="<?php echo home_url(); ?>">
               <?php bloginfo('description'); ?>
               </a>
            </div>
         </div>
         <?php
            wp_nav_menu(array(
                'menu_class' => "menu_top",
                'theme_location' => 'extra-menu',
                'container_class' => 'menu_top'
            ));
            ?>
         <!-- Posts Area -->
         <div class="posts_area">
            <?php if (have_posts()):
               while (have_posts()):
                   the_post(); ?>
            <article class="post" role="article" itemscope itemtype="http://schema.org/Article">
               <?php
                  // check if the post or page has a Featured Image assigned to it.
                  if (has_post_thumbnail())
                  {
                      the_post_thumbnail();
                  }
                  ?>
               <h1 class="title">
                  <a class href="<?php the_permalink() ?>">
                  <?php the_title(); ?>
                  </a>
               </h1>
               <div class="post_meta">
                  <time class="post_date" datetime="<?php the_time('Y-m-d'); ?>">
                  <?php esc_html_e( 'Posted on', 'dots' ); ?> <?php the_time( esc_html__( 'F j, Y', 'dots' ) ); ?> &#x25cf; 
                  <?php esc_html_e( 'Last updated on', 'dots' ); ?> <?php the_modified_date( esc_html__( 'F j, Y', 'dots' ) ); ?>
                  </time>
               </div>
               <div class="postcontent_list" itemprop="articleBody" data-type-cleanup="true">
                  <?php the_content('Read More &raquo;'); ?>
               </div>
            </article>
            <?php
               endwhile;
               endif; ?>
         </div>
         <div id = "comments_area">
            <h3 id = "comments_title">Comments</h3>
            <?php comments_template(); ?>
         </div>
         <!-- Footer -->
         <footer class="site_footer">
            <?php wp_nav_menu(array(
               'menu_class' => "menu_bottom",
               'theme_location' => 'secondary',
               'container_class' => 'menu_bottom'
               )); ?> 
            <p>© <?php bloginfo('name'); ?></p>
         </footer>
      </div>
      <!-- End blog display -->
      <?php wp_footer(); ?>
   </body>
</html>