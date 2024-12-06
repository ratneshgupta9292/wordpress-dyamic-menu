 https://stackoverflow.com/questions/22742630/wp-nav-menu-add-class-on-ul
<?php 
 wp_nav_menu( array(
    'theme_location' => 'top-menu',
    'container' => 'ul',
    'menu_class'=> '[add-your-class-here]'
 ) ); 