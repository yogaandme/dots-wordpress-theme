<?php   
   /*
   * Template Name: Dots Homepage Template
   * Custom template used for home
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
         <!-- Posts Area -->
         <div class="posts_area">
            <?php
               $args = $args = array(
               'post_type'=> 'post',
               'orderby'    => 'ID',
               'post_status' => 'publish',
               'order'    => 'DESC',
               'posts_per_page' => -1 // this will retrive all the post that is published
               );
               $posts = get_posts($args);
                  foreach ($posts as $post) : setup_postdata($post); ?>
            <div class = "home-page-post-title">
               <p>
                  <a href="
                     <?php the_permalink(); ?>">
                     <?php the_title(); ?> 
                     <word class = "read_more"> - Read more</word>
                  </a>
               </p>
            </div>
            <?php  endforeach; ?>
            <div class="topnav">
               <?php posts_nav_link(); ?>
            </div>
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