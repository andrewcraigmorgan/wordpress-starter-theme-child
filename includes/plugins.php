<?php
add_filter('tgm_plugins_list', function ($plugins) {
    return [
        [
            'name' => 'Akismet Anti-Spam',
            'slug' => 'akismet',
            'required' => true,
            'force_activation' => true,
        ],
        [
            'name' => 'Redirection',
            'slug' => 'redirection',
            'required' => true,
            'force_activation' => true,
        ],
        [
            'name' => 'User Role Editor',
            'slug' => 'user-role-editor',
            'required' => true,
            'force_activation' => true,
        ],
    ];
}, 10, 1);
