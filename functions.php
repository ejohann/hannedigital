<?php

  // enable menu option
  add_theme_support('menus');
  
  //enable featured image
  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 180, 120, true);
  add_image_size('banner-image', 1084, 210, true);
  
  //register menu 
 /* function register_my_menus()
   {
     register_nav_menus( 
     	array(
     	 'main-menu' => _('Primary Menu'),
     	 'footer-menu' => _('Footer Menu')
     	 )
     	 );
   }
   add_action('init','register_my_menus');
 
   */
   
   function set_menu_areas()
    {
      register_nav_menu('main-menu','Primary Menu');
      register_nav_menu('footer-menu','Footer Menu');
    }
  add_action('init','set_menu_areas');
  
  // Register Sidebar
  register_sidebar(array(
  	  'id' => 'right-sidebar',
  	  'name' => 'Right Sidebar',
  	  'before_widget' => '<div class="the-widget">',
  	  'after_widget' => '</div>',
  	  'before_title' => '<h2>',
  	  'after_title' => '</h2>',
  	  ));  
  
  function custom_excerpt_length()
   {
     return 25;
   }
   
   add_filter('excerpt_length', 'custom_excerpt_length');
?>