<?php

namespace App\Controller\App2;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/app-2")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/", name="app_app2_index")
     */
    public function index(): Response
    {
        return $this->render('app/app2/index.html.twig');
    }
}