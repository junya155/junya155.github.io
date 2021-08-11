 <!-- Header -->
 <?php wp_body_open(); ?>
 <div class="header">

   <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
 </div>
 <?php
  $menu_name = 'global_nav';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object($locations[$menu_name]);

  $menu_items = wp_get_nav_menu_items($menu->term_id);
  ?>
 <div class="container-fluid">
   <div class="menubar">
     <?php foreach ($menu_items as $item) : ?>
       <ul class="items">
         <li class="item"><a href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
       </ul>
     <?php endforeach; ?>
     <div class="menu"><i class="fas fa-bars"></i></div>
   </div>
   <div class="box"></div>
 </div>