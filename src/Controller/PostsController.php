<?php

namespace App\Controller;

use DateTime;
use App\Entity\Posts;
use App\Form\PostType;
use App\Entity\Comments;
use App\Form\CommentType;
use App\Entity\Categories;
use App\Entity\SubCategories;
use App\Repository\PostsRepository;
use App\Repository\CommentsRepository;
use App\Repository\SubCategoriesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostsController extends AbstractController
{
    /**
     * @Route("/", name="index-site")
     */
    public function index (PostsRepository $postsRepository): Response
    {
    
        $limit = 10;
        $post =  $postsRepository->findBy(['slider' => false, "online" => true],
                ['createdAt' => 'DESC'],
                $limit);
                
        return $this->render('/posts/index.html.twig', [
            'controller_name' => 'PostsController',
            'posts' =>$post
        ]);
    }

    /**
     * @Route("post/categorie/{id}-{slug}/{page}", name="liste-articles-par-categorie")
     */
    public function PostsByCategorie ($slug,int $page =1,int $id,PostsRepository $postRepository,Categories $categorie): Response
    {
        if (!$categorie) {
            404;
        }

        $url =  $_SERVER['REQUEST_URI'];
        $parseUrl =parse_url($url, PHP_URL_PATH);
        $explodeSlash = explode("/", $parseUrl);
        $explodeTiret = explode("-", $explodeSlash[3]);
        $categorie = $explodeTiret[1];

        $nbArticleByPage = 10;

        $CategorieOfPost =$postRepository->FindPostByCategorie($id , $page, $nbArticleByPage);

        $pagination = array(
            'page' => $page,
            'nbPages' => ceil(count($CategorieOfPost) / $nbArticleByPage),
            'nomRoute' => 'liste-articles-par-categorie',
            'id' =>$id,
            'slug' =>$slug
        );
    
        return $this->render('/posts/postsByCategorie.html.twig', [
            'categorie' => $categorie,
            'postsByCategorie' => $CategorieOfPost,
            'pagination' => $pagination
        ]);
    }

    /**
     * @Route("post/sous-categorie/{id}-{slug}/{page}", name="liste-articles-par-sous-categorie")
     */
    public function PostsBySubCategorie ($slug,int $page =1,int $id,PostsRepository $postRepository,SubCategories $subCategorie): Response
    {
        if (!$subCategorie) {
            404;
        }
        $nbArticleByPage = 10;
        $PostsBySubCategorie =  $postRepository->findBySubCategorie($id,$page,$nbArticleByPage);
        $pagination = array(
            'page' => $page,
            'nbPages' => ceil(count($PostsBySubCategorie) / $nbArticleByPage),
            'nomRoute' => 'liste-articles-par-sous-categorie',
            'id' =>$id,
            'slug' =>$slug
            
        );

        return $this->render('/posts/postsBySubCategorie.html.twig', [
            'controller_name' => 'PostsController',
            'PostsBySubCategorie' => $PostsBySubCategorie,
            'subCategorie' => $subCategorie,
            'pagination' => $pagination
        ]);
    }

    /**
     * @Route("post/{categorie}/show/{id}-{slug}", name="show-article")
     */
    public function PostsShow (int $id,PostsRepository $postRepository,Posts $post,Request $request,CommentsRepository $commentRepo): Response
    {
        if (!$post) {
            404;
        }
        $PostShow =  $postRepository->findOneBy(['id' => $id]); 

        /** COMMENTAIRES */
        $commentaire = new Comments();

        $form = $this->createForm(CommentType::class, $commentaire);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $date = new DateTime();
            $form->getData()->setCreatedAt($date);
            $form->getData()->setPostId($PostShow);

            $pseudo = $form->getData()->getPseudo();
            $pseudoTrim = trim($pseudo);
            $pseudoStripTags = strip_tags($pseudoTrim);
            $pseudoStripslashes = stripslashes($pseudoStripTags);
            $pseudoFinal = htmlspecialchars($pseudoStripslashes);
            $form->getData()->setPseudo($pseudoFinal);

            $comment = $form->getData()->getcomment();
            $commentTrim = trim($comment);
            $commentStripTags = strip_tags($commentTrim);
            $commentStripslashes = stripslashes($commentStripTags);
            $commentFinal = htmlspecialchars($commentStripslashes);
            $form->getData()->setComment($commentFinal);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commentaire);
            $entityManager->flush();
        }

        $commentaires = $commentRepo->findBy(['postId' => $id],['createdAt' => 'DESC']);


        /**  NB VISITEURS ARTICLES */
            $pointsPost = $PostShow->getPoints() +1;
            $postRepository->UpdatePointsOfPost($id,$pointsPost);



        return $this->render('/posts/postShow.html.twig', [
            'controller_name' => 'PostsController',
            'PostShow' => $PostShow,
            'commentaires' => $commentaires,
            'commentForm' => $form->createView()
        ]);
    }


    /**
     * @Route("articles/recherche/{page}", name="recherche-article")
     */
    public function recherche(Request $request,PostsRepository $postRepository,int $page =1)
    { 
        

        $r = $request->request->get('recherche');
        $limit = 10;
        $q = $postRepository->findSearch($r,$page,$limit);
        $pagination = array(
            'page' => $page,
            'nbPages' => ceil(count($q) / $limit),
            'nomRoute' => 'recherche-article',
        );
        return $this->render('/recherches/recherche.html.twig', [
            'controller_name' => 'PostsController',
            'recherches' => $q,
            'pagination' => $pagination,
            'r'  => $r
        ]);
    }
