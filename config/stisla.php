<?php

return [
    'menus' => [
        [
            'group_name' => 'Navigasi',
            'menus' => [
                [
                    'menu_name' => 'Dashboard',
                    'route_name' => 'dashboard.index',
                    'icon' => 'fas fa-fire',
                    'permission' => null,
                    'is_active_if_url_includes' => 'dashboard*'
                ],
                [
                    'menu_name' => 'Products',
                    'route_name' => null,
                    'icon' => 'fas fa fa-shopping-cart',
                    'permission' => 'Products',
                    'is_active_if_url_includes' => 'products*',
                    'childs' => [
                        [
                            'menu_name' => 'Manage Product',
                            'route_name' => 'products.index',
                            'icon' => 'fas fa-list-alt',
                            'permission' => 'Products',
                            'is_active_if_url_includes' => 'products*',
                        ],
                        [
                            'menu_name' => 'Categories',
                            'route_name' => 'products.categories.index',
                            'icon' => 'fas fa-list-alt',
                            'permission' => 'Categories',
                            'is_active_if_url_includes' => 'products/categories*',
                        ],
                        [
                            'menu_name' => 'Sub Categories',
                            'route_name' => 'products.sub-categories.index',
                            'icon' => 'fas fa-list-alt',
                            'permission' => 'Sub Categories',
                            'is_active_if_url_includes' => 'products/sub-categories*',
                        ],
                        [
                            'menu_name' => 'Color',
                            'route_name' => 'products.colors.index',
                            'icon' => 'fas fa-list-alt',
                            'permission' => 'Colors',
                            'is_active_if_url_includes' => 'products/colors*',
                        ],
                        [
                            'menu_name' => 'Size',
                            'route_name' => 'products.sizes.index',
                            'icon' => 'fas fa-list-alt',
                            'permission' => 'Sizes',
                            'is_active_if_url_includes' => 'products/sizes*',
                        ],
                        [
                            'menu_name' => 'Attributes',
                            'route_name' => 'products.attributes.index',
                            'icon' => 'fas fa-list-alt',
                            'permission' => 'Attributes',
                            'is_active_if_url_includes' => 'products/attributes*',
                        ],
                        [
                            'menu_name' => 'Reviews',
                            'route_name' => 'products.reviews.index',
                            'icon' => 'fas fa-list-alt',
                            'permission' => 'Reviews',
                            'is_active_if_url_includes' => 'products/reviews*',
                        ]
                    ]
                ],
                [
                    'menu_name' => 'News',
                    'route_name' => null,
                    'icon' => 'fas fa fa-list-alt',
                    'permission' => null,
                    'is_active_if_url_includes' => null,
                    'is_mockup' => true,
                    'childs' => [
                        [
                            'menu_name' => 'News',
                            'route_name' => 'news.index',
                            'icon' => 'fas fa-list-alt',
                            'permission' => null,
                            'is_active_if_url_includes' => 'news*',
                        ],
                        [
                            'menu_name' => 'News Categories',
                            'route_name' => 'news-categories.index',
                            'icon' => 'fas fa-list-alt',
                            'permission' => 'News Category',
                            'is_active_if_url_includes' => 'news-categories*',
                        ],
                    ]
                ],
                [
                    'menu_name' => 'Banner',
                    'route_name' => 'banner.index',
                    'icon' => 'fas fa-image',
                    'permission' => 'Banner',
                    'is_active_if_url_includes' => 'banner*'
                ],
                [
                    'menu_name' => 'Users',
                    'route_name' => null,
                    'icon' => 'fas fa-users',
                    'permission' => null,
                    'is_active_if_url_includes' => 'dashboard*',
                    'childs' => [
                        [
                            'menu_name' => 'User',
                            'route_name' => 'user-management.users.index',
                            'icon' => null,
                            'permission' => 'User',
                            'is_active_if_url_includes' => 'user-management/users*'
                        ],
                        [
                            'menu_name' => 'Role',
                            'route_name' => 'user-management.roles.index',
                            'icon' => null,
                            'permission' => 'Role',
                            'is_active_if_url_includes' => 'user-management/roles*'
                        ],
                        [
                            'menu_name' => 'Permission',
                            'route_name' => 'user-management.permissions.index',
                            'icon' => null,
                            'permission' => 'Permission',
                            'is_active_if_url_includes' => 'user-management/permissions*'
                        ],
                        [
                            'menu_name' => 'Group Permission',
                            'route_name' => 'user-management.permission-groups.index',
                            'icon' => null,
                            'permission' => 'Group Permission',
                            'is_active_if_url_includes' => 'user-management/permission-groups*'
                        ]
                    ]
                ],
                [
                    'menu_name' => 'File',
                    'uri' => 'file-managers',
                    'icon' => 'fas fa-folder',
                    'permission' => 'File Management',
                    'is_blank' => true,
                    'is_active_if_url_includes' => 'file-managers*'
                ],
                [
                    'menu_name' => 'Settings',
                    'route_name' => 'settings.all',
                    'icon' => 'fas fa-cogs',
                    'permission' => 'Setting',
                    'is_active_if_url_includes' => 'settings*'
                ],
                [
                    'menu_name' => 'Logout',
                    'route_name' => 'logout',
                    'icon' => 'fas fa-sign-out-alt',
                    'permission' => null,
                    'is_active_if_url_includes' => null
                ]
            ]
        ],
    ],

    'permissions' => [
        [
            'name' => 'Profile',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Profile'
        ],
        [
            'name' => 'Profile Update',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Profile'
        ],

        [
            'name' => 'Log Activity',
            'roles' => ['superadmin', 'admin'],
            'group' => 'Log Activity'
        ],
        [
            'name' => 'Log Activity Ekspor',
            'roles' => ['superadmin', 'admin'],
            'group' => 'Log Activity'
        ],

        [
            'name' => 'Log Request',
            'roles' => ['superadmin', 'admin'],
            'group' => 'Log Request'
        ],
        [
            'name' => 'Log Request Ekspor',
            'roles' => ['superadmin', 'admin'],
            'group' => 'Log Request'
        ],

        [
            'name' => 'Role',
            'roles' => ['superadmin'],
            'group' => 'Role'
        ],
        [
            'name' => 'Role Create',
            'roles' => ['superadmin'],
            'group' => 'Role'
        ],
        [
            'name' => 'Role Impor Excel',
            'roles' => ['superadmin'],
            'group' => 'Role'
        ],
        [
            'name' => 'Role Update',
            'roles' => ['superadmin'],
            'group' => 'Role'
        ],
        [
            'name' => 'Role Detail',
            'roles' => ['superadmin'],
            'group' => 'Role'
        ],
        [
            'name' => 'Role Delete',
            'roles' => ['superadmin'],
            'group' => 'Role'
        ],
        [
            'name' => 'Role Ekspor',
            'roles' => ['superadmin', 'admin'],
            'group' => 'Role'
        ],

        [
            'name' => 'Permission',
            'roles' => ['superadmin'],
            'group' => 'Permission'
        ],
        [
            'name' => 'Permission Create',
            'roles' => ['superadmin'],
            'group' => 'Permission'
        ],
        [
            'name' => 'Permission Impor Excel',
            'roles' => ['superadmin'],
            'group' => 'Permission'
        ],
        [
            'name' => 'Permission Update',
            'roles' => ['superadmin'],
            'group' => 'Permission'
        ],
        [
            'name' => 'Permission Detail',
            'roles' => ['superadmin'],
            'group' => 'Permission'
        ],
        [
            'name' => 'Permission Delete',
            'roles' => ['superadmin'],
            'group' => 'Permission'
        ],
        [
            'name' => 'Permission Ekspor',
            'roles' => ['superadmin', 'admin'],
            'group' => 'Permission'
        ],

        [
            'name' => 'Group Permission',
            'roles' => ['superadmin'],
            'group' => 'Group Permission'
        ],
        [
            'name' => 'Group Permission Create',
            'roles' => ['superadmin'],
            'group' => 'Group Permission'
        ],
        [
            'name' => 'Group Permission Impor Excel',
            'roles' => ['superadmin'],
            'group' => 'Group Permission'
        ],
        [
            'name' => 'Group Permission Update',
            'roles' => ['superadmin'],
            'group' => 'Group Permission'
        ],
        [
            'name' => 'Group Permission Detail',
            'roles' => ['superadmin'],
            'group' => 'Group Permission'
        ],
        [
            'name' => 'Group Permission Delete',
            'roles' => ['superadmin'],
            'group' => 'Group Permission'
        ],
        [
            'name' => 'Group Permission Ekspor',
            'roles' => ['superadmin', 'admin'],
            'group' => 'Group Permission'
        ],

        [
            'name' => 'User',
            'roles' => ['superadmin'],
            'group' => 'User'
        ],
        [
            'name' => 'User Create',
            'roles' => ['superadmin'],
            'group' => 'User'
        ],
        [
            'name' => 'User Impor Excel',
            'roles' => ['superadmin'],
            'group' => 'User'
        ],
        [
            'name' => 'User Update',
            'roles' => ['superadmin'],
            'group' => 'User'
        ],
        [
            'name' => 'User Detail',
            'roles' => ['superadmin'],
            'group' => 'User'
        ],
        [
            'name' => 'User Delete',
            'roles' => ['superadmin'],
            'group' => 'User'
        ],
        [
            'name' => 'User Ekspor',
            'roles' => ['superadmin'],
            'group' => 'User'
        ],
        [
            'name' => 'User Force Login',
            'roles' => ['superadmin'],
            'group' => 'User'
        ],

        [
            'name' => 'Setting',
            'roles' => ['superadmin', 'admin'],
            'group' => 'Setting'
        ],

        [
            'name' => 'File Management',
            'roles' => ['superadmin', 'admin'],
            'group' => 'File Management'
        ],
        [
            'name' => 'Laravel Log Viewer',
            'roles' => ['superadmin'],
            'group' => 'Laravel Log Viewer'
        ],
        [
            'name' => 'Notifikasi',
            'roles' => ['superadmin', 'admin'],
            'group' => 'Notifikasi'
        ],

        [
            'name' => 'Menu',
            'roles' => ['superadmin'],
            'group' => 'Menu'
        ],
        [
            'name' => 'Menu Create',
            'roles' => ['superadmin'],
            'group' => 'Menu'
        ],
        [
            'name' => 'Menu Update',
            'roles' => ['superadmin'],
            'group' => 'Menu'
        ],
        [
            'name' => 'Menu Detail',
            'roles' => ['superadmin'],
            'group' => 'Menu'
        ],
        [
            'name' => 'Menu Delete',
            'roles' => ['superadmin'],
            'group' => 'Menu'
        ],
        [
            'name' => 'Menu Ekspor',
            'roles' => ['superadmin'],
            'group' => 'Menu'
        ],
        [
            'name' => 'Menu Impor Excel',
            'roles' => ['superadmin'],
            'group' => 'Menu'
        ],

        [
            'name' => 'Grup Menu',
            'roles' => ['superadmin'],
            'group' => 'Grup Menu'
        ],
        [
            'name' => 'Grup Menu Create',
            'roles' => ['superadmin'],
            'group' => 'Grup Menu'
        ],
        [
            'name' => 'Grup Menu Update',
            'roles' => ['superadmin'],
            'group' => 'Grup Menu'
        ],
        [
            'name' => 'Grup Menu Detail',
            'roles' => ['superadmin'],
            'group' => 'Grup Menu'
        ],
        [
            'name' => 'Grup Menu Delete',
            'roles' => ['superadmin'],
            'group' => 'Grup Menu'
        ],

        [
            'name' => 'Contoh CRUD',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Contoh CRUD'
        ],
        [
            'name' => 'Contoh CRUD Create',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Contoh CRUD'
        ],
        [
            'name' => 'Contoh CRUD Impor Excel',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Contoh CRUD'
        ],
        [
            'name' => 'Contoh CRUD Update',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Contoh CRUD'
        ],
        [
            'name' => 'Contoh CRUD Detail',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Contoh CRUD'
        ],
        [
            'name' => 'Contoh CRUD Delete',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Contoh CRUD'
        ],
        [
            'name' => 'Contoh CRUD Ekspor',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Contoh CRUD'
        ],

        [
            'name' => 'News Category',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'News Category'
        ],
        [
            'name' => 'News Category Create',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'News Category'
        ],
        [
            'name' => 'News Category Update',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'News Category'
        ],
        [
            'name' => 'News Category Delete',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'News Category'
        ],
        [
            'name' => 'News',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'News'
        ],
        [
            'name' => 'News Create',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'News'
        ],
        [
            'name' => 'News Update',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'News'
        ],
        [
            'name' => 'News Delete',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'News'
        ],
        [
            'name' => 'Reviews',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Reviews'
        ],
        [
            'name' => 'Reviews Create',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Reviews'
        ],
        [
            'name' => 'Reviews Update',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Reviews'
        ],
        [
            'name' => 'Reviews Delete',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Reviews'
        ],
        [
            'name' => 'Attributes',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Attributes'
        ],
        [
            'name' => 'Attributes Create',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Attributes'
        ],
        [
            'name' => 'Attributes Update',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Attributes'
        ],
        [
            'name' => 'Attributes Delete',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Attributes'
        ],
        [
            'name' => 'Sizes',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Sizes'
        ],
        [
            'name' => 'Sizes Create',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Sizes'
        ],
        [
            'name' => 'Sizes Update',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Sizes'
        ],
        [
            'name' => 'Sizes Delete',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Sizes'
        ],
        [
            'name' => 'Colors',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Colors'
        ],
        [
            'name' => 'Colors Create',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Colors'
        ],
        [
            'name' => 'Colors Update',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Colors'
        ],
        [
            'name' => 'Colors Delete',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Colors'
        ],
        [
            'name' => 'Sub Categories',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Sub Categories'
        ],
        [
            'name' => 'Sub Categories Create',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Sub Categories'
        ],
        [
            'name' => 'Sub Categories Update',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Sub Categories'
        ],
        [
            'name' => 'Sub Categories Delete',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Sub Categories'
        ],
        [
            'name' => 'Categories',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Categories'
        ],
        [
            'name' => 'Categories Create',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Categories'
        ],
        [
            'name' => 'Categories Update',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Categories'
        ],
        [
            'name' => 'Categories Delete',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Categories'
        ],
        [
            'name' => 'Products',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Products'
        ],
        [
            'name' => 'Products Create',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Products'
        ],
        [
            'name' => 'Products Update',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Products'
        ],
        [
            'name' => 'Products Delete',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Products'
        ],
        [
            'name' => 'Banner',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Banner'
        ],
        [
            'name' => 'Banner Create',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Banner'
        ],
        [
            'name' => 'Banner Update',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Banner'
        ],
        [
            'name' => 'Banner Delete',
            'roles' => ['superadmin', 'admin', 'user'],
            'group' => 'Banner'
        ],
    ],

    'roles' => [
        'superadmin',
        'admin',
        'user'
    ],

    'settings' => [
        ['key' => 'application_name', 'value' => 'Grahaexcel'],
        ['key' => 'application_version', 'value' => '1.0.0'],
        ['key' => 'app_description', 'value' => 'Admin Panel'],
        ['key' => 'city', 'value' => 'Tangerang'],
        ['key' => 'company_name', 'value' => 'PT Grahaexcel Plastindo'],
        ['key' => 'country', 'value' => 'Indonesia'],
        [
            'key' => 'favicon',
            'value' => 'assets/images/favicon.png',
            'is_url' => true
        ],
        ['key' => 'logo', 'value' => 'assets/images/logo.png', 'is_url' => true],
        ['key' => 'since', 'value' => '2021'],

        [
            'key' => 'meta_author',
            'value' => 'Grahaexcel'
        ],
        ['key' => 'meta_description', 'value' => 'PT Grahaexcel Plastindo'],
        [
            'key' => 'meta_keywords',
            'value' => 'Sistem Informasi, Pemrograman, Github, PHP, Laravel, Stisla, Heroku, Gitlab, MySQL'
        ],

        [
            'key' => 'stisla_bg_home',
            'value' => 'stisla/assets/img/unsplash/andre-benz-1214056-unsplash.jpg',
            'is_url' => true
        ],
        [
            'key' => 'stisla_bg_login',
            'value' => 'stisla/assets/img/unsplash/eberhard-grossgasteiger-1207565-unsplash.jpg',
            'is_url' => true
        ],
        ['key' => 'stisla_sidebar_mini', 'value' => '0'],
        ['key' => 'stisla_login_template', 'value' => 'default'],
        ['key' => 'stisla_skin', 'value' => 'style'],

        ['key' => 'mail_provider', 'value' => 'mailtrap'],
        ['key' => 'mail_from_address', 'value' => 'hello@example.com'],
        ['key' => 'mail_from_name', 'value' => 'Superadmin'],

        ['key' => 'mail_mailtrap_host', 'value' => 'sandbox.smtp.mailtrap.io'],
        ['key' => 'mail_mailtrap_port', 'value' => '2525'],
        ['key' => 'mail_mailtrap_username', 'value' => '10c9ffc0387d2a'],
        ['key' => 'mail_mailtrap_password', 'value' => '11fd65a07d9f25'],
        ['key' => 'mail_mailtrap_encryption', 'value' => 'tls'],

        ['key' => 'mail_host', 'value' => 'smtp'],
        ['key' => 'mail_port', 'value' => '2525'],
        ['key' => 'mail_username', 'value' => '809d58dfa23ade'],
        ['key' => 'mail_password', 'value' => 'e9d1aa54a61db1'],
        ['key' => 'mail_encryption', 'value' => 'tls'],

        ['key' => 'mail_mailgun_domain', 'value' => 'test'],
        ['key' => 'mail_mailgun_api_key', 'value' => 'test'],

        ['key' => 'is_login_must_verified', 'value' => '1'],
        ['key' => 'is_active_register_page', 'value' => '1'],

        ['key' => 'is_forgot_password_send_to_email', 'value' => '1'],
        ['key' => 'google_captcha_site_key', 'value' => 'default_site_key'],
        ['key' => 'google_captcha_secret', 'value' => 'default_secret'],
        ['key' => 'is_google_captcha_login', 'value' => '1'],
        ['key' => 'is_google_captcha_register', 'value' => '1'],
        ['key' => 'is_google_captcha_forgot_password', 'value' => '1'],
        ['key' => 'is_google_captcha_reset_password', 'value' => '1'],

        ['key' => 'is_login_with_google', 'value' => '1'],
        ['key' => 'is_login_with_facebook', 'value' => '1'],
        ['key' => 'is_login_with_twitter', 'value' => '1'],
        ['key' => 'is_login_with_github', 'value' => '1'],

        ['key' => 'is_register_with_google', 'value' => '1'],
        ['key' => 'is_register_with_facebook', 'value' => '1'],
        ['key' => 'is_register_with_twitter', 'value' => '1'],
        ['key' => 'is_register_with_github', 'value' => '1'],

        ['key' => 'sso_google_client_id', 'value' => '-'],
        ['key' => 'sso_google_client_secret', 'value' => '-'],
        ['key' => 'sso_google_redirect', 'value' => '/auth/social/google/callback', 'is_url' => true],

        ['key' => 'sso_facebook_client_id', 'value' => '-'],
        ['key' => 'sso_facebook_client_secret', 'value' => '-'],
        ['key' => 'sso_facebook_redirect', 'value' => '/auth/social/facebook/callback', 'is_url' => true],

        ['key' => 'sso_twitter_client_id', 'value' => '-'],
        ['key' => 'sso_twitter_client_secret', 'value' => '-'],
        ['key' => 'sso_twitter_redirect', 'value' => '/auth/social/twitter/callback', 'is_url' => true],

        ['key' => 'sso_github_client_id', 'value' => '-'],
        ['key' => 'sso_github_client_secret', 'value' => '-'],
        ['key' => 'sso_github_redirect', 'value' => '/auth/social/github/callback', 'is_url' => true]
    ],

    'settings2' => [
        ['key' => 'application_name', 'value' => 'Grahaexcel'],
        ['key' => 'application_version', 'value' => '1.0.0'],
        ['key' => 'app_description', 'value' => 'Ini hanyalah sistem biasa'],
        ['key' => 'city', 'value' => 'Tangerang'],
        ['key' => 'company_name', 'value' => '[Nama Perusahaannya]'],
        ['key' => 'country', 'value' => 'Indonesia'],
        [
            'key' => 'favicon',
            'value' => 'assets/icons/favicon.ico',
            'is_url' => true
        ],
        ['key' => 'logo', 'value' => 'assets/images/logo.png', 'is_url' => true],
        ['key' => 'since', 'value' => '2021'],

        [
            'key' => 'meta_author',
            'value' => 'Grahaexcel'
        ],
        ['key' => 'meta_description', 'value' => 'PT Grahaexcel Plastindo'],
        [
            'key' => 'meta_keywords',
            'value' => 'Sistem Informasi, Pemrograman, Github, PHP, Laravel, Stisla, Heroku, Gitlab, MySQL'
        ],

        [
            'key' => 'stisla_bg_home',
            'value' => 'stisla/assets/img/unsplash/andre-benz-1214056-unsplash.jpg',
            'is_url' => true
        ],
        [
            'key' => 'stisla_bg_login',
            'value' => 'stisla/assets/img/unsplash/eberhard-grossgasteiger-1207565-unsplash.jpg',
            'is_url' => true
        ],
        ['key' => 'stisla_sidebar_mini', 'value' => '0'],
        ['key' => 'stisla_login_template', 'value' => 'default'],
        ['key' => 'stisla_skin', 'value' => 'style'],

        ['key' => 'mail_provider', 'value' => 'mailtrap'],
        ['key' => 'mail_from_address', 'value' => 'hello@example.com'],
        ['key' => 'mail_from_name', 'value' => 'Superadmin'],

        ['key' => 'mail_mailtrap_host', 'value' => 'sandbox.smtp.mailtrap.io'],
        ['key' => 'mail_mailtrap_port', 'value' => '2525'],
        ['key' => 'mail_mailtrap_username', 'value' => '10c9ffc0387d2a'],
        ['key' => 'mail_mailtrap_password', 'value' => '11fd65a07d9f25'],
        ['key' => 'mail_mailtrap_encryption', 'value' => 'tls'],

        ['key' => 'mail_host', 'value' => 'smtp'],
        ['key' => 'mail_port', 'value' => '2525'],
        ['key' => 'mail_username', 'value' => '809d58dfa23ade'],
        ['key' => 'mail_password', 'value' => 'e9d1aa54a61db1'],
        ['key' => 'mail_encryption', 'value' => 'tls'],

        ['key' => 'mail_mailgun_domain', 'value' => 'test'],
        ['key' => 'mail_mailgun_api_key', 'value' => 'test'],

        ['key' => 'is_login_must_verified', 'value' => '0'],
        ['key' => 'is_active_register_page', 'value' => '0'],

        ['key' => 'is_forgot_password_send_to_email', 'value' => '0'],
        ['key' => 'google_captcha_site_key', 'value' => 'default_site_key'],
        ['key' => 'google_captcha_secret', 'value' => 'default_secret'],
        ['key' => 'is_google_captcha_login', 'value' => '0'],
        ['key' => 'is_google_captcha_register', 'value' => '0'],
        ['key' => 'is_google_captcha_forgot_password', 'value' => '0'],
        ['key' => 'is_google_captcha_reset_password', 'value' => '0'],

        ['key' => 'is_login_with_google', 'value' => '0'],
        ['key' => 'is_login_with_facebook', 'value' => '0'],
        ['key' => 'is_login_with_twitter', 'value' => '0'],
        ['key' => 'is_login_with_github', 'value' => '0'],

        ['key' => 'is_register_with_google', 'value' => '0'],
        ['key' => 'is_register_with_facebook', 'value' => '0'],
        ['key' => 'is_register_with_twitter', 'value' => '0'],
        ['key' => 'is_register_with_github', 'value' => '0'],

        ['key' => 'sso_google_client_id', 'value' => '-'],
        ['key' => 'sso_google_client_secret', 'value' => '-'],
        ['key' => 'sso_google_redirect', 'value' => '/auth/social/google/callback', 'is_url' => true],

        ['key' => 'sso_facebook_client_id', 'value' => '-'],
        ['key' => 'sso_facebook_client_secret', 'value' => '-'],
        ['key' => 'sso_facebook_redirect', 'value' => '/auth/social/facebook/callback', 'is_url' => true],

        ['key' => 'sso_twitter_client_id', 'value' => '-'],
        ['key' => 'sso_twitter_client_secret', 'value' => '-'],
        ['key' => 'sso_twitter_redirect', 'value' => '/auth/social/twitter/callback', 'is_url' => true],

        ['key' => 'sso_github_client_id', 'value' => '-'],
        ['key' => 'sso_github_client_secret', 'value' => '-'],
        ['key' => 'sso_github_redirect', 'value' => '/auth/social/github/callback', 'is_url' => true]
    ],

    'users' => [
        [
            'name'              => 'Grahaexcel',
            'email'             => 'superadmin@grahaexcel.com',
            'password'          => 'superadmin',
            'roles'             => ['superadmin', 'admin'],
            'email_verified_at' => '2021-04-06 04:06:00',
            'is_locked'         => 1,
            'phone_number'      => '12345678910',
            'birth_date'        => '2024-10-28',
            'address'           => ''
        ],
        [
            'name'              => 'Admin',
            'email'             => 'admin@grahaexcel.com',
            'password'          => 'admin',
            'roles'             => ['admin'],
            'email_verified_at' => '2021-04-06 04:06:00',
            'phone_number'      => '12345678910',
            'birth_date'        => '2024-10-28',
            'address'           => ''
        ],
        [
            'name'              => 'User',
            'email'             => 'user@grahaexcel.com',
            'password'          => 'user',
            'roles'             => ['user'],
            'email_verified_at' => '2021-04-06 04:06:00',
            'phone_number'      => '12345678910',
            'birth_date'        => '2024-10-28',
            'address'           => ''
        ]
    ]


];
