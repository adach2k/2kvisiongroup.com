<?php

namespace App\Controller\Dashboard;

use App\Entity\Service;
use App\Form\ServiceType;
use App\Repository\ServiceRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/dashboard/service')]
class ServiceController extends AbstractController
{
    #[Route('/', name: 'service.index', methods: ['GET', 'POST'])]
    public function index(ServiceRepository $serviceRepository, Request $request)
    {
        $service = new Service();
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $serviceRepository->add($service, true);
            $this->addFlash('success', 'Le service est ajouté avec succès !');
            return $this->redirectToRoute('service.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('dashboard/service/index.html.twig', [
            'services' => $serviceRepository->findAll(),
            'service' => $service,
            'form'  => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'service.edit', methods: ['GET', 'POST'])]
    public function new(Request $request, Service $service, ServiceRepository $serviceRepository): Response
    {
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $serviceRepository->add($service, true);
            $this->addFlash('success', 'Service mis à jour !!!');
            return $this->redirectToRoute('service.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dashboard/service/edit.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'service.delete', methods: ['POST'])]
    public function delete(Request $request, Service $service, ServiceRepository $serviceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$service->getId(), $request->request->get('_token'))) {
            $serviceRepository->remove($service, true);
        }

        return $this->redirectToRoute('service.index', [], Response::HTTP_SEE_OTHER);
    }
}