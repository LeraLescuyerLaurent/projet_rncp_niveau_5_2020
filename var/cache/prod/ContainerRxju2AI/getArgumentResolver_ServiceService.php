<?php

namespace ContainerRxju2AI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CategoriesController::adminCategoryEdit' => ['privates', '.service_locator.8o.2qeQ', 'get_ServiceLocator_8o_2qeQService', true],
            'App\\Controller\\CategoriesController::adminCatgoriesIndex' => ['privates', '.service_locator.uQ3Qnhz', 'get_ServiceLocator_UQ3QnhzService', true],
            'App\\Controller\\CategoriesController::delete' => ['privates', '.service_locator.8o.2qeQ', 'get_ServiceLocator_8o_2qeQService', true],
            'App\\Controller\\CategoriesController::header' => ['privates', '.service_locator.zDFZ4E9', 'get_ServiceLocator_ZDFZ4E9Service', true],
            'App\\Controller\\CommentsController::adminCommentsIndex' => ['privates', '.service_locator.bdICVfa', 'get_ServiceLocator_BdICVfaService', true],
            'App\\Controller\\CommentsController::adminCommentsShow' => ['privates', '.service_locator.bdICVfa', 'get_ServiceLocator_BdICVfaService', true],
            'App\\Controller\\CommentsController::remove' => ['privates', '.service_locator.bdICVfa', 'get_ServiceLocator_BdICVfaService', true],
            'App\\Controller\\ContactController::adminContactIndex' => ['privates', '.service_locator.DIAC.T0', 'get_ServiceLocator_DIAC_T0Service', true],
            'App\\Controller\\ContactController::adminContactShow' => ['privates', '.service_locator.CSmT4oH', 'get_ServiceLocator_CSmT4oHService', true],
            'App\\Controller\\ContactController::deleteMessageContact' => ['privates', '.service_locator.S6iF3Lw', 'get_ServiceLocator_S6iF3LwService', true],
            'App\\Controller\\MediaController::deleteMedia' => ['privates', '.service_locator.Wr_6BzD', 'get_ServiceLocator_Wr6BzDService', true],
            'App\\Controller\\MediaController::imageUneInsertInPage' => ['privates', '.service_locator.9MwUXRK', 'get_ServiceLocator_9MwUXRKService', true],
            'App\\Controller\\MediaController::index' => ['privates', '.service_locator.IcRxJr5', 'get_ServiceLocator_IcRxJr5Service', true],
            'App\\Controller\\MediaController::insertImageUne' => ['privates', '.service_locator.9MwUXRK', 'get_ServiceLocator_9MwUXRKService', true],
            'App\\Controller\\MediaController::insertInPage' => ['privates', '.service_locator.9MwUXRK', 'get_ServiceLocator_9MwUXRKService', true],
            'App\\Controller\\MediaController::tinymce' => ['privates', '.service_locator.9MwUXRK', 'get_ServiceLocator_9MwUXRKService', true],
            'App\\Controller\\PagesController::AddPage' => ['privates', '.service_locator.0226VEH', 'get_ServiceLocator_0226VEHService', true],
            'App\\Controller\\PagesController::adminPostEdit' => ['privates', '.service_locator.wCca7mC', 'get_ServiceLocator_WCca7mCService', true],
            'App\\Controller\\PagesController::delete' => ['privates', '.service_locator.DSsnscE', 'get_ServiceLocator_DSsnscEService', true],
            'App\\Controller\\PagesController::index' => ['privates', '.service_locator.csnLBWz', 'get_ServiceLocator_CsnLBWzService', true],
            'App\\Controller\\PagesController::mentionsLegales' => ['privates', '.service_locator.csnLBWz', 'get_ServiceLocator_CsnLBWzService', true],
            'App\\Controller\\PagesController::pagesList' => ['privates', '.service_locator.csnLBWz', 'get_ServiceLocator_CsnLBWzService', true],
            'App\\Controller\\PostsController::PopulairePosts' => ['privates', '.service_locator.3Gcu0Qg', 'get_ServiceLocator_3Gcu0QgService', true],
            'App\\Controller\\PostsController::PostsByCategorie' => ['privates', '.service_locator.Mpa89Rr', 'get_ServiceLocator_Mpa89RrService', true],
            'App\\Controller\\PostsController::PostsBySubCategorie' => ['privates', '.service_locator.I83v4Aq', 'get_ServiceLocator_I83v4AqService', true],
            'App\\Controller\\PostsController::PostsShow' => ['privates', '.service_locator.zblMl8k', 'get_ServiceLocator_ZblMl8kService', true],
            'App\\Controller\\PostsController::adminPostEdit' => ['privates', '.service_locator.igxsez9', 'get_ServiceLocator_Igxsez9Service', true],
            'App\\Controller\\PostsController::adminPostsIndex' => ['privates', '.service_locator.ugubVjN', 'get_ServiceLocator_UgubVjNService', true],
            'App\\Controller\\PostsController::countPostsByCategorie' => ['privates', '.service_locator.3Gcu0Qg', 'get_ServiceLocator_3Gcu0QgService', true],
            'App\\Controller\\PostsController::countPostsBySubCategorieForSubcategorie' => ['privates', '.service_locator.hbQ2u6J', 'get_ServiceLocator_HbQ2u6JService', true],
            'App\\Controller\\PostsController::countPostsOfSubCategorieForCategorie' => ['privates', '.service_locator.3Gcu0Qg', 'get_ServiceLocator_3Gcu0QgService', true],
            'App\\Controller\\PostsController::delete' => ['privates', '.service_locator.MCsahEs', 'get_ServiceLocator_MCsahEsService', true],
            'App\\Controller\\PostsController::index' => ['privates', '.service_locator.ugubVjN', 'get_ServiceLocator_UgubVjNService', true],
            'App\\Controller\\PostsController::recherche' => ['privates', '.service_locator.3Gcu0Qg', 'get_ServiceLocator_3Gcu0QgService', true],
            'App\\Controller\\PostsController::slideShow' => ['privates', '.service_locator.ugubVjN', 'get_ServiceLocator_UgubVjNService', true],
            'App\\Controller\\SecurityController::registration' => ['privates', '.service_locator.1d_X9dd', 'get_ServiceLocator_1dX9ddService', true],
            'App\\Controller\\SubCategoriesController::adminSubCategoriesindex' => ['privates', '.service_locator.VeGgI6D', 'get_ServiceLocator_VeGgI6DService', true],
            'App\\Controller\\SubCategoriesController::adminSubCategoryDelete' => ['privates', '.service_locator.zuxFTtn', 'get_ServiceLocator_ZuxFTtnService', true],
            'App\\Controller\\SubCategoriesController::adminSubCategoryEdit' => ['privates', '.service_locator.zuxFTtn', 'get_ServiceLocator_ZuxFTtnService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\CategoriesController:adminCategoryEdit' => ['privates', '.service_locator.8o.2qeQ', 'get_ServiceLocator_8o_2qeQService', true],
            'App\\Controller\\CategoriesController:adminCatgoriesIndex' => ['privates', '.service_locator.uQ3Qnhz', 'get_ServiceLocator_UQ3QnhzService', true],
            'App\\Controller\\CategoriesController:delete' => ['privates', '.service_locator.8o.2qeQ', 'get_ServiceLocator_8o_2qeQService', true],
            'App\\Controller\\CategoriesController:header' => ['privates', '.service_locator.zDFZ4E9', 'get_ServiceLocator_ZDFZ4E9Service', true],
            'App\\Controller\\CommentsController:adminCommentsIndex' => ['privates', '.service_locator.bdICVfa', 'get_ServiceLocator_BdICVfaService', true],
            'App\\Controller\\CommentsController:adminCommentsShow' => ['privates', '.service_locator.bdICVfa', 'get_ServiceLocator_BdICVfaService', true],
            'App\\Controller\\CommentsController:remove' => ['privates', '.service_locator.bdICVfa', 'get_ServiceLocator_BdICVfaService', true],
            'App\\Controller\\ContactController:adminContactIndex' => ['privates', '.service_locator.DIAC.T0', 'get_ServiceLocator_DIAC_T0Service', true],
            'App\\Controller\\ContactController:adminContactShow' => ['privates', '.service_locator.CSmT4oH', 'get_ServiceLocator_CSmT4oHService', true],
            'App\\Controller\\ContactController:deleteMessageContact' => ['privates', '.service_locator.S6iF3Lw', 'get_ServiceLocator_S6iF3LwService', true],
            'App\\Controller\\MediaController:deleteMedia' => ['privates', '.service_locator.Wr_6BzD', 'get_ServiceLocator_Wr6BzDService', true],
            'App\\Controller\\MediaController:imageUneInsertInPage' => ['privates', '.service_locator.9MwUXRK', 'get_ServiceLocator_9MwUXRKService', true],
            'App\\Controller\\MediaController:index' => ['privates', '.service_locator.IcRxJr5', 'get_ServiceLocator_IcRxJr5Service', true],
            'App\\Controller\\MediaController:insertImageUne' => ['privates', '.service_locator.9MwUXRK', 'get_ServiceLocator_9MwUXRKService', true],
            'App\\Controller\\MediaController:insertInPage' => ['privates', '.service_locator.9MwUXRK', 'get_ServiceLocator_9MwUXRKService', true],
            'App\\Controller\\MediaController:tinymce' => ['privates', '.service_locator.9MwUXRK', 'get_ServiceLocator_9MwUXRKService', true],
            'App\\Controller\\PagesController:AddPage' => ['privates', '.service_locator.0226VEH', 'get_ServiceLocator_0226VEHService', true],
            'App\\Controller\\PagesController:adminPostEdit' => ['privates', '.service_locator.wCca7mC', 'get_ServiceLocator_WCca7mCService', true],
            'App\\Controller\\PagesController:delete' => ['privates', '.service_locator.DSsnscE', 'get_ServiceLocator_DSsnscEService', true],
            'App\\Controller\\PagesController:index' => ['privates', '.service_locator.csnLBWz', 'get_ServiceLocator_CsnLBWzService', true],
            'App\\Controller\\PagesController:mentionsLegales' => ['privates', '.service_locator.csnLBWz', 'get_ServiceLocator_CsnLBWzService', true],
            'App\\Controller\\PagesController:pagesList' => ['privates', '.service_locator.csnLBWz', 'get_ServiceLocator_CsnLBWzService', true],
            'App\\Controller\\PostsController:PopulairePosts' => ['privates', '.service_locator.3Gcu0Qg', 'get_ServiceLocator_3Gcu0QgService', true],
            'App\\Controller\\PostsController:PostsByCategorie' => ['privates', '.service_locator.Mpa89Rr', 'get_ServiceLocator_Mpa89RrService', true],
            'App\\Controller\\PostsController:PostsBySubCategorie' => ['privates', '.service_locator.I83v4Aq', 'get_ServiceLocator_I83v4AqService', true],
            'App\\Controller\\PostsController:PostsShow' => ['privates', '.service_locator.zblMl8k', 'get_ServiceLocator_ZblMl8kService', true],
            'App\\Controller\\PostsController:adminPostEdit' => ['privates', '.service_locator.igxsez9', 'get_ServiceLocator_Igxsez9Service', true],
            'App\\Controller\\PostsController:adminPostsIndex' => ['privates', '.service_locator.ugubVjN', 'get_ServiceLocator_UgubVjNService', true],
            'App\\Controller\\PostsController:countPostsByCategorie' => ['privates', '.service_locator.3Gcu0Qg', 'get_ServiceLocator_3Gcu0QgService', true],
            'App\\Controller\\PostsController:countPostsBySubCategorieForSubcategorie' => ['privates', '.service_locator.hbQ2u6J', 'get_ServiceLocator_HbQ2u6JService', true],
            'App\\Controller\\PostsController:countPostsOfSubCategorieForCategorie' => ['privates', '.service_locator.3Gcu0Qg', 'get_ServiceLocator_3Gcu0QgService', true],
            'App\\Controller\\PostsController:delete' => ['privates', '.service_locator.MCsahEs', 'get_ServiceLocator_MCsahEsService', true],
            'App\\Controller\\PostsController:index' => ['privates', '.service_locator.ugubVjN', 'get_ServiceLocator_UgubVjNService', true],
            'App\\Controller\\PostsController:recherche' => ['privates', '.service_locator.3Gcu0Qg', 'get_ServiceLocator_3Gcu0QgService', true],
            'App\\Controller\\PostsController:slideShow' => ['privates', '.service_locator.ugubVjN', 'get_ServiceLocator_UgubVjNService', true],
            'App\\Controller\\SecurityController:registration' => ['privates', '.service_locator.1d_X9dd', 'get_ServiceLocator_1dX9ddService', true],
            'App\\Controller\\SubCategoriesController:adminSubCategoriesindex' => ['privates', '.service_locator.VeGgI6D', 'get_ServiceLocator_VeGgI6DService', true],
            'App\\Controller\\SubCategoriesController:adminSubCategoryDelete' => ['privates', '.service_locator.zuxFTtn', 'get_ServiceLocator_ZuxFTtnService', true],
            'App\\Controller\\SubCategoriesController:adminSubCategoryEdit' => ['privates', '.service_locator.zuxFTtn', 'get_ServiceLocator_ZuxFTtnService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\CategoriesController::adminCategoryEdit' => '?',
            'App\\Controller\\CategoriesController::adminCatgoriesIndex' => '?',
            'App\\Controller\\CategoriesController::delete' => '?',
            'App\\Controller\\CategoriesController::header' => '?',
            'App\\Controller\\CommentsController::adminCommentsIndex' => '?',
            'App\\Controller\\CommentsController::adminCommentsShow' => '?',
            'App\\Controller\\CommentsController::remove' => '?',
            'App\\Controller\\ContactController::adminContactIndex' => '?',
            'App\\Controller\\ContactController::adminContactShow' => '?',
            'App\\Controller\\ContactController::deleteMessageContact' => '?',
            'App\\Controller\\MediaController::deleteMedia' => '?',
            'App\\Controller\\MediaController::imageUneInsertInPage' => '?',
            'App\\Controller\\MediaController::index' => '?',
            'App\\Controller\\MediaController::insertImageUne' => '?',
            'App\\Controller\\MediaController::insertInPage' => '?',
            'App\\Controller\\MediaController::tinymce' => '?',
            'App\\Controller\\PagesController::AddPage' => '?',
            'App\\Controller\\PagesController::adminPostEdit' => '?',
            'App\\Controller\\PagesController::delete' => '?',
            'App\\Controller\\PagesController::index' => '?',
            'App\\Controller\\PagesController::mentionsLegales' => '?',
            'App\\Controller\\PagesController::pagesList' => '?',
            'App\\Controller\\PostsController::PopulairePosts' => '?',
            'App\\Controller\\PostsController::PostsByCategorie' => '?',
            'App\\Controller\\PostsController::PostsBySubCategorie' => '?',
            'App\\Controller\\PostsController::PostsShow' => '?',
            'App\\Controller\\PostsController::adminPostEdit' => '?',
            'App\\Controller\\PostsController::adminPostsIndex' => '?',
            'App\\Controller\\PostsController::countPostsByCategorie' => '?',
            'App\\Controller\\PostsController::countPostsBySubCategorieForSubcategorie' => '?',
            'App\\Controller\\PostsController::countPostsOfSubCategorieForCategorie' => '?',
            'App\\Controller\\PostsController::delete' => '?',
            'App\\Controller\\PostsController::index' => '?',
            'App\\Controller\\PostsController::recherche' => '?',
            'App\\Controller\\PostsController::slideShow' => '?',
            'App\\Controller\\SecurityController::registration' => '?',
            'App\\Controller\\SubCategoriesController::adminSubCategoriesindex' => '?',
            'App\\Controller\\SubCategoriesController::adminSubCategoryDelete' => '?',
            'App\\Controller\\SubCategoriesController::adminSubCategoryEdit' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CategoriesController:adminCategoryEdit' => '?',
            'App\\Controller\\CategoriesController:adminCatgoriesIndex' => '?',
            'App\\Controller\\CategoriesController:delete' => '?',
            'App\\Controller\\CategoriesController:header' => '?',
            'App\\Controller\\CommentsController:adminCommentsIndex' => '?',
            'App\\Controller\\CommentsController:adminCommentsShow' => '?',
            'App\\Controller\\CommentsController:remove' => '?',
            'App\\Controller\\ContactController:adminContactIndex' => '?',
            'App\\Controller\\ContactController:adminContactShow' => '?',
            'App\\Controller\\ContactController:deleteMessageContact' => '?',
            'App\\Controller\\MediaController:deleteMedia' => '?',
            'App\\Controller\\MediaController:imageUneInsertInPage' => '?',
            'App\\Controller\\MediaController:index' => '?',
            'App\\Controller\\MediaController:insertImageUne' => '?',
            'App\\Controller\\MediaController:insertInPage' => '?',
            'App\\Controller\\MediaController:tinymce' => '?',
            'App\\Controller\\PagesController:AddPage' => '?',
            'App\\Controller\\PagesController:adminPostEdit' => '?',
            'App\\Controller\\PagesController:delete' => '?',
            'App\\Controller\\PagesController:index' => '?',
            'App\\Controller\\PagesController:mentionsLegales' => '?',
            'App\\Controller\\PagesController:pagesList' => '?',
            'App\\Controller\\PostsController:PopulairePosts' => '?',
            'App\\Controller\\PostsController:PostsByCategorie' => '?',
            'App\\Controller\\PostsController:PostsBySubCategorie' => '?',
            'App\\Controller\\PostsController:PostsShow' => '?',
            'App\\Controller\\PostsController:adminPostEdit' => '?',
            'App\\Controller\\PostsController:adminPostsIndex' => '?',
            'App\\Controller\\PostsController:countPostsByCategorie' => '?',
            'App\\Controller\\PostsController:countPostsBySubCategorieForSubcategorie' => '?',
            'App\\Controller\\PostsController:countPostsOfSubCategorieForCategorie' => '?',
            'App\\Controller\\PostsController:delete' => '?',
            'App\\Controller\\PostsController:index' => '?',
            'App\\Controller\\PostsController:recherche' => '?',
            'App\\Controller\\PostsController:slideShow' => '?',
            'App\\Controller\\SecurityController:registration' => '?',
            'App\\Controller\\SubCategoriesController:adminSubCategoriesindex' => '?',
            'App\\Controller\\SubCategoriesController:adminSubCategoryDelete' => '?',
            'App\\Controller\\SubCategoriesController:adminSubCategoryEdit' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]));
    }
}
