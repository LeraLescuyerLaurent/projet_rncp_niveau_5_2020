<?php

namespace App\Controller;

use App\Entity\Media;
use App\Form\MediaType;
use App\Service\ImageService;
use App\Form\FormatsMediaType;
use App\Repository\MediaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class MediaController extends AbstractController
{
    /**
     * @Route("admin/media/{id}", name="admin-gestion-media")
     * @IsGranted("ROLE_ADMIN")
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
            $ext = '.'.pathinfo($data->getClientOriginalName(), PATHINFO_EXTENSION);
          
            $annee = date('Y');
            $mois = date('m');
            $day = date("d");
            $imgService->createFolder($annee,$mois,$day,$image);

            
            
            $url = $image. DIRECTORY_SEPARATOR . $annee . DIRECTORY_SEPARATOR . $mois . DIRECTORY_SEPARATOR . $day;
            
            $slugger = new AsciiSlugger();
            $slug = $slugger->slug($media->getName());
            $nomimage = $slug . '-' . uniqid();
            $uriCrop = 'dist/images' . DIRECTORY_SEPARATOR . $annee . DIRECTORY_SEPARATOR . $mois . DIRECTORY_SEPARATOR . $day. DIRECTORY_SEPARATOR . $nomimage.$ext;
            try {
                $fin =  $data->move(
                    $url,
                    $nomimage.$ext
                );
                if ($fin) {
                    $formats = $imgService->Format();
                    foreach ($formats as $k => $v) {
                        $prefixe = $k;
                        $taille = explode('x',$v);
                        $imgService->cropImage($uriCrop,$url.DIRECTORY_SEPARATOR. $nomimage.'_'.$prefixe.$ext,$taille[0],$taille[1],$ext); 
                    }
                    
                    
                }
            } catch (FileException $e) {}
            
            
            
            $name = htmlspecialchars($media->getName());
            $media->setName($name);
            $uri = '/dist/images' . DIRECTORY_SEPARATOR . $annee . DIRECTORY_SEPARATOR . $mois . DIRECTORY_SEPARATOR . $day. DIRECTORY_SEPARATOR . $nomimage.$ext;
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
     * @Route("admin/media/imageUne/{id}", name = "admin-imageUne-media")
     * @IsGranted("ROLE_ADMIN")
     */
    public function imageUneInsertInPage($id,Request $request,MediaRepository $em)
    {
        if($id){
            $BddMedia= $em->find(['id' => $id]);
            $form = $this->createForm(FormatsMediaType::class);
            $form->handleRequest($request);
                if ($form->isSubmitted()) {
                    $id = $BddMedia->getId();
                    return $this->redirectToRoute('insert-imageUne',['id' => $id]);
                }
        }
        return $this->render('admin/media/editImageUne.html.twig', [
            'AlignMediaType'=> $form->createView(),
            'media' => $BddMedia,
            ]);
    }
    /**
     * @Route("admin/insertImageUne/{id}", name="admin-insert-imageUne")
     * @IsGranted("ROLE_ADMIN")
     */
    public function insertImageUne($id=null,MediaRepository $em)
    {

            $BddMedia= $em->find(['id' => $id]);

        return $this->render('admin/media/insertImageUne.html.twig', ['media' => $BddMedia]);
    }

        /**
     * @Route("admin/media/show/{id}", name = "admin-show-media")
     * @IsGranted("ROLE_ADMIN")
     */
    public function insertInPage($id,Request $request,MediaRepository $em)
    {
        if($id){
            $mediaBdd= $em->find(['id' => $id]);
            $name = $mediaBdd->getName();
            $url = $mediaBdd->getUrl();
            
            $form = $this->createForm(FormatsMediaType::class);
            $form->handleRequest($request);
                if ($form->isSubmitted()) {
                    $id = $mediaBdd->getId();
                    $format = $form->getData()->getFormat();
                    return $this->redirectToRoute('admin-insert-image',['id' => $id,'format'=>$format]);
                }
            return $this->render('admin/media/edit.html.twig', [
                'FormatsMediaType'=> $form->createView(),
                'name' => $name,
                'url' =>$url,
                ]);
        }
    }
    /**
     * @Route("admin/tinymce/{id}/{format}", name="admin-insert-image")
     * @IsGranted("ROLE_ADMIN")
     */
    public function tinymce($id=null,$format,  MediaRepository $em)
    {
            $format =$format;
            $BddMedia= $em->find(['id' => $id]);
            $url = $BddMedia->getUrl();
            $name = $BddMedia->getName();
            $explode = explode('.',$url);
            $prefix = $explode[0];
            $ext = $explode[1];
            $image = $prefix.$format.'.'.$ext;
        return $this->render('admin/media/insertImage.html.twig', [
            'name' => $name,
            'urlImage' => $image,
            ]);
    }

    /**
     * @Route("admin/media/delete/{id}", name="admin-delete-media")
     * @IsGranted("ROLE_ADMIN")
     */
    function deleteMedia($id, MediaRepository $media, Request $request,EntityManagerInterface $entityManager,ImageService $imgService)
    {
        $id = $id ;
        //je recup l'url du fichier 
        $m = $media->find(['id' => $id]);
        $urlBdd = $m->getUrl();
        $suffix = explode('.',$urlBdd);
        $image = $this->getParameter('delete_directory');
        $file = $image.$urlBdd ;
        $pid = $m->getToken();
        
        if (file_exists($file)) {
            $filename = implode('.',array_slice($suffix,0,-1));
            foreach(glob($image.$filename.'*') as $v){
                if (file_exists($v)) {
                    unlink($v);
                }
                $entityManager->remove($m);
                $entityManager->flush();
            }
            return $this->redirectToRoute('admin-gestion-media',['id' => $pid]);
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