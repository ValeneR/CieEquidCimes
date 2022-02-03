<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /* Afficher le blog */
    /**
     * @Route("/blog/", name="blog_index")
     */
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'website' => 'EquidCîmes',
         ]);
    }
}
