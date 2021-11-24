<?php

/*==========================================
Get Menus
==========================================*/

function get_menus() {
  // Blank object to populate with the different menus and their items.
  $menus = [];
  // Save the menu locations registered in the theme.
  $locations = get_nav_menu_locations();
  // Loop through each location.
  foreach ( $locations as $location => $id ) {
    // Save a blank object to populate with this menu locations items.
    $menu_items = [];
    // Get the nav menu items for this specific location.
    $nav_menu_items = wp_get_nav_menu_items($id);
    // Add each item title into our menu items list.
    foreach ($nav_menu_items as $item) {
      $menu_item_data = (object) [
        'title' => $item->title,
        'slug'  => sanitize_title($item->title)
      ];
      array_push($menu_items, $menu_item_data);
    }
    // Set the menu location with the curated data of menu item info.
    $menus[$location] = $menu_items;
  }
  return $menus;
}

/*==========================================
Menus Custom Endpoint
==========================================*/

add_action( 'rest_api_init', function () {
  register_rest_route( 'gbf/v2', '/menus', array(
    'methods' => 'GET',
    'callback' => 'get_menus',
  ));
});

?>