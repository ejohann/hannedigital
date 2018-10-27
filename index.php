
 <?php get_header(); ?>
 <div class='page_content'>
   <div class='inner_content'>
     <div class='page_title'>
       <h1>Hanne Digital</h1>       
     </div>
     <div class='content_left'>
       <div class='blog'>
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div class='post <?php if(has_post_thumbnail())
                            {?>
                     has-thumbnail         
                           <?php }
                          ?>'>
           <div class='post_thumbnail'>
                          <?php the_post_thumbnail('small-thumbnail'); ?>
           </div>
                          <h2 class='title'>
             <a href="<?php the_permalink(); ?>"> 
               <?php the_title(); ?> 
             </a> 
           </h2>
           <div class='author'> 
             Posted by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> 
                          <?php the_author() ?> 
                       </a> 
             on the <?php the_time('dS, F, Y'); ?> 
           </div>
         
           <p>
             <?php the_excerpt(); ?>
           </p>
           <div class='btn'>
             <a href="<?php the_permalink() ?>">Read More --> 
             </a>
           </div>
         </div>
         <?php endwhile; else: ?>
           <p style='margin-top: 20px;'>
             No posts found.
          </p>
         <?php endif; ?>   
       </div>
     </div>
     <div class='content_right'>
      <?php get_sidebar(); ?>
     </div>
     <div class='clearfix'>
     </div>
   </div>
 </div>
 <?php get_footer(); ?>