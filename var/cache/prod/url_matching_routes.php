<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|c(?'
                            .'|ategory/(?'
                                .'|edit/([^/]++)(*:48)'
                                .'|delete/([^/]++)(*:70)'
                            .')'
                            .'|o(?'
                                .'|mments/(?'
                                    .'|index(?:/([^/]++))?(*:111)'
                                    .'|show/([^/]++)(*:132)'
                                    .'|remove/([^/]++)(*:155)'
                                .')'
                                .'|ntact/(?'
                                    .'|li(?'
                                        .'|st(?:/([^/]++))?(*:194)'
                                        .'|re/([^/]++)(*:213)'
                                    .')'
                                    .'|delete/([^/]++)(*:237)'
                                .')'
                            .')'
                        .')'
                        .'|media/(?'
                            .'|([^/]++)(*:265)'
                            .'|imageUne/([^/]++)(*:290)'
                            .'|show/([^/]++)(*:311)'
                            .'|delete/([^/]++)(*:334)'
                        .')'
                        .'|insertImageUne(?:/([^/]++))?(*:371)'
                        .'|tinymce/([^/]++)/([^/]++)(*:404)'
                        .'|p(?'
                            .'|age(?'
                                .'|/edit/([^/]++)(*:436)'
                                .'|s/delete/([^/]++)(*:461)'
                            .')'
                            .'|ost(?'
                                .'|s(?:/([^/]++))?(*:491)'
                                .'|/(?'
                                    .'|edit/([^/]++)(*:516)'
                                    .'|delete/([^/]++)(*:539)'
                                .')'
                            .')'
                        .')'
                        .'|sous\\-categor(?'
                            .'|ie(?:/([^/]++))?(*:582)'
                            .'|y/(?'
                                .'|edit/([^/]++)(*:608)'
                                .'|delete/([^/]++)(*:631)'
                            .')'
                        .')'
                    .')'
                    .'|rticles/recherche(?:/([^/]++))?(*:673)'
                .')'
                .'|/p(?'
                    .'|age/([^/\\-]++)\\-([^/]++)(*:711)'
                    .'|ost/(?'
                        .'|categorie/([^/\\-]++)\\-([^/]++)(?:/([^/]++))?(*:770)'
                        .'|sous\\-categorie/([^/\\-]++)\\-([^/]++)(?:/([^/]++))?(*:828)'
                        .'|([^/]++)/show/([^/\\-]++)\\-([^/]++)(*:870)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        48 => [[['_route' => 'admin-category-edit', '_controller' => 'App\\Controller\\CategoriesController::adminCategoryEdit'], ['id'], null, null, false, true, null]],
        70 => [[['_route' => 'admin-category-delete', '_controller' => 'App\\Controller\\CategoriesController::delete'], ['id'], null, null, false, true, null]],
        111 => [[['_route' => 'admin-comment-index', 'page' => 1, '_controller' => 'App\\Controller\\CommentsController::adminCommentsIndex'], ['page'], null, null, false, true, null]],
        132 => [[['_route' => 'admin-comment-show', '_controller' => 'App\\Controller\\CommentsController::adminCommentsShow'], ['id'], null, null, false, true, null]],
        155 => [[['_route' => 'admin-comment-delete', '_controller' => 'App\\Controller\\CommentsController::remove'], ['id'], null, null, false, true, null]],
        194 => [[['_route' => 'admin-contact-index', 'page' => 1, '_controller' => 'App\\Controller\\ContactController::adminContactIndex'], ['page'], null, null, false, true, null]],
        213 => [[['_route' => 'admin-contact-lire', '_controller' => 'App\\Controller\\ContactController::adminContactShow'], ['id'], null, null, false, true, null]],
        237 => [[['_route' => 'admin-contact-delete', '_controller' => 'App\\Controller\\ContactController::deleteMessageContact'], ['id'], null, null, false, true, null]],
        265 => [[['_route' => 'admin-gestion-media', '_controller' => 'App\\Controller\\MediaController::index'], ['id'], null, null, false, true, null]],
        290 => [[['_route' => 'admin-imageUne-media', '_controller' => 'App\\Controller\\MediaController::imageUneInsertInPage'], ['id'], null, null, false, true, null]],
        311 => [[['_route' => 'admin-show-media', '_controller' => 'App\\Controller\\MediaController::insertInPage'], ['id'], null, null, false, true, null]],
        334 => [[['_route' => 'admin-delete-media', '_controller' => 'App\\Controller\\MediaController::deleteMedia'], ['id'], null, null, false, true, null]],
        371 => [[['_route' => 'admin-insert-imageUne', 'id' => null, '_controller' => 'App\\Controller\\MediaController::insertImageUne'], ['id'], null, null, false, true, null]],
        404 => [[['_route' => 'admin-insert-image', 'id' => null, '_controller' => 'App\\Controller\\MediaController::tinymce'], ['id', 'format'], null, null, false, true, null]],
        436 => [[['_route' => 'admin-page-edit', '_controller' => 'App\\Controller\\PagesController::adminPostEdit'], ['id'], null, null, false, true, null]],
        461 => [[['_route' => 'admin-pages-delete', '_controller' => 'App\\Controller\\PagesController::delete'], ['id'], null, null, false, true, null]],
        491 => [[['_route' => 'admin-post-index', 'page' => 1, '_controller' => 'App\\Controller\\PostsController::adminPostsIndex'], ['page'], null, null, false, true, null]],
        516 => [[['_route' => 'admin-post-edit', '_controller' => 'App\\Controller\\PostsController::adminPostEdit'], ['id'], null, null, false, true, null]],
        539 => [[['_route' => 'admin-post-delete', '_controller' => 'App\\Controller\\PostsController::delete'], ['id'], null, null, false, true, null]],
        582 => [[['_route' => 'admin-index-subcategorie', 'page' => 1, '_controller' => 'App\\Controller\\SubCategoriesController::adminSubCategoriesindex'], ['page'], null, null, false, true, null]],
        608 => [[['_route' => 'admin-sub-categories-edit', '_controller' => 'App\\Controller\\SubCategoriesController::adminSubCategoryEdit'], ['id'], null, null, false, true, null]],
        631 => [[['_route' => 'admin-sub-categories-delete', '_controller' => 'App\\Controller\\SubCategoriesController::adminSubCategoryDelete'], ['id'], null, null, false, true, null]],
        673 => [[['_route' => 'recherche-article', 'page' => 1, '_controller' => 'App\\Controller\\PostsController::recherche'], ['page'], null, null, false, true, null]],
        711 => [[['_route' => 'page', '_controller' => 'App\\Controller\\PagesController::mentionsLegales'], ['id', 'slug'], null, null, false, true, null]],
        770 => [[['_route' => 'liste-articles-par-categorie', 'page' => 1, '_controller' => 'App\\Controller\\PostsController::PostsByCategorie'], ['id', 'slug', 'page'], null, null, false, true, null]],
        828 => [[['_route' => 'liste-articles-par-sous-categorie', 'page' => 1, '_controller' => 'App\\Controller\\PostsController::PostsBySubCategorie'], ['id', 'slug', 'page'], null, null, false, true, null]],
        870 => [
            [['_route' => 'show-article', '_controller' => 'App\\Controller\\PostsController::PostsShow'], ['categorie', 'id', 'slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
