<?php

/*==========================================
Get Menus
==========================================*/

function get_options() {
  $fields = get_fields('options');
  if($fields) {
    return $fields;
  }
  else {
    return [];
  }
}

/*==========================================
Menus Custom Endpoint
==========================================*/

add_action( 'rest_api_init', function () {
  register_rest_route( 'gbf/v2', '/options', array(
    'methods' => 'GET',
    'callback' => 'get_options',
  ));
});

?>