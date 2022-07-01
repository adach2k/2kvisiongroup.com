<?php

namespace App\Controller;

use App\Repository\BlogRepository;
use App\Repository\ServiceRepository;
use App\Repository\TeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private $serviceRepository;
    private $teamRepository;
    private $blogRepository;

    public function __construct(ServiceRepository $serviceRepo, TeamRepository $teamRepo, BlogRepository $blogRepo)
    {
        $this->serviceRepository = $serviceRepo;
        $this->teamRepository = $teamRepo;
        $this->blogRepository = $blogRepo;
    }
    
    #[Route('/', name: 'home', methods: ['GET', 'POST'])]
    public function index()
    {
        return $this->render('front/home.html.twig', [
            'services' => $this->serviceRepository->findAll(),
            'teams' => $this->teamRepository->findAll(),
            'blogs' => $this->blogRepository->findAll(),
        ]);
    }

    #[Route('/about', name: 'about', methods: ['GET', 'POST'])]
    public function getAbout(): Response
    {
        return $this->render('front/about.html.twig', []);
    }

    #[Route('/services', name: 'service', methods: ['GET', 'POST'])]
    public function getServices(): Response
    {
        return $this->render('front/service.html.twig', [
            'services' => $this->serviceRepository->findAll(),
        ]);
    }

    #[Route('/teams', name: 'team', methods: ['GET', 'POST'])]
    public function getTeams(): Response
    {
        return $this->render('front/team.html.twig', [
            'teams' => $this->teamRepository->findAll(),
        ]);
    }

    #[Route('/blogs', name: 'blog', methods: ['GET', 'POST'])]
    public function getBlog(): Response
    {
        return $this->render('front/blog.html.twig', [
            'blogs' => $this->blogRepository->findAll(),
        ]);
    }

    #[Route('/contact', name: 'contact', methods: ['GET', 'POST'])]
    public function getContact(): Response
    {
        return $this->render('front/contact.html.twig', []);
    }

    #[Route('/portfolio', name: 'portfolio', methods: ['GET', 'POST'])]
    public function getPortfolio(): Response
    {
        return $this->render('front/portfolio.html.twig', []);
    }
}