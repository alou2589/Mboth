<?php

namespace App\Controller;

use App\Repository\CelluleRepository;
use App\Repository\QuartierRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StatistiqueController extends AbstractController
{
    #[Route('/statistique', name: 'app_statistique')]
    public function index(QuartierRepository $quartierRepository): Response
    {       
        //Nbre cellules par quartier
        $quartiers= $quartierRepository->findAll();
        $nb_quartier=count($quartiers);        
        foreach($quartiers as $quartier ) {
            $quartier_name[]=$quartier->getNomQuartier();
            $cellule_count[]=count($quartier->getCellules());

        }
        return $this->render('statistique/index.html.twig', [
            'quartier_name' => json_encode($quartier_name),
            'cellule_count'=>json_encode($cellule_count),
            'nb_quartier'=>json_encode($nb_quartier)
        ]);
    }
}
