<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Post Types
    |--------------------------------------------------------------------------
    |
    | Here you may specify the post types to be registered by Poet using the
    | Extended CPTs library. <https://github.com/johnbillion/extended-cpts>
    |
    */

    'post' => [
        'faq' => [
            'enter_title_here' => 'Enter question here',
            'menu_icon' => 'dashicons-admin-comments',
            'supports' => ['title', 'editor', 'author', 'revisions'],
            'show_in_rest' => true,
            'has_archive' => false,
            'labels' => [
                'singular' => 'Question',
                'plural' => 'Questions',
            ],
        ],
        'citation' => [
            'enter_title_here' => 'Enter citation here',
            'menu_icon' => 'dashicons-admin-comments',
            'supports' => ['title', 'editor', 'author', 'revisions'],
            'show_in_rest' => true,
            'has_archive' => false,
            'labels' => [
                'singular' => 'Citation',
                'plural' => 'Citations',
            ],
        ],
        'blog' => [
            'enter_title_here' => 'Enter blog title',
            'menu_icon' => 'dashicons-welcome-write-blog',
            'supports' => ['title', 'editor', 'author', 'revisions', 'thumbnail', 'excerpt'],
            'show_in_rest' => true,
            'has_archive' => false,
            'labels' => [
                'singular' => 'Blog',
                'plural' => 'Blogs',
            ],
        ],
        'quote' => [
            'enter_title_here' => 'Enter quote title',
            'menu_icon' => 'dashicons-format-quote',
            'support' => ['title', 'editor', 'author', 'revisions', 'thumbnail', 'custom-fields'],
            'show_in_rest' => true,
            'has_archive' => false,
            'labels' => [
                'singular' => 'Quote',
                'plural' => 'Quotes',
            ],
        ],
        'tab' => [
            'enter_title_here' => 'Enter tab title',
            'support' => ['title', 'editor', 'author', 'revisions', 'thumbnail', 'custom-fields'],
            'show_in_rest' => true,
            'has_archive' => false,
            'labels' => [
                'singular' => 'Tab',
                'plural' => 'Tabs',
            ],
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Taxonomies
    |--------------------------------------------------------------------------
    |
    | Here you may specify the taxonomies to be registered by Poet using the
    | Extended CPTs library. <https://github.com/johnbillion/extended-cpts>
    |
    */

    'taxonomy' => [
        'page-cat' => [
            'links' => ['page'],
            'show_in_rest' => true,
            'labels' => [
                'singular' => 'Category',
                'plural' => 'Categories',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Blocks
    |--------------------------------------------------------------------------
    |
    | Here you may specify the block types to be registered by Poet and
    | rendered using Blade.
    |
    | Blocks are registered using the `namespace/label` defined when
    | registering the block with the editor. If no namespace is provided,
    | the current theme text domain will be used instead.
    |
    | Given the block `sage/accordion`, your block view would be located at:
    |   ↪ `views/blocks/accordion.blade.php`
    |
    | Block views have the following variables available:
    |   ↪ $data    – An object containing the block data.
    |   ↪ $content – A string containing the InnerBlocks content.
    |                Returns `null` when empty.
    |
    */

    'block' => [
        // 'sage/accordion',
    ],

    /*
    |--------------------------------------------------------------------------
    | Block Categories
    |--------------------------------------------------------------------------
    |
    | Here you may specify block categories to be registered by Poet for use
    | in the editor.
    |
    */

    'block_category' => [
        // 'cta' => [
        //     'title' => 'Call to Action',
        //     'icon' => 'star-filled',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Block Patterns
    |--------------------------------------------------------------------------
    |
    | Here you may specify block patterns to be registered by Poet for use
    | in the editor.
    |
    | Patterns are registered using the `namespace/label` defined when
    | registering the block with the editor. If no namespace is provided,
    | the current theme text domain will be used instead.
    |
    | Given the pattern `sage/hero`, your pattern content would be located at:
    |   ↪ `views/block-patterns/hero.blade.php`
    |
    | See: https://developer.wordpress.org/reference/functions/register_block_pattern/
    */

    'block_pattern' => [
        // 'sage/hero' => [
        //     'title' => 'Page Hero',
        //     'description' => 'Draw attention to the main focus of the page, and highlight key CTAs',
        //     'categories' => ['all'],
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Block Pattern Categories
    |--------------------------------------------------------------------------
    |
    | Here you may specify block pattern categories to be registered by Poet for
    | use in the editor.
    |
    */

    'block_pattern_category' => [
        'all' => [
            'label' => 'All Patterns',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Editor Palette
    |--------------------------------------------------------------------------
    |
    | Here you may specify the color palette registered in the Gutenberg
    | editor.
    |
    | A color palette can be passed as an array or by passing the filename of
    | a JSON file containing the palette.
    |
    | If a color is passed a value directly, the slug will automatically be
    | converted to Title Case and used as the color name.
    |
    | If the palette is explicitly set to `true` – Poet will attempt to
    | register the palette using the default `palette.json` filename generated
    | by <https://github.com/roots/palette-webpack-plugin>
    |
    */

    'palette' => true,

    /*
    |--------------------------------------------------------------------------
    | Admin Menu
    |--------------------------------------------------------------------------
    |
    | Here you may specify admin menu item page slugs you would like moved to
    | the Tools menu in an attempt to clean up unwanted core/plugin bloat.
    |
    | Alternatively, you may also explicitly pass `false` to any menu item to
    | remove it entirely.
    |
    */

    'admin_menu' => [
        // 'gutenberg',
    ],

];
