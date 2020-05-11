<?php   
   /*
   * Template Name: Dots Default Page Template
   * Default template used for all pages
   * @package   Dots
   * @author    YogaAndMe team
   */
   ?>
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
            wp_nav_menu(
               array(
                 'menu_class'        => "menu_top",
                 'theme_location' => 'extra-menu',
                 'container_class' => 'menu_top'
               )
             );
            ?>

            <div class="posts_area page_content">
                
            <?php if (have_posts()):
               while (have_posts()):
                   the_post(); ?>
            <article class="post" role="article" itemscope itemtype="http://schema.org/Article">
         
               <div class="postcontent_list" itemprop="articleBody" data-type-cleanup="true">
                  <?php the_content('Read More &raquo;'); ?>
               </div>
               
            </article>
            <?php
               endwhile;
               endif; ?>
         </div>
         
         <!-- Footer -->
         <footer class="site_footer">
            <?php wp_nav_menu( array( 'menu_class' => "menu_bottom", 'theme_location' => 'secondary','container_class' => 'menu_bottom' ) ); ?> 
            <p>© <?php bloginfo('name'); ?></p>
         </footer>
      </div>
      <!-- End blog display -->
      <?php wp_footer(); ?>
   </body>
</html>