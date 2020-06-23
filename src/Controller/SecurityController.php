<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request,UserPasswordEncoderInterface $encoder)
    {
    }

    
    /**
     * @Route("/login", name="security_login")
     *
     * 
     */
    public function login(Request $request)
    {

        $user = new User();


        $form = $this->createForm(RegistrationType::class, $user);



        return $this->render('security/login.html.twig', [
            'controller_name' => 'SecurityController',
            'formLogin' =>$form->createView()
        ]);
    }

/**
 * @Route("logout", name="security_logout")
 */
    public  function logout()
    {
        return $this->redirectToRoute('index-site');
    }
}
