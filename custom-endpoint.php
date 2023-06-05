<?php
/*
*
* Plugin Name: Custom Endpoint X
* Author : Sarah Siqueira
* Requires: 4.7
*
*/
add_action ( 'rest_api_init', 'custom_endpoint');

function custom_endpoint () {
    register_rest_route (
        'mypost/v1',
        'author/x',
        array (
            'method' => 'GET',
            'callback' => 'functionX'
        )
    )
        }
?>

