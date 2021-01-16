<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route(path="/", name="home_page")
     * @return Response
     */
    public function homePage(): Response
    {
        return $this->render('home.html.twig', [
            'date' => new \DateTime(),
        ]);
    }
}
