<?php

namespace App\Controller;

use App\Entity\Media;
use App\Form\MediaType;
use App\Form\AlignMediaType;
use App\Service\ImageService;
use App\Repository\MediaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class MediaController extends AbstractController
{
    /**
     * @Route("admin/media/{id}", name="gestion_media")
     */
    public function index($id,Request $request, EntityManagerInterface $manager, MediaRepository $img,ImageService $imgService)
    {
        $token =$id;
        $media = new Media();
        $form = $this->createForm(MediaType::class, $media);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $image = $this->getParameter('upload_directory');
            
            $data = $form->get('url')->getData();
            $annee = date('Y');
            $mois = date('m');
            $day = date("d");
            $imgService->createFolder($annee,$mois,$day,$image);

            
            
            $url = $this->getParameter('upload_directory') . DIRECTORY_SEPARATOR . $annee . DIRECTORY_SEPARATOR . $mois . DIRECTORY_SEPARATOR . $day;
            
            
            $slugger = new AsciiSlugger();
            $slug = $slugger->slug($media->getName());
            $nomimage = $slug . '-' . uniqid() ;
            $uri = '/dist/images' . DIRECTORY_SEPARATOR . $annee . DIRECTORY_SEPARATOR . $mois . DIRECTORY_SEPARATOR . $day. DIRECTORY_SEPARATOR . $nomimage. '.png';
            // dd($url,$uri);
            try {
                
                $fin =  $data->move(
                    $url,
                    $nomimage
                );
                if ($fin) {
                   $formats = $imgService->Format();
                    foreach ($formats as $k => $v) {
                        $prefixe = $k;
                        $taille = explode('x',$v);
                        $imgService->cropImage($uri,$url.DIRECTORY_SEPARATOR. $nomimage.'_'.$prefixe.'.png',$taille[0],$taille[1]); 
                    }
                

                }
            } catch (FileException $e) {}
            
            
            
            $name = htmlspecialchars($media->getName());
            $media->setName($name);
            $media->setUrl($uri);
            $media->setSlug($slug);
            $media->setToken($token);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($media);
            $manager->flush();
                $this->addFlash(
                    'success',
                    "l'image a bien été ajoutée à votre bibliothèque"
                );
            }
        $img = $img->findBy(['token' => $token]);

        return $this->render('admin/media/index.html.twig', [
            'mediaForm' => $form->createView(),
            'images' => $img,
        ]);
    }

    /**
     * @Route("admin/media/show/{id}", name = "show_media")
     */
    public function insertInPage($id,Request $request,MediaRepository $em)
    {
        if($id){
            $BddMedia= $em->find(['id' => $id]);
            $form = $this->createForm(AlignMediaType::class);
            $form->handleRequest($request);
                if ($form->isSubmitted()) {
                    $id = $BddMedia->getId();
                    return $this->redirectToRoute('insertImage',['id' => $id]);
                }
        }
        return $this->render('admin/media/edit.html.twig', [
            'AlignMediaType'=> $form->createView(),
            'media' => $BddMedia,
            ]);
    }
    /**
     * @Route("admin/media/imageUne/{id}", name = "imageUne_media")
     */
    public function imageUneInsertInPage($id,Request $request,MediaRepository $em)
    {
        if($id){
            $BddMedia= $em->find(['id' => $id]);
            $form = $this->createForm(AlignMediaType::class);
            $form->handleRequest($request);
                if ($form->isSubmitted()) {
                    $id = $BddMedia->getId();
                    return $this->redirectToRoute('insertImageUne',['id' => $id]);
                }
        }
        return $this->render('admin/media/editImageUne.html.twig', [
            'AlignMediaType'=> $form->createView(),
            'media' => $BddMedia,
            ]);
    }
    /**
     * @Route("admin/insertImageUne/{id}", name="insertImageUne")
     */
    public function insertImageUne($id=null, MediaRepository $em)
    {
            $BddMedia= $em->find(['id' => $id]);
        return $this->render('admin/media/insertImageUne.html.twig', ['media' => $BddMedia]);
    }
    /**
     * @Route("admin/tinymce/{id}", name="insertImage")
     */
    public function tinymce($id=null, MediaRepository $em)
    {
            $BddMedia= $em->find(['id' => $id]);
        return $this->render('admin/media/insertImage.html.twig', ['media' => $BddMedia]);
    }

    /**
     * @Route("admin/media/delete/{id}", name="delete_media")
     */
    function deleteMedia($id, MediaRepository $media, Request $request,EntityManagerInterface $entityManager)
    {
        $id = $id ;
        //je recup l'url du fichier 
        $m = $media->find(['id' => $id]);
        $urlBdd = $m->getUrl();
        $image = $this->getParameter('delete_directory');
        $file = $image.$urlBdd ;
        $pid = $m->getToken();
        if (file_exists($file)) {
            unlink($file);
            $entityManager->remove($m);
            $entityManager->flush();
            return $this->redirectToRoute('gestion_media',['id' => $pid]);
            $this->addFlash(
                'succes',
                'Votre image a bien été supprimé'
            );
          echo  "Le fichier $file existe.";
        } else {
            $this->addFlash(
                'error',
                'Votre image n\'a pas été supprimé'
            );
        }

        return $this->render('admin/media/delete.html.twig');
    }
}