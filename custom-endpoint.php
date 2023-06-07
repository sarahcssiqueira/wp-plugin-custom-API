<?php
/*
*
* Plugin Name: Custom Routes and Endpoint 
* Description: Custom the return of your API.
* Version: 0.0.1
* Author : Sarah Siqueira
* Requires: 4.7
*
*/
add_action('rest_api_init', 'custom_endpoint');

function custom_endpoint()
{
    register_rest_route(
        'mynamespace/v1',
        'myroute',
        array (
            'methods' => 'GET',
            'callback' => 'custom_endpoint_callback'
        )
    );
}

function custom_endpoint_callback( )
{
    $data = array();
     
    $data['content'] = 'Hi! Customize it for the specific needs of your project';
      
    return $data;
}

?>
