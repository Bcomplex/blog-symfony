<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutConroller extends AbstractController
{
    /**
     * @Route("/about", name="about")
     */
    public function index(): Response
    {
        return $this->render('about_conroller/about.html.twig', [
            'controller_name' => 'AboutConroller',
        ]);
    }
}
//handler