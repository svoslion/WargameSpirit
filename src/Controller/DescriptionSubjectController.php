<?php

namespace App\Controller;


use App\Entity\Subject;
use App\Entity\Comment;
use App\Repository\CategoryRepository;
use App\Form\Type\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DescriptionSubjectController extends AbstractController
{
    #[Route('/description/subject/{slug}', name: 'app_description_subject')]
    public function show(?Subject $subject, CategoryRepository $categoryRepo): Response
    {
        if (!$subject) {
            return $this->redirectToRoute('app_home');
        }

        $comment = new Comment($subject);

        $commentForm = $this->createForm(CommentType::class, $comment);
 
        return $this->renderForm('description_subject/show.html.twig', [
            'subject' => $subject,
            'commentForm' => $commentForm,
            'categories' => $categoryRepo->findAll()  
        ]);
    }
}
