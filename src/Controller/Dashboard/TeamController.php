<?php

namespace App\Controller\Dashboard;

use App\Entity\Team;
use App\Form\TeamType;
use App\Repository\TeamRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/dashboard/team')]
class TeamController extends AbstractController
{
    #[Route('/', name: 'team.index', methods: ['GET', 'POST'])]
    public function index(TeamRepository $teamRepository, Request $request): Response
    {
        $team = new Team();
        $form = $this->createForm(TeamType::class, $team);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) { 
            $teamRepository->add($team, True);
            $this->addFlash('success', 'Nouveau membre ajouté avec succès');
            return $this->redirectToRoute('team.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('dashboard/team/index.html.twig', [
            'teams' => $teamRepository->findAll(),
            'team' => $team,
            'form' => $form->createView(),
        ]);
    }

    #[Route('{id}/edit', name: 'team.edit', methods: ['GET', 'POST'])]
    public function edit(TeamRepository $teamRepository, Team $team, Request $request): Response
    {
        $form = $this->createForm(TeamType::class, $team);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) { 
            $teamRepository->add($team, True);
            $this->addFlash('success', 'Profil membre mis à jour avec succés');
            return $this->redirectToRoute('team.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('dashboard/team/edit.html.twig', [
            'team' => $team,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/delete', name: 'team.delete', methods: ['POST'])]
    public function delete(Request $request, Team $team, TeamRepository $teamRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$team->getId(), $request->request->get('_token'))) {
            $teamRepository->remove($team, true);
        }

        return $this->redirectToRoute('team.index', [], Response::HTTP_SEE_OTHER);
    }
}
