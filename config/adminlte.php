<?php

use Illuminate\Contracts\Auth\CanResetPassword;

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => '',
    'title_prefix' => 'Máquinas de Ganancias | ',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => 'Suite <b>MDG</b>',
    'logo_img' => 'images/logo.png',
    'logo_img_class' => 'brand-image img-circle elevation-4',
    'logo_img_xl' => NULL,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Suite MDG',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-info',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => '',
    'classes_auth_header' => 'bg-gradient-info',
    'classes_auth_body' => '',
    'classes_auth_footer' => 'text-center',
    'classes_auth_icon' => 'fa-lg text-info',
    'classes_auth_btn' => 'btn-flat btn-primary',
    /*'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',*/

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */
    /*SLIDEBAR DERECHA */
    'classes_body' => '',
    'classes_brand' => 'bg-gradient-dark',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => 'card card-body true',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-info elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-dark navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => true,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-dark',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 400,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'dashboard',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false, //'userprofile',

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => false,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        /*[
            'type' => 'sidebar-menu-search',
            'text' => 'search',
        ],*/
        // [
        //     'text' => 'blog',
        //     'url'  => 'admin/blog',
        //     'can'  => 'manage-blog', //LA DIRECTIVA BLOG PERMITE DAR ACCESO POR ROLES
        // ],
        [
            'text'        => 'Inicio',
            'url'         => '/dashboard',
            'icon'        => 'fa fa-home',
            //'class'        => 'bg-light'
            //'label'       => 4,
            //'label_color' => 'success',
        ],
        /**
         * SOLO PARA ADMINISTRADORES
         */
        // [
        //     'header' => 'AFILIADOS',
        //     //'can' => 'administrador'
        // ],
        // [
        //     'text' => 'Administrar',
        //     'url'  => 'admin/settings',
        //     'icon' => 'fa fa-star',
        //     //'can' => 'administrador'
        // ],

        ['header' => 'PLAN DE TRADING'],
        [
            'text' => 'Mis Operaciones',
            'url'  => 'plantrading',
            'icon' => 'fa fa-star',
        ],
        [
            'text'    => 'Mis estadísticas',
            'icon'    => 'fa fa-star',
            'submenu' => [
                [
                    'text' => 'Todo',
                    'icon' => 'fa fa-globe',
                    'icon_color' => 'blue',
                    'url'  => 'misestadisticas',
                ],
                [
                    'text' => 'Ganadas',
                    'icon' => 'fa fa-signal',
                    'icon_color' => 'green',
                    'url'  => 'misestadisticas/ganadas',
                ],
                [
                    'text' => 'Perdidas',
                    'icon' => 'fa fa-signal',
                    'icon_color' => 'red',
                    'url'  => 'misestadisticas/perdidas',
                ],
                [
                    'text' => 'Empatadas',
                    'icon' => 'fa fa-signal',
                    'url'  => 'misestadisticas/empatadas',
                ],
            ],
        ],
        ['header' => 'PSICOTRADING'],
        [
            'text'       => 'Before Trading',
            'icon'         => 'fa fa-star',
            'url'        => 'psicotrading/before-trading',
        ],
        // [
        //     'text'       => '¿Soy adicto al trading?',
        //     'icon'         => 'fa fa-star',
        //     'url'        => '#',
        // ],
        // [
        //     'text'       => 'Mis reglas para operar',
        //     'icon'         => 'fa fa-star',
        //     'url'        => '#',
        // ],
        // [
        //     'text'       => 'Consejos y Tips',
        //     'icon'         => 'fa fa-star',
        //     'url'        => '#',
        // ],
        [
            'text'       => 'Entrena tu mente',
            'icon'         => 'fa fa-star',
            'url'        => 'psicotrading/galeria/videos',
        ],
        // [
        //     'text'       => 'Actividades y cuestionarios',
        //     'icon' => 'fa fa-star',
        //     'url'        => '#',
        //     'submenu' =>
        //     [
        //         [
        //             'text' => '¿Soy adicto al trading?',
        //             'icon' => false, //'fa fa-star fa fa-star',
        //             'url'  => '#',
        //         ],
        //         [
        //             'text' => 'Mis reglas para operar',
        //             'icon' => false, //'fa fa-star fa fa-star' ,
        //             'url'  => '#',
        //         ],
        //     ]
        // ],
        // [
        //     'text'       => 'Galería',
        //     'icon' => 'fa fa-star',
        //     'url'        => '#',
        //     'submenu' =>
        //     [
        //         [
        //             'text' => 'Videos',
        //             'icon' => false, //'fa fa-star',
        //             'url'  => 'psicotrading/galeria/videos',
        //         ],
        //         [
        //             'text' => 'Consejos y Tips',
        //             'icon' => false, //'fa fa-star',
        //             'url'  => '#',
        //         ],
        //         [
        //             'text' => 'Libros',
        //             'icon' => false, //'fa fa-star',
        //             'url'  => '#',
        //             'submenu' =>
        //             [
        //                 [
        //                     'text' => 'Trading',
        //                     'icon' => false, //'fa fa-star',
        //                     'url'  => '#',
        //                 ],
        //                 [
        //                     'text' => 'Entrena tu mente',
        //                     'icon' => false, 'fa fa-star',
        //                     'url'  => '#',
        //                 ],
        //             ]
        //         ],
        //     ]
        // ],

        ['header' => 'MATERIAL EXTRA'],
        [
            'text'       => 'Galería',
            'icon'         => 'fa fa-star',
            'url'        => 'material-extra/galeria',
        ],
        // [
        //     'text'       => 'Galería',
        //     'icon' => 'fa fa-star',
        //     'url'        => '#',
        //     'submenu' =>
        //     [
        //         [
        //             'text' => 'Material de Apoyo',
        //             'icon' => false, //'fa fa-star fa fa-star' ,
        //             'url'  => 'momentum/galeria',
        //         ],
        //         [
        //             'text' => 'Ejemplos',
        //             'icon' => false, //'fa fa-star fa fa-star',
        //             'url'  => '#',
        //             'submenu' =>
        //             [
        //                 [
        //                     'text' => 'Trades ganados',
        //                     'icon' => 'fa fa-signal',
        //                     'icon_color' => 'green',
        //                     'url'  => '#',
        //                 ],
        //                 [
        //                     'text' => 'Trades perdidos',
        //                     'icon' => 'fa fa-signal',
        //                     'icon_color' => 'red',
        //                     'url'  => '#',
        //                 ],
        //             ]
        //         ],


        //     ]
        // ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/datatables/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/sweetalert2/sweetalert2.all.js',
                ],
            ],
        ],
        'Pace' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    */

    'livewire' => false,
];
