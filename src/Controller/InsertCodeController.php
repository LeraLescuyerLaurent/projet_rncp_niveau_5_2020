<?php

namespace App\Controller;

use App\Form\InsertCodeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class InsertCodeController extends AbstractController
{
    /**
     * @Route("admin/insert/code", name="admin_insert_code", methods={"GET","POST"})
     */
    public function index(Request $request)
    {
        $form = $this->createForm(InsertCodeType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $langage = $form->getData()->getLangage();
            return $this->redirectToRoute('admin_insert_code_final',['langage' => $langage]);
        }
        return $this->render('admin/insert_code/index.html.twig', ['formInsertCode'=> $form->createView()]);
    }

    /**
     * @Route("admin/insert/code/finale/{langage}", name="admin_insert_code_final")
     */
    public function insertCodeFinale($langage=null)
    {
        return $this->render('admin/insert_code/insertCodeFinale.html.twig', ['langage' => $langage]);
    }
}
