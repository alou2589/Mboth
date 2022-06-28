<?php

namespace App\Controller;

use App\Entity\Maison;
use App\Entity\Secteur;
use App\Form\SecteurType;
use App\Service\QrCodeService;
use App\Form\SecteurMaisonType;
use App\Repository\MaisonRepository;
use App\Repository\SecteurRepository;
use App\Repository\PersonneRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/secteur')]
class SecteurController extends AbstractController
{
    #[Route('/', name: 'app_secteur_index', methods: ['GET'])]
    public function index(SecteurRepository $secteurRepository): Response
    {
        return $this->render('secteur/index.html.twig', [
            'secteurs' => $secteurRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_secteur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SecteurRepository $secteurRepository): Response
    {
        $secteur = new Secteur();
        $form = $this->createForm(SecteurType::class, $secteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $secteur->setUpdatedAt(new \DateTimeImmutable());
            $secteur->setCreatedAt(new \DateTimeImmutable());
            $secteurRepository->add($secteur);
            return $this->redirectToRoute('app_secteur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('secteur/new.html.twig', [
            'secteur' => $secteur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_secteur_show', methods: ['GET'])]
    public function show(Secteur $secteur): Response
    {
        return $this->render('secteur/show.html.twig', [
            'secteur' => $secteur,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_secteur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Secteur $secteur, SecteurRepository $secteurRepository): Response
    {
        $form = $this->createForm(SecteurType::class, $secteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $secteur->setUpdatedAt(new \DateTimeImmutable());
            $secteurRepository->add($secteur);
            return $this->redirectToRoute('app_secteur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('secteur/edit.html.twig', [
            'secteur' => $secteur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_secteur_delete', methods: ['POST'])]
    public function delete(Request $request, Secteur $secteur, SecteurRepository $secteurRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$secteur->getId(), $request->request->get('_token'))) {
            $secteurRepository->remove($secteur);

            return $this->redirectToRoute('app_secteur_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('cellule/delete.html.twig',[
            'secteur'=>$secteur
        ]);    
    }
    #[Route('/{id}/listemaison', name: 'app_secteur_liste_maison', methods: ['GET'])]
    public function listemaison(Secteur $secteur): Response
    {
        $maisons=$secteur->getMaisons();
        return $this->render('secteur/listemaison.html.twig', [
            'maisons'=>$maisons,
            'secteur'=>$secteur
        ]);
    }

    #[Route('/{id}/newmaison', name: 'app_secteur_new_maison', methods: ['GET', 'POST'])]
    public function newmaison(Request $request, Secteur $secteur, MaisonRepository $maisonRepository, QrCodeService $qrcodeservice): Response
    {
        $maison=new Maison();  
        $qr_code=null;
        $form = $this->createForm(SecteurMaisonType::class, $maison);
        $form->handleRequest($request);
        $code_maison="";
        if ($form->isSubmitted() && $form->isValid()) {            
            $mysecteur=strtoupper(substr($secteur->getNomSecteur(),0,3));
            $cellule= $secteur->getCellule()->getNomCellule();
            $quartier= $secteur->getCellule()->getQuartier()->getNomQuartier();
            $house=$quartier." ".$cellule;
            $code_maison= implode('', array_map(function($p) { return strtoupper($p[0]); }, explode(' ', $house)));
            $code=strtoupper(substr($code_maison.''.$mysecteur.''.md5(random_int(0,9999)),0,10));
            $maison->setQrMaison((string)$qr_code);
            $maison->setUpdatedAt(new \DateTimeImmutable());
            $maison->setCreatedAt(new \DateTimeImmutable());
            $maison->setCodeMaison($code);
            $maison->setSecteur($secteur);
            $maisonRepository->add($maison);            
            $qr_code=$qrcodeservice->qrcode($maison->getId().'/codevalidationmaison',$maison->getId());
            $maison->setQrMaison((string)$qr_code);
            $maisonRepository->add($maison);   
            return $this->redirectToRoute('app_secteur_liste_maison', ['id'=>$secteur->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('secteur/newmaison.html.twig', [
            'maison' => $maison,
            'secteur'=>$secteur,
            'form' => $form,
        ]);
    }

    
    #[Route("/{id}/education",name:"app_secteur_education", methods: ['GET'])]
    public function education(Secteur $secteur)
    {
        $maisons=$secteur->getMaisons();

        return $this->render('secteur/education.html.twig',[
            'maisons'=>$maisons,
            'secteur'=>$secteur
        ]);
    }
    #[Route("/{id}/listepersonnes",name:"app_secteur_personnes", methods: ['GET'])]
    public function societe(Secteur $secteur)
    {
        $maisons=$secteur->getMaisons();

        return $this->render('secteur/listepersonne.html.twig',[
            'maisons'=>$maisons,
            'secteur'=>$secteur
        ]);
    }
    
}
