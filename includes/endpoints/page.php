<?php

/*==========================================
Page
---
Add custom data to the pages cpt route.
==========================================*/

function page_model($data, $post, $request){

  // Create a custom data array for the exact data we'd like to access on the endpoint.

  $custom = array_merge(
    rest_featured_image_urls($post), 
    rest_acf_fields($post)
  );

  // Add the custom data to the rest of the data on the endpoint.

  $data->data['custom'] = $custom;
  
  return $data;

}

add_filter('rest_prepare_page', 'page_model', 10, 3);

?>