/*******************************
     *   ELEMENTS   *
*******************************/
    public function slideShow(PostsRepository $postsRepository): Response
    {
        $slider = $postsRepository->findBy(['slider' => true],
                ['createdAt' => 'DESC']);
        return $this->render('/element/_slideShow.html.twig', ['slides' => $slider]);
    }

    public function countPostsByCategorie(PostsRepository $postRepository): Response
    {
        $post = $postRepository->countPostsOfCategorie();     
        return $this->render('/element/_countPostsByCategorie.html.twig', ['posts' => $post]);
    }

    public function countPostsOfSubCategorieForCategorie(PostsRepository $postRepository): Response
    {
        $url =  $_SERVER['REQUEST_URI'];
        $parseUrl =parse_url($url, PHP_URL_PATH);
        $explodeSlash = explode("/", $parseUrl);
        $explodeTiret = explode("-", $explodeSlash[3]);
        $id = $explodeTiret[0];
        $name = $explodeTiret[1];

        $post = $postRepository->countPostsOfSubCategorieForCategorie($id); 
        $categorieName = $name;

        return $this->render('/element/_countPostsOfSubCategorieForCategorie.html.twig', [
        'subcat' => $post,
        'categorieName' =>$categorieName
        ]);
    }

    public function countPostsBySubCategorieForSubcategorie(PostsRepository $postRepository,SubCategoriesRepository $subcategorie): Response
    {
        $url =  $_SERVER['REQUEST_URI'];
        $parseUrl =parse_url($url, PHP_URL_PATH);
        $explodeSlash = explode("/", $parseUrl);
        $explodeTiret = explode("-", $explodeSlash[3]);
        $id = $explodeTiret[0];

        $c = $subcategorie->findOneBy(['id' => $id]);
        $categorie = $c->getCategories()->getId();
        $categorieName = $c->getCategories()->getName();

        $post = $postRepository->countPostsOfSubCategorieForSubCategorie($categorie); 
        return $this->render('/element/_countPostsBySubCategorieForSubcategorie.html.twig', [
        'controller_name' => 'PostsController',
        'subcat' => $post,
        'categorieName' => $categorieName
        ]);
    }


    public function PopulairePosts(PostsRepository $postRepository): Response
    {
        $limit = 5;
        $post =  $postRepository->findBy(
                ["online" => true],
                ['points' => 'DESC'],
                $limit);
        return $this->render('/element/_populaire_posts.html.twig', ['posts' => $post]);
    }







/*******************************
     *   ADMINISTRATION   *
*******************************/
    
    /**
     * @Route("admin/posts/{page}", name="admin-post-index")
     * @IsGranted("ROLE_ADMIN")
     */
    public function adminPostsIndex(int $page = 1,PostsRepository $postsRepository)
    {
        $nbArticleByPage = 10;
        $posts = $postsRepository->findAllPost($page, $nbArticleByPage);
        $pagination = array(
            'page' => $page,
            'nbPages' => ceil(count($posts) / $nbArticleByPage),
            'nomRoute' => 'admin-post-index',
            );
        return $this->render('admin/posts/index.html.twig', [
            'posts' => $posts,
            'pagination'=>$pagination
            ]);
    }

    /**
     * @Route("admin/post/add", name="admin-post-add") 
     * @IsGranted("ROLE_ADMIN")
     */
    public function addPost(Request $request)
    {
        $token = md5(\uniqid(microtime(),true).time());
        $points = 0;
        $post = new Posts();

        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() ) {
            $date = new DateTime();
            $form->getData()->setCreatedAt($date);
            $form->getData()->setMediaToken($token);
            $form->getData()->setPoints($points);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($post);
            $entityManager->flush();
            $this->addFlash(
                'success',
                'Votre article a bien été ajouté'
            );
            return $this->redirectToRoute('admin-post-index');
        }

        return $this->render('admin/posts/add.html.twig', [
            'adminAddPost' => $form->createView(),
            'token'=> $token,
        ]);
    }
    /**
     * @Route("admin/post/edit/{id}", name="admin-post-edit")
     * @IsGranted("ROLE_ADMIN")
     */
    public function adminPostEdit(int $id,Request $request, Posts $post,PostsRepository $postR)
    {
        $post = $postR->find(['id'=>$id]);
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $date = new DateTime();
            $form->getData()->setCreatedAt($date);
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash(
                'success',
                'Votre article a bien été modifié'
            );
            return $this->redirectToRoute('admin-post-index');
        }
        return $this->render('admin/posts/edit.html.twig', [
            'post' => $post,
            'formaEditPost' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin/post/delete/{id}", name="admin-post-delete")
     * @IsGranted("ROLE_ADMIN")
     */
    public function delete(Posts $post)
    {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($post);
            $entityManager->flush();
            $this->addFlash(
                'error',
                'Votre article a bien été supprimé'
            );
        return $this->redirectToRoute('admin-post-index');
    }





}
