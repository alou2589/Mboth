<?php

namespace App\Controller;

use App\Repository\CelluleRepository;
use App\Repository\SecteurRepository;
use App\Repository\PersonneRepository;
use App\Repository\QuartierRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StatistiqueController extends AbstractController
{
    #[Route('/statistique', name: 'app_statistique')]
    public function index(QuartierRepository $quartierRepository, CelluleRepository $celluleRepository, SecteurRepository $secteurRepository, PersonneRepository $personneRepository): Response
    {       
        //Nbre de cellules par quartier
        $quartiers= $quartierRepository->findAll();
        $nb_quartier=count($quartiers);        
        foreach($quartiers as $quartier ) {
            $quartier_name[]=$quartier->getNomQuartier();
            $cellule_count[]=count($quartier->getCellules());
        }


        //Nbre de secteurs par quartier
        $cellules= $celluleRepository->findAll();
        $nb_cellule=count($cellules);
        foreach ($cellules as $cellule) {
            # code...
            $cellule_name[]=$cellule->getNomCellule();
            $secteur_count[]=count($cellule->getSecteurs());
            //Nbre de maisons par cellule
            $secteurs_cellule=$cellule->getSecteurs();
            foreach ($secteurs_cellule as $secteur_cellule) {
                $nb_maison[]=count($secteur_cellule->getMaisons());
                //Nbre d'habitants par cellule
                $secteur_maisons=$secteur_cellule->getMaisons();
                foreach ($secteur_maisons as $secteur_maison) {
                    # code...
                    $populations[]=count($secteur_maison->getPersonnes());
                }
            }
        }

        //Nbre de maisons par secteur
        $secteurs=$secteurRepository->findAll();
        $nb_secteur=count($secteurs);
        foreach ($secteurs as $secteur) {
            # code...
            $secteur_name[]=$secteur->getNomSecteur();
            $maison_count[]=count($secteur->getMaisons());
        }

        //Nbre d'hommes
        $hommes =$personneRepository->findBy(['sexe'=>'Homme']);
        $femmes =$personneRepository->findBy(['sexe'=>'Femme']);
        $celibataires =$personneRepository->findBy(['situation_matrimoniale'=>'Célibataire']);
        $mariés =$personneRepository->findBy(['situation_matrimoniale'=>'Marié']);
        $divorces =$personneRepository->findBy(['situation_matrimoniale'=>'Divorcé']);
        
        

        return $this->render('statistique/index.html.twig', [
            'quartier_name' => json_encode($quartier_name),
            'cellule_name' => json_encode($cellule_name),
            'secteur_name' => json_encode($secteur_name),
            'cellule_count'=>json_encode($cellule_count),
            'secteur_count'=>json_encode($secteur_count),
            'maison_count'=>json_encode($maison_count),
            'populations'=>json_encode($populations),
            'nb_maison'=>json_encode($nb_maison),
            'nb_quartier'=>json_encode($nb_quartier),
            'nb_cellule'=>json_encode($nb_cellule),
            'nb_secteur'=>json_encode($nb_secteur),
            'hommes'=>count($hommes),
            'femmes'=>count($femmes),
            'celibataires'=>count($celibataires),
            'mariés'=>count($mariés),
            'divorces'=>count($divorces),
        ]);
    }
}
