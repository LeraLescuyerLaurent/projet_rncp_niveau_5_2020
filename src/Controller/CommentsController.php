<?php

namespace App\Controller;

use App\Repository\CommentsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentsController extends AbstractController
{    
    /**
    *
    *@Route("admin/comments/index/{page}", name="admin-comment-index")
    *@IsGranted("ROLE_ADMIN")
    */
    public function adminCommentsIndex(int $page = 1,CommentsRepository $commentsRepository): Response
    {
        $nbCommentsByPage = 10;
        $comments = $commentsRepository->findAllComments($page, $nbCommentsByPage);
        $pagination = array(
            'page' => $page,
            'nbPages' => ceil(count($comments) / $nbCommentsByPage),
            'nomRoute' => 'admin-comment-index',
            );
        return $this->render('admin/comments/index.html.twig', [
            'comments' => $comments,
            'pagination'=> $pagination
            ]);
    }



    /**
    * adminCommentShow
    *@Route("admin/comments/show/{id}", name="admin-comment-show")
    */
    public function adminCommentsShow(int $id,CommentsRepository $commentsRepository)
    {
        return $this->render('admin/comments/show.html.twig', [ 'comment' => $commentsRepository->findOneBy(['id'=>$id])]);
    }

    
    /**
    * @Route("admin/comments/remove/{id}", name="admin-comment-delete")
    * @IsGranted("ROLE_ADMIN")
    * 
    */
    public function remove(int $id,CommentsRepository $commentsRepository)
    {   
        $comment = $commentsRepository->findOneBy(['id'=>$id]);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($comment);
        $entityManager->flush();
        $this->addFlash(
            'error',
            'le commentaire a bien été supprimé'
        );

        return $this->redirectToRoute('admin-comment-index');
    }
}
