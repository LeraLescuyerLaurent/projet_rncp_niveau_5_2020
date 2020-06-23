<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Form\CategoryType;
use App\Repository\CategoriesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoriesController extends AbstractController
{
    /**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
     * return les categories dans le fragment _header.html.twig
     */
    public function header(CategoriesRepository $category): Response
    {
        $categories = $category->findAll();
        return $this->render('element/_header.html.twig', [
            'category' => $categories
        ]);
    }

    // ADMINISTRATION des CATEGORIE
    /**
     * @Route("admin/categories/{page}", name="admin-index-categories")
     */
    public function adminCatgoriesIndex(int $page = 1,CategoriesRepository $categoryRepository): Response
    {
    
        $nbCatgoriesByPage = 10;
        $categorie = $categoryRepository->findAllCategorie($page, $nbCatgoriesByPage);

        $pagination = array(
            'page' => $page,
            'nbPages' => ceil(count($categorie) / $nbCatgoriesByPage),
            'nomRoute' => 'admin-index-categories',
            );
        return $this->render('admin/categories/index.html.twig', [
            'categories' => $categorie,
            'pagination'=> $pagination
        ]);
    }

    /**    
     * @Route("admin/categories/add", name="admin-category-add")
     */
    public function adminCategoryAdd(Request $request)
    {
        $category = new Categories();

        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() ) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($category);
            $entityManager->flush();
            $this->addFlash(
                'success',
                'La catégorie a bien été ajoutée'
            );
            return $this->redirectToRoute('admin-index-categories');
        }
        
        return $this->render('admin/categories/add.html.twig', [
            'category' => $category,
            'formCat' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin/category/edit/{id}", name="admin-category-edit")
     */
    public function adminCategoryEdit(Request $request, Categories $category)
    {
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash(
                'success',
                'La catégorie a bien été modifiée'
            );
            return $this->redirectToRoute('admin-index-categories');
            }

        return $this->render('admin/categories/edit.html.twig', [
            'category' => $category,
            'formatEditCategories' => $form->createView(),
        ]);
    }
    
    /**
     * @Route("admin/category/delete/{id}", name="admin-category-delete")
     * 
     */
    public function delete( Categories $category)
    {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($category);
            $entityManager->flush();
            $this->addFlash(
                'error',
                'La catégorie a bien été supprimé'
            );

        return $this->redirectToRoute('admin-index-categories');
    }
}


