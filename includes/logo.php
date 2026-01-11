<?php
add_action('wp_enqueue_scripts', function () {
    // Add logo if present through customiser
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_url($custom_logo_id, 'full');

    if (empty($logo)) {
        $logo = get_stylesheet_directory_uri() . '/images/logo.svg';
    }

    wp_localize_script(
        'minified-scripts',
        'logo',
        [
            'image' => $logo,
            'alt' => get_bloginfo('site_name'),
        ]
    );
}, 100);
