<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetPortfolioController extends AbstractController
{
    /**
     * @Route("/", name="projet_portfolio")
     */
    public function index(): Response
    {
        return $this->render('projet_portfolio/index.html.twig', [
            'controller_name' => 'ProjetPortfolioController',
        ]);
    }
     /**
     * @Route("/CV", name="CV")
     */
    public function CV(): Response
    {
        return $this->render('cv.html.twig', [
            'controller_name' => 'ProjetPortfolioController',
        ]);
    }
}
