<?php

return [
    'front' => [
        [
            'name'                => 'Dashboard',
            'description'         => null,
            'url'                 => '/admin/dashboard',
            'type'                => 'Page',
            'order'               => 0,
            'icon'                => 'fa-home',
            'is_active'           => 1,
            'is_shown_on_menu'    => 1,
            'is_publicly_visible' => 0,
        ],
        [
            'name'                => 'Configuration',
            'description'         => null,
            'url'                 => '#',
            'type'                => 'Module',
            'order'               => 0,
            'icon'                => 'fa-cog',
            'is_active'           => 1,
            'is_shown_on_menu'    => 1,
            'is_publicly_visible' => 0,
            'children'            => [
                [
                    'name'                => 'Module Manager',
                    'description'         => null,
                    'url'                 => '/admin/modules',
                    'type'                => 'Module',
                    'order'               => 1,
                    'icon'                => 'fa-user',
                    'is_active'           => 1,
                    'is_shown_on_menu'    => 1,
                    'is_publicly_visible' => 0,
                    'children'            => [
                        [
                            'name'                => 'List all modules',
                            'description'         => null,
                            'url'                 => '/admin/modules',
                            'type'                => 'Page',
                            'order'               => 0,
                            'icon'                => 'fa-list',
                            'is_active'           => 1,
                            'is_shown_on_menu'    => 1,
                            'is_publicly_visible' => 0,
                            'widget'              => [
                                [
                                    'icon'           => 'fa fa-gear fa-lg',
                                    'name'           => 'Filter',
                                    'slug'           => 'filter',
                                    'description'    => 'module search filter',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                                [
                                    'icon'           => 'fa fa-gear fa-lg',
                                    'name'           => 'Listing',
                                    'slug'           => 'listing',
                                    'description'    => 'module listing',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                            ],
                        ],
                        [
                            'name'                => 'Add modules',
                            'description'         => null,
                            'url'                 => '/admin/modules/create',
                            'type'                => 'Page',
                            'order'               => 0,
                            'icon'                => 'fa-plus',
                            'is_active'           => 1,
                            'is_shown_on_menu'    => 1,
                            'is_publicly_visible' => 0,
                            'widget'              => [
                                [
                                    'icon'           => 'fa fa-user fa-lg',
                                    'name'           => 'Add module',
                                    'slug'           => 'add-module',
                                    'description'    => 'add module details',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name'                => 'Widgets Manager',
                    'description'         => null,
                    'url'                 => '/admin/widgets',
                    'type'                => 'Module',
                    'order'               => 2,
                    'icon'                => 'fa-user',
                    'is_active'           => 1,
                    'is_shown_on_menu'    => 1,
                    'is_publicly_visible' => 0,
                    'children'            => [
                        [
                            'name'                => 'List all widgets',
                            'description'         => null,
                            'url'                 => '/admin/widgets',
                            'type'                => 'Page',
                            'order'               => 0,
                            'icon'                => 'fa-list',
                            'is_active'           => 1,
                            'is_shown_on_menu'    => 1,
                            'is_publicly_visible' => 0,
                            'widget'              => [
                                [
                                    'icon'           => 'fa fa-gear fa-lg',
                                    'name'           => 'Filter',
                                    'slug'           => 'filter',
                                    'description'    => 'widget search filter',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                    'is_publicly_visible' => 0,
                                ],
                                [
                                    'icon'           => 'fa fa-gear fa-lg',
                                    'name'           => 'Listing',
                                    'slug'           => 'listing',
                                    'description'    => 'widget listing',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                    'is_publicly_visible' => 0,                                    
                                ],
                            ],
                        ],
                        [
                            'name'                => 'Add widgets',
                            'description'         => null,
                            'url'                 => '/admin/widgets/create',
                            'type'                => 'Page',
                            'order'               => 0,
                            'icon'                => 'fa-plus',
                            'is_active'           => 1,
                            'is_shown_on_menu'    => 1,
                            'is_publicly_visible' => 0,
                            'widget'              => [
                                [
                                    'icon'           => 'fa fa-user fa-lg',
                                    'name'           => 'Add widget',
                                    'slug'           => 'add-widget',
                                    'description'    => 'add widget details',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                    'is_publicly_visible' => 0,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name'                => 'User',
                    'description'         => null,
                    'url'                 => '/admin/users',
                    'type'                => 'Module',
                    'order'               => 3,
                    'icon'                => 'fa-user',
                    'is_active'           => 1,
                    'is_shown_on_menu'    => 1,
                    'is_publicly_visible' => 0,
                    'children'            => [
                        [
                            'name'                => 'List all user',
                            'description'         => null,
                            'url'                 => '/admin/users',
                            'type'                => 'Page',
                            'order'               => 0,
                            'icon'                => 'fa-list',
                            'is_active'           => 1,
                            'is_shown_on_menu'    => 1,
                            'is_publicly_visible' => 0,
                            'widget'              => [
                                [
                                    'icon'           => 'fa fa-gear fa-lg',
                                    'name'           => 'Filter',
                                    'slug'           => 'filter',
                                    'description'    => 'user search filter',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                                [
                                    'icon'           => 'fa fa-gear fa-lg',
                                    'name'           => 'Listing',
                                    'slug'           => 'listing',
                                    'description'    => 'user listing',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                            ],
                        ],
                        [
                            'name'                => 'Add user',
                            'description'         => null,
                            'url'                 => '/admin/users/create',
                            'type'                => 'Page',
                            'order'               => 0,
                            'icon'                => 'fa-plus',
                            'is_active'           => 1,
                            'is_shown_on_menu'    => 1,
                            'is_publicly_visible' => 0,
                            'widget'              => [
                                [
                                    'icon'           => 'fa fa-user fa-lg',
                                    'name'           => 'Add user',
                                    'slug'           => 'add-user',
                                    'description'    => 'add user details',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name'                => 'Group',
                    'description'         => null,
                    'url'                 => '/admin/groups',
                    'type'                => 'Module',
                    'order'               => 4,
                    'icon'                => 'fa-sign-in',
                    'is_active'           => 1,
                    'is_shown_on_menu'    => 1,
                    'is_publicly_visible' => 0,
                    'children'            => [
                        [
                            'name'                => 'List all group',
                            'description'         => null,
                            'url'                 => '/admin/groups',
                            'type'                => 'Page',
                            'order'               => 0,
                            'icon'                => 'fa-list',
                            'is_active'           => 1,
                            'is_shown_on_menu'    => 1,
                            'is_publicly_visible' => 0,
                            'widget'              => [
                                [
                                    'icon'           => 'fa fa-gear fa-lg',
                                    'name'           => 'Filter',
                                    'slug'           => 'filter',
                                    'description'    => 'group search filter',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                                [
                                    'icon'           => 'fa fa-gear fa-lg',
                                    'name'           => 'Listing',
                                    'slug'           => 'listing',
                                    'description'    => 'group listing',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                            ],
                        ],
                        [
                            'name'                => 'Add group',
                            'description'         => null,
                            'url'                 => '/admin/groups/create',
                            'type'                => 'Page',
                            'order'               => 0,
                            'icon'                => 'fa-plus',
                            'is_active'           => 1,
                            'is_shown_on_menu'    => 1,
                            'is_publicly_visible' => 0,
                            'widget'              => [
                                [
                                    'icon'           => 'fa fa-user fa-lg',
                                    'name'           => 'Add group',
                                    'slug'           => 'add-group',
                                    'description'    => 'add group details',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],

    'admin' => [
        [
            'name'                => 'Dashboard',
            'description'         => null,
            'url'                 => '/admin/dashboard',
            'type'                => 'Page',
            'order'               => 0,
            'icon'                => 'fa-home',
            'is_active'           => 1,
            'is_shown_on_menu'    => 1,
            'is_publicly_visible' => 0,
        ],
        [
            'name'                => 'Configuration',
            'description'         => null,
            'url'                 => '#',
            'type'                => 'Module',
            'order'               => 0,
            'icon'                => 'fa-cog',
            'is_active'           => 1,
            'is_shown_on_menu'    => 1,
            'is_publicly_visible' => 0,
            'children'            => [
                [
                    'name'                => 'Module Manager',
                    'description'         => null,
                    'url'                 => '/admin/modules',
                    'type'                => 'Module',
                    'order'               => 1,
                    'icon'                => 'fa-user',
                    'is_active'           => 1,
                    'is_shown_on_menu'    => 1,
                    'is_publicly_visible' => 0,
                    'children'            => [
                        [
                            'name'                => 'List all modules',
                            'description'         => null,
                            'url'                 => '/admin/modules',
                            'type'                => 'Page',
                            'order'               => 0,
                            'icon'                => 'fa-list',
                            'is_active'           => 1,
                            'is_shown_on_menu'    => 1,
                            'is_publicly_visible' => 0,
                            'widget'              => [
                                [
                                    'icon'           => 'fa fa-gear fa-lg',
                                    'name'           => 'Filter',
                                    'slug'           => 'filter',
                                    'description'    => 'module search filter',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                                [
                                    'icon'           => 'fa fa-gear fa-lg',
                                    'name'           => 'Listing',
                                    'slug'           => 'listing',
                                    'description'    => 'module listing',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                            ],
                        ],
                        [
                            'name'                => 'Add modules',
                            'description'         => null,
                            'url'                 => '/admin/modules/create',
                            'type'                => 'Page',
                            'order'               => 0,
                            'icon'                => 'fa-plus',
                            'is_active'           => 1,
                            'is_shown_on_menu'    => 1,
                            'is_publicly_visible' => 0,
                            'widget'              => [
                                [
                                    'icon'           => 'fa fa-user fa-lg',
                                    'name'           => 'Add module',
                                    'slug'           => 'add-module',
                                    'description'    => 'add module details',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name'                => 'Widgets Manager',
                    'description'         => null,
                    'url'                 => '/admin/widgets',
                    'type'                => 'Module',
                    'order'               => 2,
                    'icon'                => 'fa-user',
                    'is_active'           => 1,
                    'is_shown_on_menu'    => 1,
                    'is_publicly_visible' => 0,
                    'children'            => [
                        [
                            'name'                => 'List all widgets',
                            'description'         => null,
                            'url'                 => '/admin/widgets',
                            'type'                => 'Page',
                            'order'               => 0,
                            'icon'                => 'fa-list',
                            'is_active'           => 1,
                            'is_shown_on_menu'    => 1,
                            'is_publicly_visible' => 0,
                            'widget'              => [
                                [
                                    'icon'           => 'fa fa-gear fa-lg',
                                    'name'           => 'Filter',
                                    'slug'           => 'filter',
                                    'description'    => 'widget search filter',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                                [
                                    'icon'           => 'fa fa-gear fa-lg',
                                    'name'           => 'Listing',
                                    'slug'           => 'listing',
                                    'description'    => 'widget listing',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                            ],
                        ],
                        [
                            'name'                => 'Add widgets',
                            'description'         => null,
                            'url'                 => '/admin/widgets/create',
                            'type'                => 'Page',
                            'order'               => 0,
                            'icon'                => 'fa-plus',
                            'is_active'           => 1,
                            'is_shown_on_menu'    => 1,
                            'is_publicly_visible' => 0,
                            'widget'              => [
                                [
                                    'icon'           => 'fa fa-user fa-lg',
                                    'name'           => 'Add widget',
                                    'slug'           => 'add-widget',
                                    'description'    => 'add widget details',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name'                => 'User',
                    'description'         => null,
                    'url'                 => '/admin/users',
                    'type'                => 'Module',
                    'order'               => 3,
                    'icon'                => 'fa-user',
                    'is_active'           => 1,
                    'is_shown_on_menu'    => 1,
                    'is_publicly_visible' => 0,
                    'children'            => [
                        [
                            'name'                => 'List all user',
                            'description'         => null,
                            'url'                 => '/admin/users',
                            'type'                => 'Page',
                            'order'               => 0,
                            'icon'                => 'fa-list',
                            'is_active'           => 1,
                            'is_shown_on_menu'    => 1,
                            'is_publicly_visible' => 0,
                            'widget'              => [
                                [
                                    'icon'           => 'fa fa-gear fa-lg',
                                    'name'           => 'Filter',
                                    'slug'           => 'filter',
                                    'description'    => 'user search filter',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                                [
                                    'icon'           => 'fa fa-gear fa-lg',
                                    'name'           => 'Listing',
                                    'slug'           => 'listing',
                                    'description'    => 'user listing',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                            ],
                        ],
                        [
                            'name'                => 'Add user',
                            'description'         => null,
                            'url'                 => '/admin/users/create',
                            'type'                => 'Page',
                            'order'               => 0,
                            'icon'                => 'fa-plus',
                            'is_active'           => 1,
                            'is_shown_on_menu'    => 1,
                            'is_publicly_visible' => 0,
                            'widget'              => [
                                [
                                    'icon'           => 'fa fa-user fa-lg',
                                    'name'           => 'Add user',
                                    'slug'           => 'add-user',
                                    'description'    => 'add user details',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name'                => 'Group',
                    'description'         => null,
                    'url'                 => '/admin/groups',
                    'type'                => 'Module',
                    'order'               => 4,
                    'icon'                => 'fa-sign-in',
                    'is_active'           => 1,
                    'is_shown_on_menu'    => 1,
                    'is_publicly_visible' => 0,
                    'children'            => [
                        [
                            'name'                => 'List all group',
                            'description'         => null,
                            'url'                 => '/admin/groups',
                            'type'                => 'Page',
                            'order'               => 0,
                            'icon'                => 'fa-list',
                            'is_active'           => 1,
                            'is_shown_on_menu'    => 1,
                            'is_publicly_visible' => 0,
                            'widget'              => [
                                [
                                    'icon'           => 'fa fa-gear fa-lg',
                                    'name'           => 'Filter',
                                    'slug'           => 'filter',
                                    'description'    => 'group search filter',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                                [
                                    'icon'           => 'fa fa-gear fa-lg',
                                    'name'           => 'Listing',
                                    'slug'           => 'listing',
                                    'description'    => 'group listing',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                            ],
                        ],
                        [
                            'name'                => 'Add group',
                            'description'         => null,
                            'url'                 => '/admin/groups/create',
                            'type'                => 'Page',
                            'order'               => 0,
                            'icon'                => 'fa-plus',
                            'is_active'           => 1,
                            'is_shown_on_menu'    => 1,
                            'is_publicly_visible' => 0,
                            'widget'              => [
                                [
                                    'icon'           => 'fa fa-user fa-lg',
                                    'name'           => 'Add group',
                                    'slug'           => 'add-group',
                                    'description'    => 'add group details',
                                    'width'          => '100%',
                                    'status'         => 1,
                                    'settings'       => null,
                                    'widget_type_id' => 1,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        /*[
            'name'                => 'Team',
            'description'         => null,
            'url'                 => '#',
            'type'                => 'Module',
            'order'               => 0,
            'icon'                => 'fa-users',
            'is_active'           => 1,
            'is_shown_on_menu'    => 1,
            'is_publicly_visible' => 0,
            'children'            => [
                [
                    'name'                => 'List all team',
                    'description'         => null,
                    'url'                 => '/admin/teams',
                    'type'                => 'Page',
                    'order'               => 0,
                    'icon'                => 'fa-list',
                    'is_active'           => 1,
                    'is_shown_on_menu'    => 1,
                    'is_publicly_visible' => 0,
                ],
                [
                    'name'                => 'Add team',
                    'description'         => null,
                    'url'                 => '/admin/teams/create',
                    'type'                => 'Page',
                    'order'               => 0,
                    'icon'                => 'fa-plus',
                    'is_active'           => 1,
                    'is_shown_on_menu'    => 1,
                    'is_publicly_visible' => 0,
                ],
            ],
        ]*/
    ],
];
