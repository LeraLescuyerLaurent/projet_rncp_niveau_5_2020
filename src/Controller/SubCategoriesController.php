<?php

namespace App\Controller;

use App\Entity\SubCategories;
use App\Form\SubCategoryType;
use App\Repository\SubCategoriesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SubCategoriesController extends AbstractController
{
    
/*******************************
     *   ADMINISTRATION   *
*******************************/
    /**
     * @Route("admin/sous-categorie/{page}", name="admin-index-subcategorie")
     * @IsGranted("ROLE_ADMIN")
     */
    public function adminSubCategoriesindex(int $page = 1,SubCategoriesRepository $subCategoriesRepository): Response
    {
        $nbSubCategoriesByPage =10;
        $subCategory = $subCategoriesRepository->findAllSubCategories($page, $nbSubCategoriesByPage);
        $pagination = array(
            'page' => $page,
            'nbPages' => ceil(count($subCategory) / $nbSubCategoriesByPage),
            'nomRoute' => 'admin-index-subcategorie',
            );
        return $this->render('admin/sub-categories/index.html.twig', [
            'categories' =>$subCategory,
            'pagination' => $pagination
            ]);
    }
    /**    
     * @Route("admin/sous-categories/add", name="admin-sub-categories-add")
     * @IsGranted("ROLE_ADMIN")
     */
    public function adminSubCategoryAdd(Request $request)
    {
        $category = new SubCategories();

        $form = $this->createForm(SubCategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() ) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($category);
            $entityManager->flush();
            $this->addFlash(
                'success',
                'La sous-catégorie a bien été ajouté'
            );
            return $this->redirectToRoute('admin-index-subcategorie');
        }
        
        return $this->render('admin/sub-categories/add.html.twig', [
            'category' => $category,
            'formCatAdd' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin/sous-category/edit/{id}", name="admin-sub-categories-edit")
     * @IsGranted("ROLE_ADMIN")
     */
    public function adminSubCategoryEdit(Request $request, SubCategories $category)
    { 
        $form = $this->createForm(SubCategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash(
                'success',
                'Votre sous-catégorie a bien été modifié'
            );
            return $this->redirectToRoute('admin-index-subcategorie');
        }else{
                    $this->addFlash(
                    'error',
                    'Votre sous-catégorie n\' a pas  été modifié'
                );
        }

        return $this->render('admin/sub-categories/edit.html.twig', [
            'category' => $category,
            'formEditCategories' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin/sous-category/delete/{id}", name="admin-sub-categories-delete")
     * @IsGranted("ROLE_ADMIN")
     */
    public function adminSubCategoryDelete( SubCategories $category)
    {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($category);
            $entityManager->flush();
            $this->addFlash(
                'error',
                'Votre sous-catégorie a bien été supprimé'
            );
        return $this->redirectToRoute('admin-index-subcategorie');
    }
}
