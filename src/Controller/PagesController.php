<?php

namespace App\Controller;

use App\Entity\Pages;
use App\Form\PageType;
use App\Repository\PagesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PagesController extends AbstractController
{
    /**
    * @Route("page/{id}-{slug}", name="page")
    */
    public function mentionsLegales(int $id,PagesRepository $pageRepository)
    {
        return $this->render('pages/pagesShow.html.twig', ['page' => $pageRepository->findOneBy(['id' => $id])]);
    }


/*******************************
     *   ELEMENTS   *
*******************************/

    public function pagesList(PagesRepository $pageRepository)
    {
        $page =  $pageRepository->findAll();
        return $this->render('/element/_listePages.html.twig', ['page' => $page]);
    }
/*******************************
     *   ADMINISTRATION   *
*******************************/

    /**
    * @Route("admin/pages", name="admin-pages-index")
    * @IsGranted("ROLE_ADMIN")
    */
    public function index(PagesRepository $pageRepository)
    {
        return $this->render('admin/pages/index.html.twig', ['pages' => $pageRepository->findAll()]);
    }

    /**
    * @Route("admin/pages/add", name="admin-pages-add")
    * @IsGranted("ROLE_ADMIN")
    */
    public function AddPage(PagesRepository $pages,Request $request)
    {

        $pages = new Pages();

        $form = $this->createForm(PageType::class, $pages);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() ) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pages);
            $entityManager->flush();
            $this->addFlash(
                'success',
                'Votre page a bien été ajouté'
            );
        return $this->redirectToRoute('admin-pages-index');
        }
        return $this->render('admin/pages/add.html.twig', [
            'pages'=> $pages,
            'adminAddPage' => $form->createView()
        ]);
    }

    /**
    * @Route("admin/page/edit/{id}", name="admin-page-edit")
    * @IsGranted("ROLE_ADMIN")
    */
    public function adminPostEdit(int $id,Request $request, Pages $post,PagesRepository $pageR)
    {
        $page = $pageR->find(['id'=>$id]);
        $form = $this->createForm(PageType::class, $page);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash(
                'success',
                'Votre article a bien été modifié'
            );
            return $this->redirectToRoute('admin-pages-index');
        }
        return $this->render('admin/pages/edit.html.twig', [
            'post' => $post,
            'adminEditPage' => $form->createView(),
        ]);
    }

    /**
    * @Route("admin/pages/delete/{id}", name="admin-pages-delete")
    * @IsGranted("ROLE_ADMIN")
    */
    public function delete(Pages $pages)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($pages);
        $entityManager->flush();
        $this->addFlash(
            'error',
            'Votre article a bien été supprimé'
        );
        return $this->redirectToRoute('admin-pages-index');
    }
}