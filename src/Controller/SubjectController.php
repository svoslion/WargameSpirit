<?php

namespace App\Controller;

use App\Repository\SubjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubjectController extends AbstractController
{
    #[Route('/subject', name: 'subject_show')] 
    // slug pour trouver un article (paramètre dynamique)
    public function show(SubjectRepository $subjectRepo): Response
    {
        return $this->render('subject/show.html.twig', [
            'subjects' => $subjectRepo->findAll(),
        ]);
    }
}
