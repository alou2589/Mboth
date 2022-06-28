<?php

namespace App\Controller\PointFocal;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\MaisonRepository;
use App\Repository\CelluleRepository;
use App\Repository\SecteurRepository;
use App\Repository\PersonneRepository;
use App\Repository\QuartierRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/pointfocal')]
class AccueilController extends AbstractController
{
    #[Route('/{id}', name: 'app_point_focal_accueil')]
    public function index(User $user,QuartierRepository $quartierRepository,CelluleRepository $celluleRepository, SecteurRepository $secteurRepository,MaisonRepository $maisonRepository, PersonneRepository $personneRepository): Response
    {
        $cellule_pf=$user->getPersonne()->getMaison()->getSecteur()->getCellule();
        $controller_name='Accueil';
        $secteurs=$cellule_pf->getSecteurs();
        return $this->render('point_focal/accueil/index.html.twig', [
            'controller_name' => $controller_name,
            'cellule_pf' => $cellule_pf,
            'secteurs' => $secteurs,
        ]);
    }
}
