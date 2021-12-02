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

    /**
     * @Route("/lucky/number")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

//        return new Response(
//            '<html><body>Lucky number: '.$number.'</body></html>'
//        );
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

}
