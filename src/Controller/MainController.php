<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    #[Route('/{slug}', name: 'app_main_slug', requirements: ['slug' => '.+'], priority: -1)]
    public function index(): Response
    {
        return $this->render('main/index.html.twig');
    }
}
