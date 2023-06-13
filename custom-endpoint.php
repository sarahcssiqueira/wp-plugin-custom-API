<?php
/*
*
* Plugin Name:       Custom Routes and Endpoint 
* Description:       Custom the return of your API.
* Plugin URI:        https://sarahjobs.com/wordpress/plugins/custom-routes-endpoints
* Description:       Custom the return of your API.
* Version:           1.0.0
* Requires at least: 4.7
* Requires PHP:      7.4
* Author:            Sarah Siqueira
* Author URI:        https://sarahjobs.com/about
* License:           GPLv2 or later
* License URI:       https://www.gnu.org/licenses/gpl.html
* Text Domain:       custom-endpoint
* Domain Path:       /languages
* Update URI:        https://sarahjobs.com/wordpress/plugins/custom-routes-endpoints/update
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
