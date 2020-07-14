<?php

namespace App\Controller;

use DateTime;
use App\Entity\Contact;
use App\Form\ContactType;
use App\Form\AdminContactType;
use App\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
    * @Route("/contact", name="contact")
    */
    public function addMessageContact(Request $request)
    {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() ) {
            $slugger = new AsciiSlugger();

            $formDataBrute = $form->getData();
            $date = new DateTime();

            $slugName = htmlentities($slugger->slug($formDataBrute->getName()));
            $content = htmlentities($formDataBrute->getContent());
            $title = htmlentities($formDataBrute->getTitle());

            $contact->setName($slugName);
            $contact->setTitle($title);
            $formDataBrute->setCreatedAt($date);
            $contact->setContent($content);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();
            $this->addFlash(
                'success',
                'Votre message est bien envoyé une réponse vous sera apporté dans le plus bref délais'
            );
            }
        return $this->render('contact/index.html.twig', ['formContact' => $form->createView()]);
    }


    // ADMINISTRATION DES MESSAGE DE CONTACT
    
    /**
    *@Route("admin/contact/list/{page}", name="admin-contact-index")
    * @IsGranted("ROLE_ADMIN")
    */
    public function adminContactIndex(int $page = 1,ContactRepository $contactRepository): Response
    {
        $nbContactsByPage = 10;
        $contacts = $contactRepository->findAllContactByPage($page, $nbContactsByPage);
        $pagination = array(
            'page' => $page,
            'nbPages' => ceil(count($contacts) / $nbContactsByPage),
            'nomRoute' => 'admin-contact-index',
            );
        return $this->render('admin/contact/index.html.twig', [
            'contacts' => $contacts,
            'pagination'=>$pagination
            ]);
    }

    /**
    *@Route("admin/contact/lire/{id}", name="admin-contact-lire")
    *@IsGranted("ROLE_ADMIN")
    */
    public function adminContactShow(int $id,ContactRepository $contactRepository, Request $request,Contact $contact): Response
    {
        $contact = $contactRepository->find(['id'=>$id]);

        $form = $this->createForm(AdminContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash(
                'success',
                'Le message a bien été Lu '
            );
            return $this->redirectToRoute('admin-contact-index');
        }

        return $this->render('admin/contact/show.html.twig', [
            'formContactLu' => $form->createView(),
            'contact' => $contactRepository->findOneBy(['id' =>$id]),
        ]);
    }

    /**
    * @Route("admin/contact/delete/{id}", name="admin-contact-delete")
    * @IsGranted("ROLE_ADMIN")
    */
    public function deleteMessageContact(Contact $contact)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($contact);
        $entityManager->flush();
        $this->addFlash(
            'error',
            'Le message a bien été supprimé'
        );
        return $this->redirectToRoute('admin-contact-index');
    }

}
