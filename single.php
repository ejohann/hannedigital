 <?php get_header(); ?>
 <div class='page_content'>
   <div class='inner_content'>
     <div class='blog'>
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <div class='author author-single'> 
         Posted by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> 
                     <?php the_author(); ?> 
                   </a> 
         on the <?php the_time('dS, F, Y'); ?> 
       </div>  
       <div class='page_title'>
         <h1><?php the_title(); ?></h1>
       </div>
       <?php the_post_thumbnail('banner-image'); ?>
       <p><?php the_content(); ?></p>
       <?php endwhile; else: ?>
         no posts found.
       <?php endif; ?>
     </div>
   </div>
 </div>
 <?php get_footer(); ?>