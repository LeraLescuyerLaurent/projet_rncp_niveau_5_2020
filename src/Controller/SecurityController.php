<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    public const LAST_EMAIL = 'app_login_form_last_email';



    /**
     * @Route("admin/users/add", name="admin-security-registration")
     * @IsGranted("ROLE_ADMIN")
     */
    public function registration(Request $request,UserPasswordEncoderInterface $encoder): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class,$user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $plainPassword = $form['plainPassword']->getdata();

            $data->setPassword($encoder->encodePassword($user, $plainPassword));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', "l'utilisateur est bien inscrit");

            $this->redirectToRoute('security-login');
            
        }

        return $this->render('security/inscription.html.twig', [
            'registration_form' => $form->createView(),
        ]);
    }

    
    /**
     * @Route("/login", name="security-login")
     */
    public function login(): Response
    {
        return $this->render('security/login.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

/**
 * @Route("logout", name="security-logout")
 */
    public  function logout()
    {
        throw new \LogicException('this method can be blank - it will be intercepted by the logout key on your firewall. ');
    }
}
