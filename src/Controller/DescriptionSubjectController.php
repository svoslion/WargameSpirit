<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DescriptionSubjectController extends AbstractController
{
    #[Route('/description/subject', name: 'app_description_subject')]
    public function index(): Response
    {
        return $this->render('description_subject/index.html.twig', [
            'controller_name' => 'DescriptionSubjectController',
        ]);
    }
}
