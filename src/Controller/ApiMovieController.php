<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiMovieController extends AbstractController
{
    #[Route('/api/movie', name: 'app_api_movie', methods: ['GET'])]
    public function index(MovieRepository $rep): Response
    {
        $movies = $rep->findAll();
        return $this->json($movies, 200, []);
    }

   

}
