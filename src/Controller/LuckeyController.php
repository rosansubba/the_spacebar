<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckeyController extends AbstractController
{
    #[Route('/luckey', name: 'luckey')]
    public function index(): Response
    {
        return $this->render('luckey/index.html.twig', [
            'controller_name' => 'LuckeyController',
        ]);
    }
}
