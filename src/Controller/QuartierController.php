<?php

namespace App\Controller;

use App\Entity\Cellule;
use App\Entity\Quartier;
use App\Form\QuartierType;
use App\Form\QuartierCelluleType;
use App\Repository\CelluleRepository;
use App\Repository\QuartierRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/quartier')]
class QuartierController extends AbstractController
{
    #[Route('/', name: 'app_quartier_index', methods: ['GET'])]
    public function index(QuartierRepository $quartierRepository): Response
    {
        return $this->render('quartier/index.html.twig', [
            'quartiers' => $quartierRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_quartier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, QuartierRepository $quartierRepository): Response
    {
        $quartier = new Quartier();
        $form = $this->createForm(QuartierType::class, $quartier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $quartier->setUpdatedAt(new \DateTimeImmutable());
            $quartier->setCreatedAt(new \DateTimeImmutable());
            $quartierRepository->add($quartier);
            return $this->redirectToRoute('app_quartier_show', ['id'=>$quartier->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('quartier/new.html.twig', [
            'quartier' => $quartier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_quartier_show', methods: ['GET'])]
    public function show(Quartier $quartier): Response
    {
        return $this->render('quartier/show.html.twig', [
            'quartier' => $quartier,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_quartier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Quartier $quartier, QuartierRepository $quartierRepository): Response
    {
        $form = $this->createForm(QuartierType::class, $quartier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $quartier->setUpdatedAt(new \DateTimeImmutable());
            $quartierRepository->add($quartier);
            return $this->redirectToRoute('app_quartier_show', ['id'=>$quartier->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('quartier/edit.html.twig', [
            'quartier' => $quartier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_quartier_delete', methods: ['GET','POST'])]
    public function delete(Request $request, Quartier $quartier, QuartierRepository $quartierRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$quartier->getId(), $request->request->get('_token'))) {
            $quartierRepository->remove($quartier);        
            return $this->redirectToRoute('app_quartier_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('quartier/delete.html.twig', [
            'quartier' => $quartier
        ]);
    }

    #[Route('/{id}/listequartier', name: 'app_quartier_liste_cellule', methods: ['GET'])]
    public function listecellule(Quartier $quartier): Response
    {
        $cellules=$quartier->getCellules();
        return $this->render('quartier/listecellule.html.twig', [
            'cellules'=>$cellules,
            'quartier'=>$quartier
        ]);
    }

    #[Route('/{id}/newcellule', name: 'app_quartier_new_cellule', methods: ['GET', 'POST'])]
    public function new_personne(Request $request, Quartier $quartier, CelluleRepository $celluleRepository): Response
    {
        $cellule=new Cellule();
        $form = $this->createForm(QuartierCelluleType::class, $cellule);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $cellule->setUpdatedAt(new \DateTimeImmutable());
            $cellule->setCreatedAt(new \DateTimeImmutable());
            $cellule->setQuartier($quartier);
            $celluleRepository->add($cellule);
            return $this->redirectToRoute('app_quartier_liste_cellule', ['id'=>$quartier->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('quartier/newcellule.html.twig', [
            'quartier' => $quartier,
            'cellule'=>$cellule,
            'form' => $form,
        ]);
    }

    
    
    #[Route("/{id}/education",name:"app_quartier_education", methods: ['GET'])]
    public function education(Quartier $quartier)
    {
        return $this->render('quartier/education.html.twig',[
            'quartier'=>$quartier
        ]);
    }
    #[Route("/{id}/listepersonnes",name:"app_quartier_personne", methods: ['GET'])]
    public function societe(Quartier $quartier)
    {
        return $this->render('quartier/listepersonne.html.twig',[
            'quartier'=>$quartier
        ]);
    }
}
