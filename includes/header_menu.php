<?php
add_action('wp_enqueue_scripts', function () {
    ob_start();
    wp_nav_menu ([
        "menu" => "Main Menu",
        "container" => false,
        "menu_class" => "mainMenu"
    ]);
    $header_menu = ob_get_clean();

    wp_localize_script('minified-scripts',
        'header',
        [
            'header_menu' => $header_menu
        ]
    );
}, 999);
