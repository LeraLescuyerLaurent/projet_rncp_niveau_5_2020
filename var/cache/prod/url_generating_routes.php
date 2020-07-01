<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin-index-categories' => [[], ['_controller' => 'App\\Controller\\CategoriesController::adminCatgoriesIndex'], [], [['text', '/admin/categories/']], [], []],
    'admin-category-add' => [[], ['_controller' => 'App\\Controller\\CategoriesController::adminCategoryAdd'], [], [['text', '/admin/categories/add']], [], []],
    'admin-category-edit' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::adminCategoryEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category/edit']], [], []],
    'admin-category-delete' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category/delete']], [], []],
    'admin-comment-index' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\CommentsController::adminCommentsIndex'], [], [['variable', '/', '[^/]++', 'page', true], ['text', '/admin/comments/index']], [], []],
    'admin-comment-show' => [['id'], ['_controller' => 'App\\Controller\\CommentsController::adminCommentsShow'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/comments/show']], [], []],
    'admin-comment-delete' => [['id'], ['_controller' => 'App\\Controller\\CommentsController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/comments/remove']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::addMessageContact'], [], [['text', '/contact']], [], []],
    'admin-contact-index' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\ContactController::adminContactIndex'], [], [['variable', '/', '[^/]++', 'page', true], ['text', '/admin/contact/list']], [], []],
    'admin-contact-lire' => [['id'], ['_controller' => 'App\\Controller\\ContactController::adminContactShow'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/contact/lire']], [], []],
    'admin-contact-delete' => [['id'], ['_controller' => 'App\\Controller\\ContactController::deleteMessageContact'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/contact/delete']], [], []],
    'admin-insert-code' => [[], ['_controller' => 'App\\Controller\\InsertCodeController::index'], [], [['text', '/admin/insert/code']], [], []],
    'admin-insert-code-final' => [['langage'], ['langage' => null, '_controller' => 'App\\Controller\\InsertCodeController::insertCodeFinale'], [], [['variable', '/', '[^/]++', 'langage', true], ['text', '/admin/insert/code/finale']], [], []],
    'admin-gestion-media' => [['id'], ['_controller' => 'App\\Controller\\MediaController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/media']], [], []],
    'admin-imageUne-media' => [['id'], ['_controller' => 'App\\Controller\\MediaController::imageUneInsertInPage'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/media/imageUne']], [], []],
    'admin-insert-imageUne' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\MediaController::insertImageUne'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/insertImageUne']], [], []],
    'admin-show-media' => [['id'], ['_controller' => 'App\\Controller\\MediaController::insertInPage'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/media/show']], [], []],
    'admin-insert-image' => [['id', 'format'], ['id' => null, '_controller' => 'App\\Controller\\MediaController::tinymce'], [], [['variable', '/', '[^/]++', 'format', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/tinymce']], [], []],
    'admin-delete-media' => [['id'], ['_controller' => 'App\\Controller\\MediaController::deleteMedia'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/media/delete']], [], []],
    'page' => [['id', 'slug'], ['_controller' => 'App\\Controller\\PagesController::mentionsLegales'], [], [['variable', '-', '[^/]++', 'slug', true], ['variable', '/', '[^/\\-]++', 'id', true], ['text', '/page']], [], []],
    'admin-pages-index' => [[], ['_controller' => 'App\\Controller\\PagesController::index'], [], [['text', '/admin/pages']], [], []],
    'admin-pages-add' => [[], ['_controller' => 'App\\Controller\\PagesController::AddPage'], [], [['text', '/admin/pages/add']], [], []],
    'admin-page-edit' => [['id'], ['_controller' => 'App\\Controller\\PagesController::adminPostEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/page/edit']], [], []],
    'admin-pages-delete' => [['id'], ['_controller' => 'App\\Controller\\PagesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/pages/delete']], [], []],
    'index-site' => [[], ['_controller' => 'App\\Controller\\PostsController::index'], [], [['text', '/']], [], []],
    'liste-articles-par-categorie' => [['id', 'slug', 'page'], ['page' => 1, '_controller' => 'App\\Controller\\PostsController::PostsByCategorie'], [], [['variable', '/', '[^/]++', 'page', true], ['variable', '-', '[^/]++', 'slug', true], ['variable', '/', '[^/\\-]++', 'id', true], ['text', '/post/categorie']], [], []],
    'liste-articles-par-sous-categorie' => [['id', 'slug', 'page'], ['page' => 1, '_controller' => 'App\\Controller\\PostsController::PostsBySubCategorie'], [], [['variable', '/', '[^/]++', 'page', true], ['variable', '-', '[^/]++', 'slug', true], ['variable', '/', '[^/\\-]++', 'id', true], ['text', '/post/sous-categorie']], [], []],
    'show-article' => [['categorie', 'id', 'slug'], ['_controller' => 'App\\Controller\\PostsController::PostsShow'], [], [['variable', '-', '[^/]++', 'slug', true], ['variable', '/', '[^/\\-]++', 'id', true], ['text', '/show'], ['variable', '/', '[^/]++', 'categorie', true], ['text', '/post']], [], []],
    'recherche-article' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\PostsController::recherche'], [], [['variable', '/', '[^/]++', 'page', true], ['text', '/articles/recherche']], [], []],
    'admin-post-index' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\PostsController::adminPostsIndex'], [], [['variable', '/', '[^/]++', 'page', true], ['text', '/admin/posts']], [], []],
    'admin-post-add' => [[], ['_controller' => 'App\\Controller\\PostsController::addPost'], [], [['text', '/admin/post/add']], [], []],
    'admin-post-edit' => [['id'], ['_controller' => 'App\\Controller\\PostsController::adminPostEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/post/edit']], [], []],
    'admin-post-delete' => [['id'], ['_controller' => 'App\\Controller\\PostsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/post/delete']], [], []],
    'admin-security-registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/admin/users/add']], [], []],
    'security-login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'security-logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'admin-index-subcategorie' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\SubCategoriesController::adminSubCategoriesindex'], [], [['variable', '/', '[^/]++', 'page', true], ['text', '/admin/sous-categorie']], [], []],
    'admin-sub-categories-add' => [[], ['_controller' => 'App\\Controller\\SubCategoriesController::adminSubCategoryAdd'], [], [['text', '/admin/sous-categories/add']], [], []],
    'admin-sub-categories-edit' => [['id'], ['_controller' => 'App\\Controller\\SubCategoriesController::adminSubCategoryEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/sous-category/edit']], [], []],
    'admin-sub-categories-delete' => [['id'], ['_controller' => 'App\\Controller\\SubCategoriesController::adminSubCategoryDelete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/sous-category/delete']], [], []],
];
