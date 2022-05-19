<?php

namespace App\Controller;

use App\Entity\Cellule;
use App\Entity\Secteur;
use App\Form\CelluleType;
use App\Form\CelluleSecteurType;
use App\Repository\CelluleRepository;
use App\Repository\SecteurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/cellule')]
class CelluleController extends AbstractController
{
    #[Route('/', name: 'app_cellule_index', methods: ['GET'])]
    public function index(CelluleRepository $celluleRepository): Response
    {
        return $this->render('cellule/index.html.twig', [
            'cellules' => $celluleRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_cellule_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CelluleRepository $celluleRepository): Response
    {
        $cellule = new Cellule();
        $form = $this->createForm(CelluleType::class, $cellule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cellule->setUpdatedAt(new \DateTimeImmutable());
            $cellule->setCreatedAt(new \DateTimeImmutable());
            $celluleRepository->add($cellule);
            return $this->redirectToRoute('app_cellule_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cellule/new.html.twig', [
            'cellule' => $cellule,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cellule_show', methods: ['GET'])]
    public function show(Cellule $cellule): Response
    {
        return $this->render('cellule/show.html.twig', [
            'cellule' => $cellule,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_cellule_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cellule $cellule, CelluleRepository $celluleRepository): Response
    {
        $form = $this->createForm(CelluleType::class, $cellule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cellule->setUpdatedAt(new \DateTimeImmutable());
            $celluleRepository->add($cellule);
            return $this->redirectToRoute('app_cellule_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cellule/edit.html.twig', [
            'cellule' => $cellule,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_cellule_delete', methods: ['GET','POST'])]
    public function delete(Request $request, Cellule $cellule, CelluleRepository $celluleRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cellule->getId(), $request->request->get('_token'))) {
            $celluleRepository->remove($cellule);
            return $this->redirectToRoute('app_cellule_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('cellule/delete.html.twig',[
            'cellule'=>$cellule
        ]);
    }

    
    #[Route('/{id}/listesecteur', name: 'app_cellule_liste_secteur', methods: ['GET'])]
    public function listesecteur(Cellule $cellule): Response
    {
        $secteurs=$cellule->getSecteurs();
        return $this->render('cellule/listesecteur.html.twig', [
            'secteurs'=>$secteurs,
            'cellule'=>$cellule
        ]);
    }

    #[Route('/{id}/newsecteur', name: 'app_cellule_new_secteur', methods: ['GET', 'POST'])]
    public function new_secteur(Request $request, Cellule $cellule, SecteurRepository $secteurRepository): Response
    {
        $secteur=new Secteur();
        $form = $this->createForm(CelluleSecteurType::class, $secteur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $secteur->setUpdatedAt(new \DateTimeImmutable());
            $secteur->setCreatedAt(new \DateTimeImmutable());
            $secteur->setCellule($cellule);
            $secteurRepository->add($secteur);
            return $this->redirectToRoute('app_cellule_liste_secteur', ['id'=>$cellule->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cellule/newsecteur.html.twig', [
            'cellule' => $cellule,
            'secteur'=>$secteur,
            'form' => $form,
        ]);
    }
    
    #[Route("/{id}/education",name:"app_cellule_education", methods: ['GET'])]
    public function education(Cellule $cellule)
    {
        $secteurs=$cellule->getSecteurs();

        return $this->render('cellule/education.html.twig',[
            'secteurs'=>$secteurs,
            'cellule'=>$cellule
        ]);
    }
    #[Route("/{id}/listepersonnes",name:"app_cellule_personne", methods: ['GET'])]
    public function societe(Cellule $cellule)
    {
        return $this->render('cellule/listepersonne.html.twig',[
            'cellule'=>$cellule
        ]);
    }
}
