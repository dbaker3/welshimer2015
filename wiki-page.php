<?php
/**
Template Name: Wiki Page
This template provides a method for presenting pages only to logged in users.
header.php detects if this template is used, and if so, displays headers, menus,
and styling differently.
*/

if (is_user_logged_in() ) { 

   get_header(); 
   ?>

   <div id="primary" class="site-content">
	   <div id="content" role="main">
	   	<?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'page' ); ?>
	   		<?php comments_template( '', true ); ?>
	   		<?php endwhile; // end of the loop. ?>
	   </div><!-- #content -->
   </div><!-- #primary .site-content -->

   <?php get_footer(); 

}
else { ?>
   <?php header( 'Location:' . wp_login_url(get_permalink()) ); ?>
<?php }
