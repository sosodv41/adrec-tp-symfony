<?php

namespace App\Controller;

use App\Repository\AlbumRepository;
use App\Repository\ArtistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route(path="/", name="home_page")
     * @param ArtistRepository $artistRepository
     * @param AlbumRepository $albumRepository
     * @return Response
     */
    public function homePage2(
        ArtistRepository $artistRepository,
        AlbumRepository $albumRepository
    ): Response
    {
        return $this->render('home.html.twig', [
            'albums' => $albumRepository->findAll(),
            'artists' => $artistRepository->findByNationality(),
        ]);
    }
}