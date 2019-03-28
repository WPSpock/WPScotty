<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Misc
    |--------------------------------------------------------------------------
    |
    |
    */

    // Display/hide the admin bar in frontend
    'show_admin_bar' => false,

    // Hide the WordPress version
    'wp_version' => false,

    // cleanup the head
    'clean_wp_head' => true,

    // autentication by email
    'authenticate_email_password' => false,

    // feeds
    'feed' => true,

    /*
    |--------------------------------------------------------------------------
    | Comments
    |--------------------------------------------------------------------------
    |
    |
    */
    'comments' => [
        // remove author
        'author' => true,
        // remove the author link
        'author_link' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Posts
    |--------------------------------------------------------------------------
    |
    |
    */
    'posts' => [
        'excerpt_length' =>  '20'
    ],

    /*
    |--------------------------------------------------------------------------
    | Widgets
    |--------------------------------------------------------------------------
    |
    |
    */
    'shortcode' => true

];