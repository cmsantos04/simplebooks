<?php
// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'page_title' => 'Simplebooks',
            'app_name' => 'My Symfony App',
            'message' => 'Welcome to our website!',
        ]);
    }

}