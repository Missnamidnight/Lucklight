<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function index(): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'Bienvenidos',
        ]);
    }

      /**
     * @Route("/empleados", name="app_seccionempleados")
     */
    public function empleados(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        return $this->render('admins/seccionempleados.html.twig',);
    }

}
