<?php

function menuItem() {
    $itemMenu = [];
    $main_menu = wp_get_nav_menu_items('menu-test');
    foreach($main_menu as $key => $menu) {
        $itemMenu[$menu->menu_item_parent][] =$menu;
    }

    return $itemMenu;
}

function getCategory() {
    $id = get_cat_ID('Lifestyle');
    $categories = get_posts(array(
        'posts_per_page' => 3,
        'category'       => $id
    ));

    return $categories;
}

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars()
{
    register_sidebar(
        [
            'id' => 'primary',
            'name' => 'Primary Sidebar',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ]
    );
}