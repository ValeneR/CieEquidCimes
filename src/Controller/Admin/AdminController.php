<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ArticleType;
use App\Entity\Article;

/**
* @Route("/admin", name="admin_")
*/

class AdminController extends AbstractController
{
    /* Afficher la page admin */
    /**
    * @Route("/", name="index")
    */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');
    }

    /* Afficher le formulaire de création d'un article */
    /*
    * @Route("/new", name="new")
    */
    public function new(Request $request) : Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);
            $entityManager->flush();
            return $this->redirectToRoute('admin_index');
        }
        return $this->render('admin/form.html.twig', [
            "form" => $form->createView(),
        ]);
    }
}
