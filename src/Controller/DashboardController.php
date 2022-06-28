<?php

namespace App\Controller;

use App\Repository\MaisonRepository;
use App\Repository\CelluleRepository;
use App\Repository\SecteurRepository;
use App\Repository\PersonneRepository;
use App\Repository\QuartierRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'app_dashboard')]
    public function index(QuartierRepository $quartierRepository,CelluleRepository $celluleRepository,SecteurRepository $secteurRepository,MaisonRepository $maisonRepository,PersonneRepository $personneRepository): Response
    {
        $quartiers=$quartierRepository->findAll();
        $cellules=$celluleRepository->findAll();
        $secteurs=$secteurRepository->findAll();
        $maisons=$maisonRepository->findAll();
        $personnes=$personneRepository->findAll();
        $hommes=$personneRepository->findBy(['sexe'=>'Homme']);
        $femmes=$personneRepository->findBy(['sexe'=>'Femme']);
        $mariés=$personneRepository->findBy(['situation_matrimoniale'=>'Marié']);
        $celibataires=$personneRepository->findBy(['situation_matrimoniale'=>'Célibataire']);
        $divorcés=$personneRepository->findBy(['situation_matrimoniale'=>'Divordé']);
        return $this->render('dashboard/index.html.twig', [
            'quartiers' => $quartiers,
            'cellules' => $cellules,
            'secteurs' => $secteurs,
            'maisons' => $maisons,
            'personnes' => $personnes,
            'hommes' => $hommes,
            'femmes' => $femmes,
            'mariés' => $mariés,
            'celibataires' => $celibataires,
            'divorcés' => $divorcés,
        ]);
    }
}
