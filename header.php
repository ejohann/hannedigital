<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>
      <?php bloginfo(' name '); ?>
    </title> 
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name='viewport' content='width=device-width, initial-scale = 1.0' />
    <link rel='stylesheet' href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Oswald" rel="stylesheet" />
    <?php wp_head(); ?>
  </head>
  <body>
    <div class='container'>
      
     <header class='site_header'>
        <h1>
          <a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a>
        </h1>
        
        <div class='top_search'>
          <?php get_search_form(); ?>
        </div> <!-- CLOSE TOP SEARCH -->
        
        <div class='clearfix'></div> 
     </header>
     
     <nav class='main_nav'> 
        <?php 
          wp_nav_menu(array(' theme_location' => 'main-menu' ));
        ?>
      </nav>
    
 
   
                     
   
