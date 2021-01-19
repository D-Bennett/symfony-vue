<?php

namespace App\Controller\App1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/app-1")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/", name="app_app1_index")
     */
    public function index(): Response
    {
        return $this->render('app/app1/index.html.twig');
    }
}