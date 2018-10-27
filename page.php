<?php

?>
<?php get_header(); ?>

 <div class='page_content'>
   <div class='inner_content'>
     <div class='page_title'>
        <h1><?php the_title(); ?></h1>
        <div class='blog'>
           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               <p><?php the_content(); ?></p>
           <?php endwhile; else: ?>
              no posts found.
            <?php endif; ?>
             
            
        </div>
     </div>
   </div>
 </div>
<?php get_footer(); ?>