<?php

namespace App\Controller;

use App\Entity\Subject;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DescriptionSubjectController extends AbstractController
{
    #[Route('/description/subject/{slug}', name: 'app_description_subject')]
    public function show(?Subject $subject): Response
    {
        if (!$subject) {
            return $this->redirectToRoute('app_home');
        }
        return $this->render('description_subject/show.html.twig', [
            'subject' => $subject, 
        ]);
    }
}
