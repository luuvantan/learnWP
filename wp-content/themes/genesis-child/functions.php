<?php
// function get_style() {
//     wp_register_style( 'main-style', get_template_directory_uri() . '/style.css', 'all' );
//     wp_enqueue_style( 'main-style' );
// }
// add_action( 'wp_enqueue_scripts', 'get_style' );

function register_my_menus() {
  register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __('Footer Menu'),
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

function menuItem() {
  $itemMenu = [];
  $main_menu = wp_get_nav_menu_items('menu-1');
  foreach($main_menu as $key => $menu) {
    $itemMenu[$menu->menu_item_parent][] =$menu;
  }

  return $itemMenu;
}
 
function register_widgets() {
  register_sidebar( array(
    'name' 			=> __( 'Footer A' ),
    'id' 			=> 'footer-a',
    'before_title' 	=> '<h3 class="widget-title">',
    'after_title' 	=> '</h3>',
    'before_widget' => '<div class="widget %2$s"><div class="widget-content"><ul>',
    'after_widget' 	=> '</ul></div><div class="clear"></div></div>'
  ) );
}
add_action( 'widgets_init', 'register_widgets' );

function menuFooter() {
  $item = [];
  $menu_footers = wp_get_nav_menu_items('footer');
  foreach($menu_footers as $key => $menu_footer) {
    $item[$menu_footer->menu_item_parent][] =$menu_footer;
  }

  return $item;
}
