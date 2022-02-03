<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/article", name="article_")
*/

class ArticleController extends AbstractController
{
    /* Afficher un article par son id */
    /**
    * @Route("/{id}", requirements={"id"="\d+"}, name="show")
    */
    public function index(int $id): Response
    {
        return $this->render('/blog/article/show.html.twig', [
            'website' => 'EquidCîmes',
         ]);
    }

    /* Afficher la liste des articles */
    /**
    * @Route("/list/{page}", requirements={"page"="\d+"}, name="list")
    */
    public function list(int $page = 1): Response
    {
        return $this->render('article/list.html.twig', ['page' => $page]);
    }

    /* Créer un nouvel article */
    /**
    * @Route("/new", methods={"GET","POST"}, name="new")
    */

    /* Editer un article */
    /**
    * @Route("/{id}", methods={"GET"}, requirements={"id"="\d+"}, name="show")
    */

    /* Supprimer un article */
    /**
    * @Route("/{id}", methods={"DELETE"}, requirements={"id"="\d+"}, name="delete")
    */
}















































