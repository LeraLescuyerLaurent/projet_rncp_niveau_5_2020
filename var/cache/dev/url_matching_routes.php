<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin-index-categories', '_controller' => 'App\\Controller\\CategoriesController::adminCatgoriesIndex'], null, null, null, true, false, null]],
        '/admin/categories/add' => [[['_route' => 'admin-category-add', '_controller' => 'App\\Controller\\CategoriesController::adminCategoryAdd'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::addMessageContact'], null, null, null, false, false, null]],
        '/admin/pages' => [[['_route' => 'admin-pages-index', '_controller' => 'App\\Controller\\PagesController::index'], null, null, null, false, false, null]],
        '/admin/pages/add' => [[['_route' => 'admin-pages-add', '_controller' => 'App\\Controller\\PagesController::AddPage'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index-site', '_controller' => 'App\\Controller\\PostsController::index'], null, null, null, false, false, null]],
        '/admin/post/add' => [[['_route' => 'admin-post-add', '_controller' => 'App\\Controller\\PostsController::addPost'], null, null, null, false, false, null]],
        '/admin/users/add' => [[['_route' => 'admin-security-registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'security-login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security-logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/sous-categories/add' => [[['_route' => 'admin-sub-categories-add', '_controller' => 'App\\Controller\\SubCategoriesController::adminSubCategoryAdd'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|c(?'
                            .'|ategory/(?'
                                .'|edit/([^/]++)(*:210)'
                                .'|delete/([^/]++)(*:233)'
                            .')'
                            .'|o(?'
                                .'|mments/(?'
                                    .'|index(?:/([^/]++))?(*:275)'
                                    .'|show/([^/]++)(*:296)'
                                    .'|remove/([^/]++)(*:319)'
                                .')'
                                .'|ntact/(?'
                                    .'|li(?'
                                        .'|st(?:/([^/]++))?(*:358)'
                                        .'|re/([^/]++)(*:377)'
                                    .')'
                                    .'|delete/([^/]++)(*:401)'
                                .')'
                            .')'
                        .')'
                        .'|media/(?'
                            .'|([^/]++)(*:429)'
                            .'|imageUne/([^/]++)(*:454)'
                            .'|show/([^/]++)(*:475)'
                            .'|delete/([^/]++)(*:498)'
                        .')'
                        .'|insertImageUne(?:/([^/]++))?(*:535)'
                        .'|tinymce/([^/]++)/([^/]++)(*:568)'
                        .'|p(?'
                            .'|age(?'
                                .'|/edit/([^/]++)(*:600)'
                                .'|s/delete/([^/]++)(*:625)'
                            .')'
                            .'|ost(?'
                                .'|s(?:/([^/]++))?(*:655)'
                                .'|/(?'
                                    .'|edit/([^/]++)(*:680)'
                                    .'|delete/([^/]++)(*:703)'
                                .')'
                            .')'
                        .')'
                        .'|sous\\-categor(?'
                            .'|ie(?:/([^/]++))?(*:746)'
                            .'|y/(?'
                                .'|edit/([^/]++)(*:772)'
                                .'|delete/([^/]++)(*:795)'
                            .')'
                        .')'
                    .')'
                    .'|rticles/recherche(?:/([^/]++))?(*:837)'
                .')'
                .'|/p(?'
                    .'|age/([^/\\-]++)\\-([^/]++)(*:875)'
                    .'|ost/(?'
                        .'|categorie/([^/\\-]++)\\-([^/]++)(?:/([^/]++))?(*:934)'
                        .'|sous\\-categorie/([^/\\-]++)\\-([^/]++)(?:/([^/]++))?(*:992)'
                        .'|([^/]++)/show/([^/\\-]++)\\-([^/]++)(*:1034)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        210 => [[['_route' => 'admin-category-edit', '_controller' => 'App\\Controller\\CategoriesController::adminCategoryEdit'], ['id'], null, null, false, true, null]],
        233 => [[['_route' => 'admin-category-delete', '_controller' => 'App\\Controller\\CategoriesController::delete'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'admin-comment-index', 'page' => 1, '_controller' => 'App\\Controller\\CommentsController::adminCommentsIndex'], ['page'], null, null, false, true, null]],
        296 => [[['_route' => 'admin-comment-show', '_controller' => 'App\\Controller\\CommentsController::adminCommentsShow'], ['id'], null, null, false, true, null]],
        319 => [[['_route' => 'admin-comment-delete', '_controller' => 'App\\Controller\\CommentsController::remove'], ['id'], null, null, false, true, null]],
        358 => [[['_route' => 'admin-contact-index', 'page' => 1, '_controller' => 'App\\Controller\\ContactController::adminContactIndex'], ['page'], null, null, false, true, null]],
        377 => [[['_route' => 'admin-contact-lire', '_controller' => 'App\\Controller\\ContactController::adminContactShow'], ['id'], null, null, false, true, null]],
        401 => [[['_route' => 'admin-contact-delete', '_controller' => 'App\\Controller\\ContactController::deleteMessageContact'], ['id'], null, null, false, true, null]],
        429 => [[['_route' => 'admin-gestion-media', '_controller' => 'App\\Controller\\MediaController::index'], ['id'], null, null, false, true, null]],
        454 => [[['_route' => 'admin-imageUne-media', '_controller' => 'App\\Controller\\MediaController::imageUneInsertInPage'], ['id'], null, null, false, true, null]],
        475 => [[['_route' => 'admin-show-media', '_controller' => 'App\\Controller\\MediaController::insertInPage'], ['id'], null, null, false, true, null]],
        498 => [[['_route' => 'admin-delete-media', '_controller' => 'App\\Controller\\MediaController::deleteMedia'], ['id'], null, null, false, true, null]],
        535 => [[['_route' => 'admin-insert-imageUne', 'id' => null, '_controller' => 'App\\Controller\\MediaController::insertImageUne'], ['id'], null, null, false, true, null]],
        568 => [[['_route' => 'admin-insert-image', 'id' => null, '_controller' => 'App\\Controller\\MediaController::tinymce'], ['id', 'format'], null, null, false, true, null]],
        600 => [[['_route' => 'admin-page-edit', '_controller' => 'App\\Controller\\PagesController::adminPostEdit'], ['id'], null, null, false, true, null]],
        625 => [[['_route' => 'admin-pages-delete', '_controller' => 'App\\Controller\\PagesController::delete'], ['id'], null, null, false, true, null]],
        655 => [[['_route' => 'admin-post-index', 'page' => 1, '_controller' => 'App\\Controller\\PostsController::adminPostsIndex'], ['page'], null, null, false, true, null]],
        680 => [[['_route' => 'admin-post-edit', '_controller' => 'App\\Controller\\PostsController::adminPostEdit'], ['id'], null, null, false, true, null]],
        703 => [[['_route' => 'admin-post-delete', '_controller' => 'App\\Controller\\PostsController::delete'], ['id'], null, null, false, true, null]],
        746 => [[['_route' => 'admin-index-subcategorie', 'page' => 1, '_controller' => 'App\\Controller\\SubCategoriesController::adminSubCategoriesindex'], ['page'], null, null, false, true, null]],
        772 => [[['_route' => 'admin-sub-categories-edit', '_controller' => 'App\\Controller\\SubCategoriesController::adminSubCategoryEdit'], ['id'], null, null, false, true, null]],
        795 => [[['_route' => 'admin-sub-categories-delete', '_controller' => 'App\\Controller\\SubCategoriesController::adminSubCategoryDelete'], ['id'], null, null, false, true, null]],
        837 => [[['_route' => 'recherche-article', 'page' => 1, '_controller' => 'App\\Controller\\PostsController::recherche'], ['page'], null, null, false, true, null]],
        875 => [[['_route' => 'page', '_controller' => 'App\\Controller\\PagesController::mentionsLegales'], ['id', 'slug'], null, null, false, true, null]],
        934 => [[['_route' => 'liste-articles-par-categorie', 'page' => 1, '_controller' => 'App\\Controller\\PostsController::PostsByCategorie'], ['id', 'slug', 'page'], null, null, false, true, null]],
        992 => [[['_route' => 'liste-articles-par-sous-categorie', 'page' => 1, '_controller' => 'App\\Controller\\PostsController::PostsBySubCategorie'], ['id', 'slug', 'page'], null, null, false, true, null]],
        1034 => [
            [['_route' => 'show-article', '_controller' => 'App\\Controller\\PostsController::PostsShow'], ['categorie', 'id', 'slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
