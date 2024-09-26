<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/author')]
class AuthorController extends AbstractController
{
    #[Route('/show', name: 'app_author_show')]
    public function showAuthor(): Response
    {
        $authorName = 'Victor Hego';
        $authorEmail = 'vh@gmail.com';

        // Pass the variables to the Twig template
        return $this->render('author/showAuthor.html.twig', [
            'authorName' => $authorName,
            'authorEmail' => $authorEmail
        ]);
    }
}
