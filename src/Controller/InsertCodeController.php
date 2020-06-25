<?php

namespace App\Controller;

use App\Form\InsertCodeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InsertCodeController extends AbstractController
{
    /**
     * @Route("admin/insert/code", name="admin-insert-code", methods={"GET","POST"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function index(Request $request)
    {
        $form = $this->createForm(InsertCodeType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $langage = $form->getData()->getLangage();
            return $this->redirectToRoute('admin-insert-code-final',['langage' => $langage]);
        }
        return $this->render('admin/insert_code/index.html.twig', ['formInsertCode'=> $form->createView()]);
    }

    /**
     * @Route("admin/insert/code/finale/{langage}", name="admin-insert-code-final")
     * @IsGranted("ROLE_ADMIN")
     */
    public function insertCodeFinale($langage=null)
    {
        return $this->render('admin/insert_code/insertCodeFinale.html.twig', ['langage' => $langage]);
    }
}
