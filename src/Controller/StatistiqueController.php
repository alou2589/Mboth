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

class StatistiqueController extends AbstractController
{
    #[Route('/admin/statistique', name: 'app_statistique')]
    public function index(QuartierRepository $quartierRepository, CelluleRepository $celluleRepository, SecteurRepository $secteurRepository, MaisonRepository $maisonRepository, PersonneRepository $personneRepository): Response
    {       
        //Statistiques Maisons et Habitants
            //Secteur
            $secteurs = $secteurRepository->findAll(); 
            foreach ($secteurs as $secteur) {
                # code...
                $name_secteur[]=$secteur->getNomSecteur();
                $name_quartier[]=$secteur->getCellule()->getQuartier()->getNomQuartier();
                $maison_count[]=count($secteur->getMaisons());
                $secteur_maisons=$secteur->getMaisons();
                foreach ($secteur_maisons as $secteur_maison) {
                    # code...
                    $secteur_name[]=$secteur_maison->getSecteur()->getNomSecteur();
                    $population_count[]=count($secteur_maison->getPersonnes());
                }
            }
            //Cellule
            $cellules=$celluleRepository->findAll(); 
            foreach ($cellules as $cellule) {
                # code...
                $cellule_secteurs=$cellule->getSecteurs();
                foreach ($cellule_secteurs as $cellule_secteur) {
                    # code...
                    $name_cellule[]=$cellule_secteur->getCellule()->getNomCellule();
                    $cellule_maison_count[]=count($cellule_secteur->getMaisons());
                    $cellule_maisons=$cellule_secteur->getMaisons();
                    foreach ($cellule_maisons as $cellule_maison) {
                        # code...
                        $cellule_name[]=$cellule_maison->getSecteur()->getCellule()->getNomCellule();
                        $cellule_population_count[]=count($cellule_maison->getPersonnes());
                    }

                }
            }
            //Quartier
            $quartiers=$quartierRepository->findAll(); 
            foreach ($quartiers as $quartier) {
                # code...
                $quartier_cellules=$quartier->getCellules();
                foreach ($quartier_cellules as $quartier_cellule) {
                    # code...
                    $quartier_secteurs=$quartier_cellule->getSecteurs();
                    foreach ($quartier_secteurs as $quartier_secteur) {
                        # code...
                        $name_quartier[]=$quartier_secteur->getCellule()->getQuartier()->getNomQuartier();
                        $quartier_maison_count[]=count($quartier_secteur->getMaisons());
                        $quartier_maisons=$quartier_secteur->getMaisons();
                        foreach ($quartier_maisons as $quartier_maison) {
                            # code...
                            $quartier_name[]=$quartier_maison->getSecteur()->getCellule()->getQuartier()->getNomQuartier();
                            $quartier_population_count[]=count($quartier_maison->getPersonnes());
                        }
                    }
                }
            }
            
            $cellule_element=count($cellule_name);
            $cellule_elements=count($name_cellule);
            $quartier_elements=count($name_quartier);
            $quartier_element=count($quartier_name);
            //dd($cellule_elements);
        
        

        return $this->render('statistique/index.html.twig', [
            'name_secteur'=>json_encode($name_secteur),
            'name_cellule'=>json_encode($name_cellule),
            'name_quartier'=>json_encode($name_quartier),
            'secteur_name'=>json_encode($secteur_name),
            'cellule_name'=>json_encode($cellule_name),
            'cellule_element'=>$cellule_element,
            'cellule_elements'=>$cellule_elements,
            'quartier_elements'=>$quartier_elements,
            'quartier_element'=>$quartier_element,
            'name_quartier'=>json_encode($name_quartier),
            'quartier_name'=>json_encode($quartier_name),
            'secteurs'=>$secteurs,
            'cellules'=>$cellules,
            'quartiers'=>$quartiers,
            'maison_count'=>json_encode($maison_count),
            'cellule_maison_count'=>json_encode($cellule_maison_count),
            'quartier_maison_count'=>json_encode($quartier_maison_count),
            'population_count'=>json_encode($population_count),
            'cellule_population_count'=>json_encode($cellule_population_count),
            'quartier_population_count'=>json_encode($quartier_population_count),
        ]);
    }
}
