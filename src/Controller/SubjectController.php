<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubjectController extends AbstractController
{
    #[Route('/subject', name: 'subject_show')] 
    // slug pour trouver un article (paramètre dynamique)
    public function show(): Response
    {
        return $this->render('subject/show.html.twig', [
            'controller_name' => 'SubjectController',
        ]);
    }
}
