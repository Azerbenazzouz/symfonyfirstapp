<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/calcul', name: 'calcul')]
class CalculController extends AbstractController
{
    #[Route('/', name: '_home')]
    public function index(): Response
    {
        return $this->render('calcul/index.html.twig', [
            'controller_name' => 'CalculController',
        ]);
    }
    #[Route('/somme/{A<\d+>}/{B<\d+>}', name: '_somme')]
    public function somme($A,$B): Response
    {
        return $this->render('calcul/somme.html.twig',[
            'Result' => $A+$B
        ]);
    }
}
